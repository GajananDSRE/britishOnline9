<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function profile(){
        $user = Auth::User();
        return view('admin.profile',['user'=>$user]);
    }

    public function showPassword(){
        return view('admin.password');
    }

    public function changePassword(Request $request){
        $auth = Auth::user();
        $current_password = $request->current_password;
        if (password_verify($current_password, $auth->password) == false) {
            return response()->json(['error' => "Invalid password !"]);
        }
        $password = $request->password;
        if ($current_password == $password) {
            return response()->json(['error' => "Old password does not accepted !"]);
        }
        if ($password == null && $password == '') {
            return response()->json(['error' => "Invalid password !"]);
        }
        $auth->update([
            'password' => Hash::make($password),
            'is_fresh' => 0
        ]);
        return response()->json(['success' => 'Password changed successfully']);
    }

    public function createId(){
        return view('admin.create_id');
    }
    public function exchange_id_request(){
		return view('admin.exchange_id_req');
	}
}
