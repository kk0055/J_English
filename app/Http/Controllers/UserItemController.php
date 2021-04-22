<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserItemController extends Controller
{
    public function index(User $user)
    {
     
        $languages = $user->languages()->latest()->with('user')->simplePaginate(20);
       
        return view('users.index',[
            
            'languages' => $languages ,
        ]);
    }
    
}
