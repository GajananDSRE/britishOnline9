<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankingController extends Controller
{
    public function account_management(){
		return view('admin.depositewithdrawlreq.account_management');
	}
    public function deposite_request(){
		return view('admin.depositewithdrawlreq.deposite_request');
	}
    public function withdrawl_request(){
		return view('admin.depositewithdrawlreq.withdrawl_request');
	}
    public function downline_request_list(){
		return view('admin.depositewithdrawlreq.downline_request_list');
	}
    public function request_list(){
		return view('admin.depositewithdrawlreq.request_list');
	}
    public function time_management(){
		return view('admin.depositewithdrawlreq.time_management');
	}
}
