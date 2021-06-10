<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserItemController extends Controller
{
    public function index(User $user)
    {
       
        $languages = $user->languages()->latest()->with('user')->simplePaginate(50);
        $count = count($user->languages()->get());

        // dd($languages);
        return view('users.index',[
            
            'languages' => $languages ,
            'count' => $count
        ]);
    }

    
    
}
