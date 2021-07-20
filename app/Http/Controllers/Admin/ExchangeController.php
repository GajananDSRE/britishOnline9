<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Validation\ValidationException;
use App\Http\Requests\AadExchangeRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\Exchange;


class ExchangeController extends Controller
{

	public function index(){
		$exchange_data = DB::table('exchanges')->get();
		return view('admin.index',compact('exchange_data'));
	}	
    public function showExchange(){
        return view('admin.add_exchange');
    }
    public function addExchange(AadExchangeRequest $request){
		try{
		        $file = $request->logo;
		        $folder_name	= 'exchange_img';
		        if(!$file){
		        		throw new Exception("File Not Found.", 1); 
		            }
		        $logo_name		= uniqid().".".$file->getClientOriginalExtension();
		        $fileName		= $file->move(public_path().'/images/'.$folder_name.'/', $logo_name);
		        if(!empty($request)){
			        	$data =  Exchange::create([
			            'name'		=> $request['name'],
			            'url'		=> $request['url'],
			            'logo'		=> $logo_name,
			            'demo_id'	=> $request['demo_id'],
			            'password'	=> Hash::make($request['password']),
			            'sport'		=> implode(',',$request['sport']),
			            'balance'	=> $request['balance'],
			            'token'		=> $request['_token'],
			        ]);
		        }
		    	return redirect()->to('/')->withSuccess("Exchange Add successfully");
		    }catch(Exception $e){
		        return array('errorCode' => true,'message' => $e->getMessage());
		    }
    }
    public function editExchange($id){ 
    	$up_exchange_data = DB::table('exchanges')->where('id',$id)->first(); 
    	return view('admin.edit_exchange',compact('up_exchange_data'));
    }
    public function updateExchange(Request $request){

    	$update_data = DB::table('exchanges')
    						->where('id',$request->id)
    						->update();

    	if(!empty($update_data)){
    		echo "successfully";
    	}else{
    		echo "not successfully";
    	}
    	// echo "<pre>";
    	// print_r($update_data);
    	//return view('admin.index',compact('update_data'));
    }

    public function deleteExchange($id){
    	$data = Exchange::find($id);
    	$data->delete();
    	return redirect()->to('/')->withSuccess('Exchange ID Deleted Successfully');
    }

    public function getExchange(){


    }
}
