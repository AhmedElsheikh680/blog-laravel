<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\SecondController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('second', [SecondController::class, 'showString']);

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





















