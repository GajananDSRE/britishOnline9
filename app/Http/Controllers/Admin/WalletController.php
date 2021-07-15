<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function wallet(){
        return view('admin.wallet');
    }
}
