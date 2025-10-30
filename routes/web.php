<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrialClassController;

Route::view('/', 'pages.index')->name('home');
Route::view('/program', 'pages.program')->name('program');
Route::view('/about', 'pages.about')->name('about');
Route::view('/artikel', 'pages.artikel')->name('artikel');
Route::view('/artikel/{slug}', 'pages.artikel.show')->name('artikel.show');
Route::view('/event', 'pages.event')->name('event');
Route::get('/booking', [TrialClassController::class, 'index'])->name('trial');
Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');

Route::view('/adult', 'pages.adult')->name('adult');