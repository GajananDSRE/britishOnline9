<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamezoneController extends Controller
{
    public function gamezone(){
    	return view('users.gamezone');
    }
    public function tableGame(){
        return view('users.table_game');
    }
}
