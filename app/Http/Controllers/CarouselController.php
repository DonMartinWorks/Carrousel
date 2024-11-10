<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('carousel-page', compact('images'));
    }
}
