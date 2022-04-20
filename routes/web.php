<?php

use App\Http\Controllers\PuppyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('/register', [
    'uses' => 'App\Http\Controllers\RegisterController@index',
    'as' => 'user.register'
]);
Route::post('/register', [RegisterController::class, 'storeAccount'])->name('user.store');

Route::get('', [
    UserAuthController::class, 'logout'
])->name('user.logout');

Route::prefix('homepage')->group(function () {
    Route::get('/', [PuppyController::class, 'index'])->name('puppy.index')->middleware('loginAdmin');
    Route::get('/create', [PuppyController::class, 'create'])->name('puppy.create');
    Route::post('/create', [PuppyController::class, 'store'])->name('puppy.store');
    Route::get('/delete/{id}', [PuppyController::class, 'confirm'])->name('puppy.confirm');
    Route::get('/update/{id}', [PuppyController::class, 'edit'])->name('puppy.edit');
    Route::post('/update/{id}', [PuppyController::class, 'update'])->name('puppy.update');
    Route::get('/delete/{id}', [PuppyController::class, 'confirm'])->name('puppy.confirm');
    Route::post('/delete/{id}', [PuppyController::class, 'delete'])->name('puppy.delete');

//    Route::group('account')->group(function (){
//
//    });
});

Route::prefix('Main')->group(function () {
    Route::get('/', [Usercontroller::class, 'index'])->name('user.view');
});

Route::get('/account', [RegisterController::class, 'userAccount'])->name('user.account');
