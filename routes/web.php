<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulsController;

Route::get('/', function () {
    return view('moduls.carousel');
})->name('home');

Route::get('/service', [ModulsController::class, 'index']);
Route::get('/gender', [ModulsController::class, 'gender']);
Route::get('/barberman', [ModulsController::class, 'barberman']);
Route::get('/jadwal', [ModulsController::class, 'jadwal']);
Route::get('/transaction', [ModulsController::class, 'transaction']);
Route::get('/transconfirm', [ModulsController::class, 'transconfirm']);
Route::get('/failtransconfirm', [ModulsController::class, 'failtransconfirm']);
Route::get('/login', [ModulsController::class, 'login']);
Route::get('/register', [ModulsController::class, 'register']);
