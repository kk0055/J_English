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
       
        
            $request->user()->drinks()->create([
            'english' => $request->english,
            'japanese' => $request->japanese,
            
            ]);
           
            return redirect()->route('home')->with('info','追加');
            
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
