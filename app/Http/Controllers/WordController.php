<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishWord;
use App\Http\Resources\EnglishWordResource;
class WordController extends Controller
{

    public function englishWord()
    {

    return EnglishWordResource::collection(EnglishWord::inRandomOrder()->take(3)->get());

    // dd($words);
    // return view('words.englishword', [
    //     'words' => $words,

    // ]);
   
    }

    public function index()
    {

        return view('words.englishWord', [
    
        ]);
    }
}
