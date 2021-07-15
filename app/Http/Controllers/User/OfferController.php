<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offer(){
        return view('users.offer');
    }
}
