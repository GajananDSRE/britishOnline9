<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorliMatkaController extends Controller
{
	public function realWorli(){
		return view('admin.real_worli');
	}
}
