<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/','/home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [\App\Http\Controllers\SnippetController::class], 'index')->name('dashboard');


