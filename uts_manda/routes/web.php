<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// // Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data buku
Route::get('/buku/', [BukuController::class, 'index'])->middleware('auth');
Route::get('/buku/form/', [BukuController::class, 'create'])->middleware('auth');
Route::post('/buku/store/', [BukuController::class, 'store'])->middleware('auth');
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->middleware('auth');
Route::put('/buku/{id}', [BukuController::class, 'update'])->middleware('auth');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->middleware('auth');
