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
    

    public function wordsCreate()
    {
        $japanese = JapaneseWord::latest()->get();
        $english = EnglishWord::latest()->get();

        return view('words.create',[
            'japanese' => $japanese,
            'english' => $english,
        ]);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function japaneseStore(Request $request)
    {
     
        $validation =  $this->validate($request, [
            'word' => 'required',

        ]);
        JapaneseWord::create([
            'word' => $request->word,
        ]);
        return back()->withStatus("追加！");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function englishStore(Request $request)
    {
     
        $validation =  $this->validate($request, [
            'word' => 'required',

        ]);
        EnglishWord::create([
            'word' => $request->word,
        ]);
        return back()->withStatus("追加！");
    }
  
}
