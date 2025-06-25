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
     * @method do_login
     * @return string
     * @description this method is focus handle login prosess
     */
    public function do_login(): string
    {
        return generate_session(AUTH_LOGIN_PROCESS); // <- inject process login
    }

    /**
     * @method do_register
     * @return string
     * @description this method is focus handle register prosess
     */
    public function do_register(): string
    {
        return submit(REGISTER_PROCESS); // <- inject prosess register
    }
}
