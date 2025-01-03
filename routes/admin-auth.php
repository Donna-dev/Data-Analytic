<?php

use App\Http\Controllers\admin\Auth\loginController;
use App\Http\Controllers\admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create']) ->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [loginController::class, 'create'])->name('admin.login');
    Route::post('login', [loginController::class, 'store']);


});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::post('logout', [loginController::class, 'destroy'])->name('admin.logout');
});
