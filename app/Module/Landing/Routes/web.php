<?php

use App\Module\Landing\Handler\Landing_handler;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing_handler::class, 'index'])->name('Landing.index');
Route::get('/forgot', [Landing_handler::class, 'ViewForgot'])->name('Landing.forgot');
Route::get('/reset_from', [Landing_handler::class, 'ViewResetFrom'])->name('Landing.reset_from');
Route::prefix('contact')->group(function () {
    Route::get('/', [Landing_handler::class, 'contact'])->name('Landing.contact');
    Route::post('/', [Landing_handler::class, 'ContactSubmit'])->name('Landing.contact_submit');
});

Route::middleware(['auth:user', 'role.user'])->group(function () {
    Route::get('/service', [Landing_handler::class, 'Service'])->name('Landing.service');
    Route::get('/invoice', [Landing_handler::class, 'Invoice'])->name('Landing.invoice');
    Route::get('/gender', [Landing_handler::class, 'Gender'])->name('Landing.gender');
    Route::get('/barberman', [Landing_handler::class, 'Barberman'])->name('Landing.barberman');
    Route::get('/schedule', [Landing_handler::class, 'Schedule'])->name('Landing.schedule');
    Route::get('/transaction', [Landing_handler::class, 'Transaction'])->name('Landing.transaction');
    Route::get('/success_transaction', [Landing_handler::class, 'SuccessTransaction'])->name('Landing.success_transaction');
    Route::get('/failed_transaction', [Landing_handler::class, 'FailedTransaction'])->name('Landing.failed_transaction');
});
