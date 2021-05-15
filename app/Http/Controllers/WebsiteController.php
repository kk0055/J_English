<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website');
    }

    public function about()
    {
        return view('about');
    }
}
