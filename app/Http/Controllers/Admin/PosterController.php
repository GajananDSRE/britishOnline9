<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;
use DB,Exception,Cache;

class PosterController extends Controller
{
    public function index(){
        return view('admin.poster');
    }

    public function slider(){
        $sliders = DB::table('sliders')->get();        
        return view('admin.slider', compact('sliders'));
    }

    public function addmultipleSlider($file,$folder_name)
    { 
        try{
            if(!$file){
                throw new Exception("File Not Found.", 1); 
            }
            $image_name= uniqid().".".$file->getClientOriginalExtension();
            $file->move(public_path().'/images/'.$folder_name.'/', $image_name);
            return array('status' => true, 'file' => $image_name); 
        }catch(Exception $e){
            return array('status' => false);
        }
    }

    public function createFrontSlider(Request $request)
    {
        try{
        if(!$request->isMethod('post') || !$request->ajax()){
            throw new Exception("Http Request not allowed.", 1); 
        }
        $input = $request->all();
    
        $validator = Validator::make($input,[
            "data" => "required|array|min:1",
            "data.*.file" => "required|mimes:jpeg,jpg,png",
            "data.*.title" => "required",
            "data.*.sort_order" => "required",
        ],
        [
            'data.*.file.required' => 'The image field is required.',
            'data.*.file.mimes' => 'The image must be a file of type: jpeg, jpg, png.',
            'data.*.title.required' => 'The title field is required.',
            'data.*.sort_order.required' => 'The sort order field is required.',
        ]);
        if($validator->fails()){
            throw new Exception(implode('<br>', $validator->errors()->all()), 1);
        }
        $inputData = $request->all(); 
        $slider_folder = 'front_slider';
        $slider = array();
        $slider_data = array();
        if(count($inputData['data']) > 0){
            foreach ($inputData['data'] as $data) {
                $slider_name = $this->addmultipleSlider($data['file'],$slider_folder);               
                if($slider_name['status'] == true){                   
                    $slider['title'] = $data['title'];
                    $slider['image'] = $slider_name['file'];
                    $slider['sort_order'] = $data['sort_order'];
                    array_push($slider_data,$slider);
                }
            }	
            if(count($slider_data) > 0){
                Slider::insert($slider_data);
            }
        }
         
        return response()->json(['errorStatus' => false, 'slider_data' => $slider_data, 'message' => 'Slider Updated Successfully']);
        }catch(Exception $e){
            return response()->json(['errorStatus' => true, 'message' => $e->getMessage()]);
        }
    }
    public function editslider(Request $request,$id){  
        $slide_data = Slider::find($id);
        return response(['slide_data' => $slide_data]);
    }

    public function updateFrontSlider(Request $request)
    {
        try{
            if(!$request->isMethod('post') || !$request->ajax()){
                throw new Exception("Http Request not allowed.", 1); 
            }
            $input = $request->all();
            $validator = Validator::make($input,[
                "file" => "nullable|mimes:jpeg,jpg,png",
                "title" => "required",
                "sort_order" => "required|numeric",
                "slider_id" => 	'required',
            ],
            [
                'file.mimes' => 'The image must be a file of type: jpeg, jpg, png.',
                'title.required' => 'The title must be required.',
                'sort_order.required' => 'The sort order must be required.',
            ]);
            if($validator->fails()){
                throw new Exception(implode('<br>', $validator->errors()->all()), 1);
            }
            $input = $request->all();
            $slider_folder = 'front_slider';
            $data = array();
            $data =  $request->only('title','sort_order');
            $sliderData = Slider::find($input['slider_id']);
            if(!empty($input['file'])){
                $slider_name = $this->addmultipleSlider($input['file'],$slider_folder);
                if($slider_name['status'] == false){ 
                    throw new exception("Error occurred while upload file!"); 
                }
                $data['image'] = $slider_name['file'];
            }
            $sliderData->fill($data)->save();
            return response()->json(['errorStatus' => false, 'sliderdata' => $sliderData, 'message' => 'Slider Updated Successfully']);
        }catch(Exception $e){
            return response()->json(['errorStatus' => true, 'message' => $e->getMessage()]);
        }

    }
    public function delete(Request $request)
    {         
        $validator = Validator::make($request->all(),[
            'id' => 'required|exists:sliders,id',
        ]);
        if($validator->fails()){
            throw new Exception(implode('<br> ', $validator->errors()->all()), 1);
        }
        Slider::find($request->id)->delete();
        return response()->json([
            'success'  => 'Slider deleted successfully.'
        ]);
    }
}
