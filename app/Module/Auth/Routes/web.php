<?php

use App\Module\Auth\Handler\Auth_handler;
use Illuminate\Support\Facades\Route;

Route::get('/do_login', [Auth_handler::class, 'UserLogin'])->name('auth.do_login');
Route::post('/do_register', [Auth_handler::class, 'UserRegister'])->name('auth.do_register');
