<?php

//indentifier location of handler
namespace App\Module\Auth\Handler;

//import
require base_path('app/Module/Auth/Usecase/Auth_usecase.php'); //usecase
require base_path('app/Module/Auth/Constant/Auth_constant.php'); //constant
require base_path('app/Src/Log/Logging.php'); //log

//implement type domain
use App\Module\Auth\Domain\Auth_domain;
use App\Module\Auth\Interface\Auth_interface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Auth_handler extends Auth_domain implements Auth_interface
{
    public function __construct(
        private Request $request,
    ) {}

    public function viewUserLogin(): View
    {
        return view('module.login');
    }

    public function HandlerValidateUserLogin($request, array $rules, array $message): void
    {
        $request->validate($rules, $message);
    }
    /**
     * @method Login
     * @description this method is focus handle login prosess
     */
    public function UserLogin()
    {
        $this->HandlerValidateUserLogin(
            $this->request,
            USER_LOGIN_RULES,
            USER_LOGIN_MESSAGE
        );
        try {
            return MainUserLoginCase(); // <- inject process login user
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

            if (!Auth::guard('user')->check()) {
                MainLog('error', 'Anda tidak mempunyai session untuk logout', $this->request->route()->getName(), Auth::guard('user')->id());
                return redirect()->route(REDIRECT_LANDING)->with('error', ERROR_LOGOUT_MESSAGE);
            }

            Auth::guard('user')->logout();
            MainLog('success', 'Anda berhasil logout', $this->request->route()->getName(), Auth::guard('user')->id());
            return redirect()->route(REDIRECT_LANDING)->with('success', SUCCESS_LOGOUT_MESSAGE);
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
        return view('module.register');
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
