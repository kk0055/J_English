<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JapaneseWordPost;
use App\Http\Resources\JapaneseWordPostResource;
class WordPostController extends Controller
{
    public function JapaneseWordPostIndex()
    {
      $posts = JapaneseWordPost::latest()->paginate(5);
      return JapaneseWordPostResource::collection($posts);
    } 

    public function JapaneseWordPostStore()
    {
    
    }   

    public function EnglishWordPostIndex()
    {
    
    }   

    public function EnglishWordPostStore()
    {
    
    }   
}
