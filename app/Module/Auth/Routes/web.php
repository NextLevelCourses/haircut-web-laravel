<?php

use App\Module\Auth\Handler\Auth_handler;
use Illuminate\Support\Facades\Route;

Route::get('/do_login', [Auth_handler::class, 'do_login'])->name('auth.do_login');
Route::get('/do_register', [Auth_handler::class, 'do_register'])->name('auth.do_register');
