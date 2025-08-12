<?php

use App\Module\Landing\Handler\Landing_handler;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing_handler::class, 'index'])->name('Landing.index');
Route::prefix('forgot')->group(function () {
    Route::get('/password', [Landing_handler::class, 'ForgotPasswordView'])->name('Landing.forgotPassword.view');
    Route::post('/submit', [Landing_handler::class, 'ForgotPasswordSubmit'])->name('Landing.forgotPassword.submit');
});
Route::prefix('reset')->group(function () {
    Route::get('/{token}/password', [Landing_handler::class, 'ResetPasswordToken'])->name('Landing.resetPassword.token');
    Route::post('/{token}/submit', [Landing_handler::class, 'ResetPasswordSubmit'])->name('Landing.resetPassword.submit');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [Landing_handler::class, 'contact'])->name('Landing.contact');
    Route::post('/', [Landing_handler::class, 'ContactSubmit'])->name('Landing.contact_submit');
});

// Route::middleware(['auth:user', 'role.user'])->group(function () {
//     // Route::get('/service', [Landing_handler::class, 'Service'])->name('Landing.service');
//     Route::get('/invoice', [Landing_handler::class, 'Invoice'])->name('Landing.invoice');
//     // Route::get('/gender', [Landing_handler::class, 'Gender'])->name('Landing.gender');
//     // Route::get('/barberman', [Landing_handler::class, 'Barberman'])->name('Landing.barberman');
//     // Route::get('/schedule', [Landing_handler::class, 'Schedule'])->name('Landing.schedule');
//     Route::get('/transaction', [Landing_handler::class, 'Transaction'])->name('Landing.transaction');
//     Route::get('/success_transaction', [Landing_handler::class, 'SuccessTransaction'])->name('Landing.success_transaction');
//     Route::get('/failed_transaction', [Landing_handler::class, 'FailedTransaction'])->name('Landing.failed_transaction');
// });
