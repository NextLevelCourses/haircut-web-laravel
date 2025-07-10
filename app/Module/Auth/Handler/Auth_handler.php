<?php

//indentifier location of handler
namespace App\Module\Auth\Handler;

//import
require base_path('app/Module/Auth/Usecase/Auth_usecase.php'); //usecase
require base_path('app/Module/Auth/Constant/Auth_constant.php'); //constant

//implement type domain
use App\Module\Auth\Domain\Auth_domain;
use App\Module\Auth\Interface\Auth_interface;
use Illuminate\Http\Request;

class Auth_handler extends Auth_domain implements Auth_interface
{
    public function __construct(
        private Request $request,
    ) {}
    /**
     * @method Login
     * @description this method is focus handle login prosess
     */
    public function UserLogin()
    {
        return MainUserLoginCase(); // <- inject process login user
    }

    /**
     * @method AdminLogin
     * @description this method is focus handle admin login prosess
     */
    public function AdminLogin()
    {
        return MainAdminLoginCase(); // <- inject process login admin
    }

    public function HandlerValidateRegistration($request, array $rules, array $message): void
    {
        $request->validate($rules, $message);
    }
    /**
     * @method Register
     * @description this method is focus handle register prosess
     */
    public function UserRegister()
    {
        $this->HandlerValidateRegistration(
            $this->request,
            USER_REGISTRATION_RULES,
            USER_REGISTRATION_MESSAGE
        );
        try {
            return MainUserRegisterCase(); // <- inject prosess register user
        } catch (\Throwable $t) {
            return $t;
        }
    }
}
