<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function front_slider() {
		$sliders = [['id' => 1, 'title' => 'slider1', 'image' => 'images/images.jpg', 'sort_order' => 1],
								['id' => 2, 'title' => 'slider2', 'image' => 'images/images1.jpeg', 'sort_order' => 2],
								['id' => 3, 'title' => 'slider3', 'image' => 'images/q.jpg', 'sort_order' => 3]];
		return response(['sliders' => $sliders]);
	}
}
