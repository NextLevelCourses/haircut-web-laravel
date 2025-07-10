<?php

//indentifier location of handler
namespace App\Module\Auth\Handler;

//import
require base_path('app/Module/Auth/Usecase/Auth_usecase.php'); //usecase
require base_path('app/Module/Auth/Constant/Auth_constant.php'); //constant

//implement type domain
use App\Module\Auth\Domain\Auth_domain;
use App\Module\Auth\Interface\Auth_interface;

class Auth_handler extends Auth_domain implements Auth_interface
{
    /**
     * @method Login
     * @description this method is focus handle login prosess
     */
    public function UserLogin()
    {
        return MainUserLogin(); // <- inject process login user
    }

    /**
     * @method AdminLogin
     * @description this method is focus handle admin login prosess
     */
    public function AdminLogin()
    {
        return MainAdminLogin(); // <- inject process login admin
    }

    /**
     * @method Register
     * @description this method is focus handle register prosess
     */
    public function UserRegister()
    {
        return MainUserRegister(); // <- inject prosess register user
    }
}
