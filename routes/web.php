<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserItemController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;


Route::get('/user', [UserController::class, 'index']);

Auth::routes();
Route::resource('/', LanguageController::class)->except('edit','update');
// Route::get('/', [LanguageController::class,'index']);
// Route::get('/create', [LanguageController::class,'create']);
// Route::post('/create', [LanguageController::class,'store']);
Route::get('/edit/{id}', [LanguageController::class,'edit'])->name('edit');
Route::post('/edit/{id}', [LanguageController::class,'update'])->name('update');


Route::get('/website', [WebsiteController::class,'index'])->name('website');

Route::post('/favorite/{language}', [LanguageController::class,'favoritePost']);
Route::post('/unfavorite/{language}', [LanguageController::class,'unfavoritePost']);

Route::get('/my_favorites', [LanguageController::class,'myFavorites'])->middleware('auth');

Route::get('/{user}', [UserItemController::class,'index'])->name('user.post');



