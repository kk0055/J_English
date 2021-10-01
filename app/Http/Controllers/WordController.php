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
    

        
    // Admin用
    public function adminWordsCreate()
    {
        $japanese = JapaneseWord::latest()->paginate(100);
        $english = EnglishWord::latest()->paginate(100);
        return view('words.create',[
            'japanese' => $japanese,
            'english' => $english,
        ]);
    }  

    /**
     * Admin用
     *
     * @return Response
     */
    public function japaneseStore(Request $request)
    {
     
        $validation =  $this->validate($request, [
            'word' => 'required|unique:japanese_words',

        ]);
        JapaneseWord::create([
            'word' => $request->word,
        ]);
        return back()->withStatus("追加！");
    }

    /**
     * Admin用
     *
     * @return Response
     */
    public function englishStore(Request $request)
    {
     
        $validation =  $this->validate($request, [
            'word' => 'required|unique:english_words'

        ]);
        EnglishWord::create([
            'word' => $request->word,
        ]);
        return back()->withStatus("追加！");
    }
    // Admin用
    public function enWordsDestroy(EnglishWord $word)
    {

        $word->delete();

        return back()->withStatus("Deleted！");
    }
    // Admin用
    public function jaWordsDestroy(JapaneseWord $word)
    {

        $word->delete();

        return back()->withStatus("Deleted！");
    }
}
