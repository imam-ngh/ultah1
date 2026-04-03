<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AlbumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application
|
*/

// Landing page - Main entry point
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Greeting card - After countdown
Route::get('/greeting', [LandingController::class, 'greeting'])->name('greeting');

// Album - Memory book
Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/api/memory/{id}', [AlbumController::class, 'getMemory'])->name('memory.detail');
