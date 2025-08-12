<?php

use App\Module\Appoiment\Handler\Appoiment_handler;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:user', 'role.user'])->group(function () {
    Route::get('/book', [Appoiment_handler::class, 'View'])->name('Appoiment.book');
});
