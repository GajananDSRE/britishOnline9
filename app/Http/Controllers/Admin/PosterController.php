<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use DB;

class PosterController extends Controller
{
    public function index(){
        return view('admin.poster');
    }

    public function slider(){
        $sliders = DB::table('sliders')->get();
        //echo "<pre>"; print_r($sliders);exit;
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
         
        return response()->json([
            'success'  => 'Slider Added successfully.'
           ]);
    }

    public function updateFrontSlider(Request $request, $id){
        dd($request->all());

    }
}
