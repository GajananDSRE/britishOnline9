<?php

namespace Illuminate\Foundation\Auth;
namespace App\Services\User;

use Illuminate\Auth\Events\Registered;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB,Exception,Validator;
use App\Models\User;

trait RegistersUsers
{
    public function showRegistrationForm()
    {
        return view('users.register');
    }
   
    public function register(SignUpRequest $request)
    {
    	$data =  User::create([
            'name' => $request['name'],
            'userid' => $request['userid'],
            'contact' => $request['contact'],
            'password' => Hash::make($request['password']),
            'token' => $request['_token'],
            'role_id'=>'1',
            'whatsapp_no'=>$request['whatsapp_no'],
        ]);
        if($data){
        	return redirect('login');
        }else{
        	return redirect('register');
        } 
    }
}