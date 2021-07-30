<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishWord;
use App\Http\Resources\EnglishWordResource;
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
        return view('words.englishWord');
    }

    public function getJapaneseWord()
    {
    return EnglishWordResource::collection(EnglishWord::inRandomOrder()->take(3)->get());

   
    }

  
}
