<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishWord;
use App\Models\JapaneseWord;
use App\Http\Resources\EnglishWordResource;
use App\Http\Resources\JapaneseWordResource;
class WordController extends Controller
{
    
    public function englishWord()
    {
        return view('words.englishWord');
    }

    public function getEnglishWord()
    {
    return EnglishWordResource::collection(EnglishWord::inRandomOrder()->take(3)->get());

   
    }

    public function japanesehWord()
    {
        return view('words.japaneseword');
    }

    public function getJapaneseWord()
    {
    return JapaneseWordResource::collection(JapaneseWord::inRandomOrder()->take(3)->get());

   
    }

  
}
