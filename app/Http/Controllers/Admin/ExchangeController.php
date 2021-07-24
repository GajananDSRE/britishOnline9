<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Validation\ValidationException;
use App\Http\Requests\UpdateExchangeRequest;
use App\Http\Requests\AadExchangeRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\Exchange;
use \Crypt;


class ExchangeController extends Controller
{
	
	/**
     * get exchage ID data.
     * 
     */	
	public function index(){
		$exchange_data = DB::table('exchanges')->get();
		return view('admin.index',compact('exchange_data'));
	}
	
	/**
     * Display exchage ID interface.
     * 
     */	
    public function showExchange(){
        return view('admin.add_exchange');
    }
    
    /**
     * Add exchage ID .
     * @param AadExchangeRequest $request
     */
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

    /**
     * edit exchage ID data .
     * @param Request $request
     */
    public function editExchange($id){ 
    	$up_exchange_data = DB::table('exchanges')->where('id',$id)->first();
    	return view('admin.edit_exchange',compact('up_exchange_data'));
    }

    /**
     * Update exchage ID data .
     * @param Request $request
     */
    public function updateExchange(UpdateExchangeRequest $request){ 
    	try{
	    	if(!empty($request->id)){
	    		$file = $request->logo;
			    $folder_name	= 'exchange_img';
			    $logo_name  = "";
			    if(!empty($file)){
			    	$logo_name		= uniqid().".".$file->getClientOriginalExtension();
			    	$fileName		= $file->move(public_path().'/images/'.$folder_name.'/', $logo_name);
			    }
			    $update_data 	= Exchange::find($request->id);
			    $image_name = !empty($file)? $logo_name : $update_data->logo;
			    $update_password = !empty($request->password)? Hash::make($request->password) : $update_data->password;
			    $update_data->update([
		    							'name'		=>	$request->name, 
		    							'url'		=>	$request->url,
		    							'logo'		=>	$image_name,
		    							'demo_id'	=>	$request->demo_id,
		    							'password'	=>	$update_password,
		    							'sport'		=>  implode(',',$request['sport']),
		    							'balance'	=>	$request->balance,  
		    						]);
			return redirect()->to('/')->withSuccess('Exchange ID Update Successfully');
		    }
    	}catch(Exception $e){
		    return array('errorCode' => true,'message' => $e->getMessage());
		}
    }

     /**
     * Delete exchage ID data .
     *
     */
    public function deleteExchange(Request $request){
	
	    	$data = Exchange::find($request->id);
	    	$data->delete();
	    	return response()->json(['success' => 'Exchange ID Deleted Successfully.','id' => $request->id]);

    }

     /**
     * Lock and unLock exchage ID data setting .
     * @param Request $request
     */

    public function updateLockExchange(Request $request){
    	try {
	 		$user   =   Exchange::find($request->id);
	 		if ($user) {
	 			$input                  =   $request->all();
	 			$data                   =   [];

	 			if (isset($input['is_lock_id'])){
	 			$ExchangeData =	Exchange::where('id',$input['id'])->update(!empty($input['is_lock_id']) ? ['is_lock_id'=> '0'] : ['is_lock_id'=> '1']);
				return response()->json(['success' => 'SETTING HAS BEEN CHANGED SUCCESSFULLY.','is_lock_id' => $request->id]);
	 			} 
	 		}
 		}catch (Exception $e) {
            return response()->json(['error' => "PROBLEM IN PROCESSING YOUR REQUEST!"]);
        }	
    }


}
