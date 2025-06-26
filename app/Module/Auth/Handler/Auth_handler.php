<?php

//indentifier location of handler
namespace App\Module\Auth\Handler;

//import
require base_path('app/Module/Auth/Usecase/Auth_usecase.php'); //usecase
require base_path('app/Module/Auth/Constant/Auth_constant.php'); //constant

//implement type interface
use App\Module\Auth\Interface\Auth_interface;

class Auth_handler implements Auth_interface
{
    /**
     * @method Login
     * @description this method is focus handle login prosess
     */
    public function UserLogin()
    {
        return DoUserLogin(); // <- inject process login
    }

    /**
     * @method AdminLogin
     * @description this method is focus handle admin login prosess
     */
    public function AdminLogin()
    {
        return DoAdminLogin(); // <- inject process login
    }

    /**
     * @method Register
     * @description this method is focus handle register prosess
     */
    public function UserRegister()
    {
        return DoUserRegister(); // <- inject prosess register
    }
}
