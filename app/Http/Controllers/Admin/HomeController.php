<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassword;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function add_exchange(){
        return view('admin.add_exchange');
    }

    public function profile(){
        $users = Auth::User();
        return view('admin.profile',['users'=>$users]);
    }

    public function addprofilephoto($file,$folder_name)
    { 
        try{
            if(!$file){
                throw new Exception("File Not Found.", 1); 
            }
            $image_name= uniqid().".".$file->getClientOriginalExtension();
            $file->move(public_path().'/admin/vendors/images/'.$folder_name.'/', $image_name);
            return array('status' => true, 'file' => $image_name); 
        }catch(Exception $e){
            return array('status' => false);
        }
    }
    public function profileUpdate(ProfileRequest $request)
    { 
        try{
            $input = $request->all();
            if (isset($request->validator) && $request->validator->fails()) {
                throw new Exception(implode('<br> ', $request->validator->errors()->all()), 1);
            }
            $profile_folder = 'Profile';
            $data                   =   array();
            $user   =   User::find($input['id']);
            if ($user) {                
                if (isset($input)) {
                    if($input['type'] == 'profile'){
                        if(!empty($input['file'])){
                            $profile_name = $this->addprofilephoto($input['file'],$profile_folder);
                            if($profile_name['status'] == false){ 
                                throw new exception("Error occurred while upload file!"); 
                            }
                            $data['profile'] = $profile_name['file'];                        
                        }
                    }
                    if($input['type'] == 'name'){ $data['name'] = $input['name'];}
                    if($input['type'] == 'email'){ $data['email'] = $input['email'];}
                    if($input['type'] == 'contact'){ $data['contact'] = $input['contact'];}
                    if($input['type'] == 'whatsapp_no'){ $data['whatsapp_no'] = $input['whatsapp_no'];}
                    if($input['type'] == 'country'){ $data['country'] = $input['country'];}
                }
                $user->fill($data)->save();
                return response()->json(['errorStatus' => false, 'data' => $user, 'message' => 'Profile Updated Successfully']);
            }
        }catch(Exception $e){
            return response()->json(['errorStatus' => true, 'message' => $e->getMessage()]);
        }
    }

    public function showPassword(){
        return view('admin.password');
    }

    public function changePassword(ChangePassword $request){
        $auth = Auth::user();
        $current_password = $request->current_password;
        if (password_verify($current_password, $auth->password) == false) {
            return redirect()->back()->withErrors("Invalid password !")->withInput();
        }
        $password = $request->password;
        if ($current_password == $password) {
            return redirect()->back()->withErrors("Old password does not accepted !")->withInput();
        }
        if ($password == null && $password == '') {
            return redirect()->back()->withErrors("Invalid password !")->withInput();
        }
        $auth->update([
            'password' => Hash::make($password),
            'is_fresh' => 0
        ]);
        return redirect()->to('password')->withSuccess("Password changed successfully");
    }

    public function createId(){
        return view('admin.create_id');
    }
    public function exchange_id_request(){
		return view('admin.exchange_id_req');
	}
    public function admin_support(){
		return view('admin.support');
	}
}
