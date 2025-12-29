<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TrialClassController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/kursus-coding-anak', [LandingController::class, 'kursus_coding_anak'])->name('kursus-coding-anak');
Route::get('/kursus-roblox', [LandingController::class, 'kursus_roblox'])->name('kursus-roblox');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/tentang-kami', [LandingController::class, 'about'])->name('about');
Route::get('/artikel', [LandingController::class, 'article'])->name('artikel');
Route::get('/category/{slug}', [LandingController::class, 'category'])
    ->name('category.show');
Route::get('/holiday-program', [LandingController::class, 'holiday_program'])->name('holiday-program');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/katalog', action: [LandingController::class, 'katalog'])->name('katalog');
Route::get('/kelasgratis', [TrialClassController::class, 'index'])->name('trial');
Route::post('/trial', [TrialClassController::class, 'store'])->name('trial.store');
Route::post('/leads', [TrialClassController::class, 'storeLead'])->name('leads.store');

// Route::view('/pro', 'pro')->name('adult');

/** PREVIEW: dummy data (tanpa kirim) — buka http://localhost:8000/_preview/email/trial */
Route::get('/_preview/email/trial', [TrialClassController::class, 'testTrialToEmail']);

// wildcard
Route::get('/{slug}', [LandingController::class, 'articleShow'])->name('artikel.show');