<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('asesor')->group(function () {
    Route::get('/', function () {
        return view('asesor.home');
    })->name('asesor.home');
});