<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function password(){
        return view('admin.password');
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
