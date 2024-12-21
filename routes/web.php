<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DA4B_GROUP7', function () {
    return view('layouts.dashboard');
})->name('DA4B_GROUP7');

Route::get('/Tables', function () {
    return view('layouts.partials.tables');
})->name('Tables');

Route::get('/Charts', function () {
    return view('layouts.partials.charts');
})->name('Charts');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');

Route::get('/Login', function () {
    return view('profile.login');
})->name('Login');





