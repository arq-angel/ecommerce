<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->orderBy('serial', 'ASC')->get();
        return view(
            'frontend.home.home',
            compact(
                'sliders'
            )
        );
    }
}
