<?php

use App\Module\Landing\Handler\Landing_handler;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing_handler::class, 'index'])->name('Landing.index');
Route::get('/contact', [Landing_handler::class, 'contact'])->name('Landing.contact');

Route::middleware(['auth:user', 'role.user'])->group(function () {
    Route::get('/service', [Landing_handler::class, 'index'])->name('Landing.service');
    Route::get('/gender', [Landing_handler::class, 'gender'])->name('Landing.gender');
    Route::get('/barberman', [Landing_handler::class, 'barberman'])->name('Landing.barberman');
    Route::get('/schedule', [Landing_handler::class, 'schedule'])->name('Landing.schedule');
    Route::get('/transaction', [Landing_handler::class, 'transaction'])->name('Landing.transaction');
    Route::get('/success_transaction', [Landing_handler::class, 'SuccessTransaction'])->name('Landing.success_transaction');
    Route::get('/failed_transaction', [Landing_handler::class, 'FailedTransaction'])->name('Landing.failed_transaction');
});
