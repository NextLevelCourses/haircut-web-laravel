<?php

//indentifier location of handler
namespace App\Module\Auth\Handler;

//import
require base_path('app/Module/Auth/Usecase/Auth_usecase.php'); //usecase
require base_path('app/Module/Auth/Constant/Auth_constant.php'); //constant

//implement type domain
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Module\Auth\Domain\Auth_domain;
use App\Module\Auth\Interface\Auth_interface;

class Auth_handler extends Auth_domain implements Auth_interface
{
    public function __construct(
        private Request $request,
    ) {}

    public function HandlerValidateSessionLogin(string $guard): bool
    {
        return !Auth::guard($guard)->check() ? false : true;
    }

    public function HandlerValidateForm($request, array $rules, array $message): void
    {
        $request->validate($rules, $message);
    }

    public function viewUserLogin(): View|RedirectResponse
    {
        return !$this->HandlerValidateSessionLogin('user') ? view('module.auth.user_login') : redirect()->route(REDIRECT_LANDING)->with('error', HAVE_BEEN_LOGIN_MESSAGE);
    }

    public function UserLogin()
    {
        $this->HandlerValidateForm(
            $this->request,
            USER_LOGIN_RULES,
            USER_LOGIN_MESSAGE
        );
        try {
            return MainUserLoginCase(
                $this->request,
                REDIRECT_ROUTE_LOGIN,
                REDIRECT_LOGIN_SUCCESS,
                ERROR_LOGIN_MESSAGE,
                SUCCESS_LOGIN_MESSAGE,
            );
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function viewAdminLogin(): View
    {
        return view('module.adminLogin');
    }

    public function UserLogout(): RedirectResponse
    {
        try {
            return MainUserLogoutCase($this->request, REDIRECT_LANDING, REDIRECT_ROUTE_LOGIN, ERROR_LOGOUT_MESSAGE, SUCCESS_LOGOUT_MESSAGE);
        } catch (\Exception $e) {
            return redirect()->route(REDIRECT_LANDING)->with('error', $e->getMessage());
        }
    }
    /**
     * @method AdminLogin
     * @description this method is focus handle admin login prosess
     */
    public function AdminLogin()
    {
        return MainAdminLoginCase(); // <- inject process login admin
    }

    public function viewUserRegister(): View
    {
        return view('module.auth.user_register');
    }
    /**
     * @method Register
     * @description this method is focus handle register prosess
     */
    public function UserRegister()
    {
        $this->HandlerValidateForm(
            $this->request,
            USER_REGISTRATION_RULES,
            USER_REGISTRATION_MESSAGE
        );
        try {
            MainUserRegisterCase(
                $this->request->name,
                $this->request->email,
                $this->request->no_hp,
                $this->request->password
            ); // <- inject prosess register user
            return redirect()->route(REDIRECT_ROUTE_LOGIN)->with('success', SUCCESS_REGISTER_MESSAGE);
        } catch (\Throwable $t) {
            return $t;
        }
    }
}
