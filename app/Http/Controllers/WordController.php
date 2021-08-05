<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishWord;
use App\Models\JapaneseWord;
use App\Http\Resources\EnglishWordResource;
use App\Http\Resources\JapaneseWordResource;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{
    
    public function englishWord()
    {
        return view('words.englishword');
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
    

    public function japaneseCreate()
    {
        return view('language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function japaneseStore(Request $request)
    {
        $user = Auth::user();
        //ログインしてない時
        if (!$user) {
            return redirect()->to('auth/login');
        }

        EnglishWord::create([
            'word' => $request->word,
        ]);
        return back()->withStatus("追加！");
    }


  
}
