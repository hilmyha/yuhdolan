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

Route::get('/', [LandingController::class, 'index']);
Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/kota', [KotaController::class, 'index']);


