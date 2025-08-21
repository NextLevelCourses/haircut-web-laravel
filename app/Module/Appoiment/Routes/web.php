<?php

use App\Module\Appoiment\Handler\Appoiment_handler;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:user', 'role.user'])->group(function () {
    Route::prefix('book')->group(function () {
        Route::get('/', [Appoiment_handler::class, 'View'])->name('Appoiment.view_book');
        Route::post('/', [Appoiment_handler::class, 'Order'])->name('Appoiment.order_book');
    });
    Route::prefix('barberman')->group(function () {
        Route::get('/', [Appoiment_handler::class, 'HandlerGetBarberman'])
            ->name('Appoiment.get_barberman');
        Route::get('{barberman_id}/schedule', [Appoiment_handler::class, 'HandlerGetScheduleByBarberman'])
            ->name('Appoiment.get_schedule_by_barberman');
    });
});
