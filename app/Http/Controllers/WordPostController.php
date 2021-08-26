<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JapaneseWordPost;
use App\Http\Resources\JapaneseWordPostResource;
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

    
    public function EnglishWordPostIndex()
    {
    
    }   

    public function EnglishWordPostStore()
    {
    
    }   
}
