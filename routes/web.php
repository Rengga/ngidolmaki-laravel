<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KontenController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function() {
//     return view('gallery');
// });

Route::get('/', [GalleryController::class,'gallery']);
// Route::get('/dashboard', [KontenController::class,'index']);
Route::get('/create', [KontenController::class,'create']);
Route::post('/store', [KontenController::class,'store']);
Route::get('/edit/{id}', [KontenController::class,'edit']);
Route::post('/update/{id}', [KontenController::class,'update']);
Route::get('/destroy/{id}', [KontenController::class,'destroy']);

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\KontenController::class,'index'])->name('dashboard');
// Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');