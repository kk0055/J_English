<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserItemController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', [LanguageController::class,'index'])->name('home');
Route::resource('/', LanguageController::class);


Route::post('favorite/{language}', [LanguageController::class,'favoritePost']);
Route::post('unfavorite/{language}', [LanguageController::class,'unfavoritePost']);

Route::get('my_favorites', [LanguageController::class,'myFavorites'])->middleware('auth');

Route::get('/{user}', [UserItemController::class,'index'])->name('user.post');

