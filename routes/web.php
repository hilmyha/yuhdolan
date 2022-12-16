<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\LandingController;
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


