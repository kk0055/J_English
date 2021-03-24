<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserItemController extends Controller
{
    public function index(User $user)
    {
     
        $items = $user->languages()->with('user')->paginate(20);
       
        return view('users.index',[
            
            'items' => $items ,
        ]);
    }
}
