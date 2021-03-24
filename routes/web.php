<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', [LanguageController::class,'index'])->name('home');
Route::resource('/', LanguageController::class);


Route::post('favorite/{post}', [LanguageController::class,'favoritePost']);
Route::post('unfavorite/{post}', [LanguageController::class,'unfavoritePost']);

Route::get('my_favorites', [LanguageController::class,'myFavorites'])->middleware('auth');

