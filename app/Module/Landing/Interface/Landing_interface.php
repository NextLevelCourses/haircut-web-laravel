<?php

namespace App\Module\Landing\Interface;

use Illuminate\Contracts\View\View;

interface Landing_interface
{
    public function index(): View;
    public function service(): View;
    public function gender(): View;
    public function barberman(): View;
    public function schedule(): View;
    public function transaction(): View;
    public function success_transaction(): View;
    public function failed_transaction(): View;
    public function login(): View;
    public function register(): View;
}
