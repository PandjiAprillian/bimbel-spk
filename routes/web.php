<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\SawController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\WeightController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::view('/', 'layouts.master');

Route::resource("alternatives", AlternativeController::class);
Route::resource("scores", ScoreController::class)->middleware('auth');
Route::resource("weights", WeightController::class)->middleware('auth');
Route::get('/saws', [SawController::class, 'index'])->name('saws.index');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware();
