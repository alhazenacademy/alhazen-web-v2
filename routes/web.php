<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TrialClassController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/artikel', [LandingController::class, 'article'])->name('artikel');
Route::get('/{slug}', [LandingController::class, 'articleShow'])->name('artikel.show');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/booking', [TrialClassController::class, 'index'])->name('trial');
Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');

// Route::view('/pro', 'pro')->name('adult');

/** PREVIEW: dummy data (tanpa kirim) — buka http://localhost:8000/_preview/email/trial */
Route::get('/_preview/email/trial', [TrialClassController::class, 'testTrialToEmail']);