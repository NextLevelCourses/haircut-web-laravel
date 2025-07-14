<?php

use Illuminate\Support\Facades\Auth;

//import repository
require base_path('app/Module/Auth/Repository/Auth_repository.php'); //constant
require base_path('app/Src/Log/Logging.php'); //log



/**
 * ======================== user login process ========================
 */


/**
 * @method DoLogin
 */
function MainUserLoginCase()
{
    try {
    } catch (\Exception $e) {
        // Handle exception
        return 'Error: ' . $e->getMessage();
    }
}

/**
 * @method MainUserLogoutCase
 */

function MainUserLogoutCase($request)
{
    HandlerValidateUserSessionLogout($request);
    Auth::guard('user')->logout();
    MainLog('success', 'Anda berhasil logout', $request->route()->getName(), Auth::guard('user')->id());
}


/**
 * ======================== admin login process ========================
 */


/**
 * @method DoLogin
 */
function MainAdminLoginCase()
{
    try {
    } catch (\Exception $e) {
        // Handle exception
        return 'Error: ' . $e->getMessage();
    }
}



/**
 * ======================== user regsiter process ========================
 */


/**
 * @method DoRegister
 * @param $name
 * @param $email
 * @param $no_hp
 * @param $password
 */
function MainUserRegisterCase(string $name, string $email, string $no_hp, string $password): void
{
    RepositoryUserSubmitRegistration($name, $email, $no_hp, $password); //submit registration data to handle by repository
}
