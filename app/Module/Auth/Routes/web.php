<?php

use App\Module\Auth\Handler\Auth_handler;
use Illuminate\Support\Facades\Route;

Route::prefix('login')->group(function () {
    Route::get('/', [Auth_handler::class, 'ViewUserLOgin'])->name('user.login');
    Route::post('/', [Auth_handler::class, 'UserLogin'])->name('user.do_login');
});
Route::post('/user/logout', [Auth_handler::class, 'UserLogout'])->name('user.do_logout')->middleware('auth:user');

// Route::prefix('4dmincut')->group(function () {
//     Route::get('/', [Auth_handler::class, 'ViewAdminLogin'])->name('admin.login');
//     Route::admin('/', [Auth_handler::class, 'AdminLogin'])->name('admin.do_login');
// });

Route::prefix('register')->group(function () {
    Route::get('/', [Auth_handler::class, 'ViewUserRegister'])->name('user.register');
    Route::post('/', [Auth_handler::class, 'UserRegister'])->name('user.do_register');
});
