<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // $languages = Language::all()->random(200);
        $languages = Language::inRandomOrder()->take(100)->get();
      
      
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
       $user = Auth::user();
        //ログインしてない時
        if(!$user){

            return redirect()->to('/login'); 
            }

        $validation =  $this->validate($request, [
            'english' => 'required',
            'japanese' => 'required',
      
        ]);
       
       
        
            $request->user()->languages()->create([
            'english' => $request->english,
            'japanese' => $request->japanese,
            
            ]);
           
            return redirect()->to('/')->withStatus("追加！");
            
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
    public function update(Request $request,$id)
    {
        $language = Language::find($id);
        $input = $request->only('japanese','english');

        $validator = Validator::make($input, [
            'english' => 'required',
            'japanese' => 'required',
      
		]);

        //バリデーション失敗
		if($validator->fails()){
			return back()
				->withErrors($validator)
				->withInput();
		}

        	//バリデーション成功
		$language->japanese = $input["japanese"];
		$language->english = $input["english"];
		
		$language->save();

        return redirect()->route('user.post',$language->user->id)->withStatus("訂正完了！");;
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
