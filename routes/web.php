<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('home');
Route::view('/adult', 'pages.adult')->name('adult');