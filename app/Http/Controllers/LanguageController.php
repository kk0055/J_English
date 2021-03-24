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
        $languages = Language::all()->shuffle();
      
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
            //
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
}
