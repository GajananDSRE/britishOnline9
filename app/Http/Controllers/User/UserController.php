<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    // 	return view('users.index');
    // }

    public function contact(){
        return view('users.contact');
    }

    public function profile(){
        return view('users.profile');
    }
}
