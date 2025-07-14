<?php

namespace App\Module\Auth\Interface;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

interface Auth_interface
{
    public function viewUserLogin(): View;
    public function UserLogin();
    public function UserLogout(): RedirectResponse;
    public function viewAdminLogin(): View;
    public function AdminLogin();
    public function viewUserRegister(): View;
    public function UserRegister();
}
