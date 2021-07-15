<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function book_details_one(){
		return view('admin.reports.book_details_one');
	}
    public function book_details_two(){
		return view('admin.reports.book_details_two');
	}
    public function dailypl(){
		return view('admin.reports.dailypl');
	}
    public function finalsheet(){
		return view('admin.reports.finalsheet');
	}
}
