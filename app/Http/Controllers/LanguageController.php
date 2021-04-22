<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // $languages = Language::all()->random(200);
        $languages = Language::inRandomOrder()->take(150)->get();
      
      
        // dd($languages);
        return view('home',[
            'languages' => $languages,
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('create');
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store(Request $request)
    {
        $this->validate($request, [
            'english' => 'required',
            'japanese' => 'required',
      
        ]);
       
        
            $request->user()->languages()->create([
            'english' => $request->english,
            'japanese' => $request->japanese,
            
            ]);
           
            return redirect()->to('/')->with('info','追加');
            
    }
    
    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
        public function edit($id)
        {
            $language = Language::find($id);

            // dd($language);
            return view('edit',[
                'language' => $language
            ]);
        }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update($id)
    {
        //
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        //
    }

        public function favoritePost(Language $language)
    {
        Auth::user()->favorites()->attach($language->id);

        return back();
    }

    public function unfavoritePost(Language $language)
    {
        Auth::user()->favorites()->detach($language->id);

        return back();
    }

        public function myFavorites()
    {
        $languages = Auth::user()->favorites;

      
        return view('my_favorites', compact('languages'));
    }
}
