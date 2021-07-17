<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassword;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function profile(){
        $user = Auth::User();
        return view('admin.profile',['user'=>$user]);
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
