<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('home');
Route::view('/program', 'pages.program')->name('program');
Route::view('/about', 'pages.about')->name('about');
Route::view('/artikel', 'pages.artikel')->name('artikel');
Route::view('/artikel/{slug}', 'pages.artikel.show')->name('artikel.show');
Route::view('/event', 'pages.event')->name('event');

Route::view('/adult', 'pages.adult')->name('adult');