<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PuppyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


Route::prefix('homepage')->group(function () {
    Route::prefix('puppyManager')->group(function () {
        Route::get('/', [PuppyController::class, 'index'])->name('puppy.index')->middleware('loginAdmin');
        Route::get('/create', [PuppyController::class, 'create'])->name('puppy.create');
        Route::post('/create', [PuppyController::class, 'store'])->name('puppy.store');
        Route::get('/createBreed', [PuppyController::class, 'createBreed'])->name('puppy.createBreed');
        Route::post('/createBreed', [PuppyController::class, 'storeBreed'])->name('puppy.storeBreed');
        Route::get('/update/{id}', [PuppyController::class, 'edit'])->name('puppy.edit');
        Route::post('/update/{id}', [PuppyController::class, 'update'])->name('puppy.update');
        Route::get('/delete/{id}', [PuppyController::class, 'confirm'])->name('puppy.confirm');
        Route::post('/delete/{id}', [PuppyController::class, 'delete'])->name('puppy.delete');

        Route::get('/breed', [PuppyController::class, 'GetAllBreed'])->name('puppy.breed');
        Route::get('/breedUpdate/{id}', [PuppyController::class, 'breedUpdate'])->name('breed.update');
        Route::post('/breedUpdate/{id}', [PuppyController::class, 'breedEdit'])->name('breed.Edit');
        Route::get('/breedDelete/{id}', [PuppyController::class, 'breedConfirm'])->name('breed.confirm');
        Route::post('/breedDelete/{id}', [PuppyController::class, 'breedDelete'])->name('breed.delete');

//        Route::post('')
    });

    Route::prefix('customerManager')->group(function () {
        Route::get('/account', [RegisterController::class, 'userAccount'])->name('user.account');
        Route::get('/update/{id}', [RegisterController::class, 'editCustomer'])->name('user.edit');
        Route::post('/update/{id}', [RegisterController::class, 'updateCustomer'])->name('user.update');
        Route::get('/delete/{id}', [RegisterController::class, 'confirmCustomer'])->name('user.confirm');
        Route::post('/delete/{id}', [RegisterController::class, 'deleteCustomer'])->name('user.delete');

    });
    Route::get('/admin', [AdminController::class, 'adminAccount'])->name('admin.account');
    Route::get('/myaccount/{username}', [AdminController::class, 'myAccount'])->name('admin.myaccount');
    Route::get('/update/{username}', [AdminController::class, 'editAdmin'])->name('admin.edit');
    Route::post('/update/{username}', [AdminController::class, 'updateAdmin'])->name('admin.update');
});


Route::prefix('Main')->group(function () {
    Route::get('/', [Usercontroller::class, 'index'])->name('user.view');
    Route::get('/Detail/{id}', [Usercontroller::class, 'GetPetById'])->name('Pet.Detail');
});


Route::prefix('userauth')->group(function () {
    Route::get('/login', [UserAuthController::class, 'index']);
    Route::post('/login', [UserAuthController::class, 'login',])->name('admin.login');
    Route::get('/register', [RegisterController::class, 'index',])->name('user.register');
    Route::post('/register', [RegisterController::class, 'storeAccount'])->name('user.store');
    Route::get('', [UserAuthController::class, 'logout'])->name('admin.logout');
});

