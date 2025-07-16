<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

//import repository
require base_path('app/Module/Auth/Repository/Auth_repository.php'); //repository
require base_path('app/Src/Log/Logging.php'); //log


/**
 * ======================== user login process ========================
 */

function MainUserLoginCase(
    $request,
    string $RedirectLogin,
    string $RedirectLoginSuccess,
    string $ErrorLoginMessage,
    string $SuccessLoginMessage,
): RedirectResponse {
    if (!RepositoryValidateUserLoginBaseEmailOrNoTelp(RepositorySetRequestUserLoginBaseEmailOrNoTelp($request))) {
        return redirect()->route($RedirectLogin)->with('error', $ErrorLoginMessage);
    }

    $UserSession = RepositoryGenerateSessionLoginByUser(RepositorySetRequestUserLoginBaseEmailOrNoTelp($request));
    MainLog('success', $SuccessLoginMessage . "ID: {$UserSession->id}, Email: {$UserSession->email}", $request->route()->getName(), Auth::guard('user')->user()->id);
    return redirect()->intended($RedirectLoginSuccess)->with('success', $SuccessLoginMessage);
}

function MainUserLogoutCase(
    $request,
    string $RedirectLanding,
    string $RedirectLogin,
    string $ErrorLogoutMessage,
    string $SuccessLogoutMessage
): RedirectResponse {
    if (!RepositoryValidateUserLogout()) {
        MainLog('error', 'Anda tidak mempunyai session untuk logout', $request->route()->getName(), Auth::guard('user')->id());
        return redirect()->route($RedirectLanding)->with('error', $ErrorLogoutMessage);
    }

    MainLog('success', 'Anda berhasil logout', $request->route()->getName(), Auth::guard('user')->user()->id);
    return RepositoryUserSessionLogout($RedirectLogin, $SuccessLogoutMessage);
}


/**
 * ======================== admin login process ========================
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

function MainUserRegisterCase(
    string $name,
    string $email,
    string $no_hp,
    string $password
): void {
    RepositoryUserSubmitRegistration($name, $email, $no_hp, $password); //submit registration data to handle by repository
}
