<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
      
        // dd($languages);
        return view('home',[
            'languages' => $languages
        ]);
    }
}
