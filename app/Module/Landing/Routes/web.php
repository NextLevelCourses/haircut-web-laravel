<?php

use App\Module\Landing\Handler\Landing_handler;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing_handler::class, 'index'])->name('landing.index');
Route::get('/service', [Landing_handler::class, 'index'])->name('landing.service');
Route::get('/gender', [Landing_handler::class, 'gender'])->name('landing.gender');
Route::get('/barberman', [Landing_handler::class, 'barberman'])->name('landing.barberman');
Route::get('/schedule', [Landing_handler::class, 'schedule'])->name('landing.schedule');
Route::get('/transaction', [Landing_handler::class, 'transaction'])->name('landing.transaction');
Route::get('/success_transaction', [Landing_handler::class, 'success_transaction'])->name('landing.success_transaction');
Route::get('/failed_transaction', [Landing_handler::class, 'failed_transaction'])->name('landing.failed_transaction');
Route::get('/login', [Landing_handler::class, 'login'])->name('landing.login');
Route::get('/register', [Landing_handler::class, 'register'])->name('landing.register');
