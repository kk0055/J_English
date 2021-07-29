<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishWord;
class WordController extends Controller
{

    public function englishWord()
    {

    $words = EnglishWord::inRandomOrder()->take(30)->get();

    dd($words);
    return view('words.englishword', [
        'words' => $words,

    ]);
   
    }

 
}
