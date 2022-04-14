<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

Route::get('/login', [
    UserAuthController::class, 'index'
]);
Route::post('/login', [
    'uses' => 'App\Http\Controllers\UserAuthController@login',
//    UserAuthController::class,'login',
    'as' => 'user.login'
]);
Route::get('/Main', [
    'uses' => 'App\Http\Controllers\PuppyController@index',
    'as'=>'puppy.index'
]);
Route::get('/register', [
    'uses' => 'App\Http\Controllers\RegisterController@index',
    'as' => 'user.register'
]);

