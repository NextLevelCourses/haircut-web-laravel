<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //route welcome
    return view('moduls.carousel');
});
