<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulsController extends Controller
{
    public function index()
    {
        return view('moduls.service');
    }

    public function gender()
    {
        return view('moduls.gender');
    }

    public function barberman()
    {
        return view('moduls.barberman');
    }

    public function jadwal()
    {
        return view('moduls.jadwal');
    }

    public function transaction()
    {
        return view('moduls.transaction');
    }

    public function transconfirm()
    {
        return view('moduls.transconfirm');
    }

    public function failtransconfirm()
    {
        return view('moduls.failtransconfirm');
    }

    public function login()
    {
        return view('moduls.login');
    }

    public function register()
    {
        return view('moduls.register');
    }
}
