<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LanguageController extends Controller
{
    public function index()
    {
       
        // $languages = Language::inRandomOrder()->take(100)->get();
        $languages = Language::with('user')->inRandomOrder()->take(30)->get();
      
        return view('home',[
            'languages' => $languages,
            
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
            return back()->withStatus("追加！");
                  
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

        return redirect()->route('user.post',$language->user->name)->withStatus("訂正完了！");;
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
        $languages = Auth::user()->favorites()->orderBy('pivot_created_at','desc')->get();

        
        return view('users.my_favorites', compact('languages'));
    }

    public function JapaneseToEnglish()
    {
       
        $languages = Language::with('user')->inRandomOrder()->take(30)->get();
      
        return view('english_to_japanese',[
            'languages' => $languages,
           
        ]);
    }

}
