<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\NewsController;


Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/redirect/{service}', [SocialController::class,'redirect']);
Route::get('/callback/{service}', [SocialController::class,'callback']);


Route::group(['namespace'=> 'Front'], function() {
    Route::get('/index', [UserController::class, 'getIndex']);
});
//Route::resource('news', NewsController::class);


//Route::group(['namespace' => 'Admin'], function(){
//    Route::get('second0', [SecondController::class, 'showString0']);
//    Route::get('second1', [SecondController::class, 'showString1']);
//    Route::get('second2', [SecondController::class, 'showString2']);
//    Route::get('second3', [SecondController::class, 'showString3']);
//});
//Route::get('login', function (){
//   return "You Are Login";
//})->name('login');
//
//
Route::get('/', function () {
    return view('welcome');
});

//Route::group(['namespace' => 'admin'], function() {
//   Route::get('second', [SecondController::class, 'showString']);
//});

//Route::get('second', [SecondController::class, 'showString']);


//Route::namespace('Front')->group(function() {
//    //ALl Routes
//    Route::get('/users', [UserController::class, 'showAdminName']);
//});

//Route::group(['prefix' => 'users'], function() {
//
//    Route::get('/show', [Controller::class,'shows']);
//})->middleware('auth');
//Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
//
//    Route::get('/show', [Controller::class,'shows']);
//});

























