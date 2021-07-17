<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGamezoneController extends Controller
{
	public function indian_casino(){
		return view('admin.gamezone.indian_casino');
	}
	public function live_casino(){
		return view('admin.gamezone.live_casino');
	}
	public function all_casino_userlist(){
		return view('admin.gamezone.casino_userlist');
	}
	public function table_game(){
		return view('admin.gamezone.table_game');
	}
	public function ludo_game(){
		return view('admin.gamezone.ludo_game');
	}	
	public function add_game(){
		return view('admin.gamezone.add_game');
	}
}
