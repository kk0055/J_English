<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if(!$query) {
            return back();
        }
       $languages = Language::where('english', 'LIKE',"%{$query}%")
       ->orWhere('japanese', 'LIKE',"%{$query}%")
       ->simplePaginate(20);
    
    //    dd($languages);
       return view('search_results',[
           'languages' => $languages
       ]);
    }
}
