<?php

namespace App\Module\Auth\Interface;

interface Auth_interface
{
    public function UserLogin();
    public function AdminLogin();
    public function UserRegister();
}
