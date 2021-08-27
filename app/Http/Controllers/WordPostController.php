<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JapaneseWordPost;
use App\Models\EnglishWordPost;
use App\Http\Resources\JapaneseWordPostResource;
use App\Http\Resources\EnglishWordPostResource;
class WordPostController extends Controller
{
    public function JapaneseWordPostIndex()
    {
      $posts = JapaneseWordPost::latest()->take(100)->get();
      return JapaneseWordPostResource::collection($posts);
    } 

    public function JapaneseWordPostStore(Request $request)
    {
        $post = JapaneseWordPost::create($request->all());
        return response()->json($post);
    }   
    public function JapaneseWordPostDelete($id)
    {
      JapaneseWordPost::destroy($id);
    
      return response()->json("ok");
    }  

    

    public function EngliahWordPostIndex()
    {
      $posts = EnglishWordPost::latest()->take(100)->get();
      
      return EnglishWordPostResource::collection($posts);
    }   

    public function EngliahWordPostStore(Request $request)
    {
      $post = EnglishWordPost::create($request->all());
      return response()->json($post);
    }   

    public function EngliahWordPostDelete($id)
    {
      EnglishWordPost::destroy($id);
      return response()->json("ok");
    }   
}
