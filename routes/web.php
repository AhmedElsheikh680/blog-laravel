<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\SecondController;

Route::group(['namespace' => 'Admin'], function(){
    Route::get('second0', [SecondController::class, 'showString0']);
    Route::get('second1', [SecondController::class, 'showString1']);
    Route::get('second2', [SecondController::class, 'showString2']);
    Route::get('second3', [SecondController::class, 'showString3']);
});
Route::get('login', function (){
   return "You Are Login";
})->name('login');


//Route::get('/', function () {
//    return view('welcome');
//});

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





















