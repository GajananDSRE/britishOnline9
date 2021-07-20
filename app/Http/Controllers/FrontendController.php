<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class FrontendController extends Controller
{
	public function front_slider() {
		$sliders = Slider::all();
		return response(['sliders' => $sliders]);
	}
}
