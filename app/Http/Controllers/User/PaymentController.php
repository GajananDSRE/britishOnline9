<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function wallet(){
    	return view('users.wallet');
    }

    public function payment(){
    	return view('users.payment');
    }
}
