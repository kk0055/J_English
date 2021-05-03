<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserItemController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/user', [UserController::class, 'index']);

Route::resource('/', LanguageController::class)->except('edit','update');
Route::get('/website', [WebsiteController::class,'index'])->name('website');

Route::get('/edit/{id}', [LanguageController::class,'edit'])->name('edit');
Route::post('/edit/{id}', [LanguageController::class,'update'])->name('update');

Route::post('/favorite/{language}', [LanguageController::class,'favoritePost']);
Route::post('/unfavorite/{language}', [LanguageController::class,'unfavoritePost']);
Route::get('/my_favorites', [LanguageController::class,'myFavorites'])->middleware('auth');

Route::get('/{user}', [UserItemController::class,'index'])->name('user.post');




Route::group(['middleware' => ['auth.admin']], function () {

  Route::get('/admin/show', [AdminController::class, 'show']);
  Route::post('/admin/logout', [AdminController::class, 'logout']);
  Route::get('/admin/user_list', [AdminController::class, 'showUserList']);
  Route::get('/admin/user/{id}', [AdminController::class, 'showUserDetail']);
  Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
  Route::post('/admin/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
  });

  Route::get('/admin/login', [AdminController::class, 'showLoginform']);
  Route::post('/admin/login', [AdminController::class, 'login']);