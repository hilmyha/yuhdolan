<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// landing page
Route::get('/', [LandingController::class, 'index']);
// wisata
Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/wisata/{wisata:slug}', [WisataController::class, 'show']);
// kota
Route::get('/kota', [KotaController::class, 'index']);
Route::get('/kota/{kota:slug}', [KotaController::class, 'show']);
// blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);


// admin
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

