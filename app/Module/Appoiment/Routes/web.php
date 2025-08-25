<?php

use App\Module\Appoiment\Handler\Appoiment_handler;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:user', 'role.user'])->group(function () {
    Route::prefix('book')->group(function () {
        Route::get('/', [Appoiment_handler::class, 'View'])->name('Appoiment.view_book');
        Route::post('/', [Appoiment_handler::class, 'ConfirmationOrder'])->name('Appoiment.order_confirmation_book');
    });
    Route::get('barberman/{barberman_id}/schedule', [Appoiment_handler::class, 'HandlerGetScheduleByBarberman'])
        ->name('Appoiment.get_schedule_by_barberman');
    Route::prefix('service')->group(function () {
        Route::get('/', [Appoiment_handler::class, 'HandlerGetService'])->name('Appoiment.get_service');
        Route::get('{service_id}/barberman', [Appoiment_handler::class, 'HandlerGetBarbermanByService'])->name('Appoiment.get_barberman_by_service');
    });
});
