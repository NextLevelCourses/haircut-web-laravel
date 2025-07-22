<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

function RepositoryValidateUserLoginBaseEmailOrNoTelp(array $credential): bool
{
    return !Auth::guard('user')->attempt($credential) ? false : true;
}

function RepositorySetRequestUserLoginBaseEmailOrNoTelp($request): array
{
    return filter_var($request->ephone, FILTER_VALIDATE_EMAIL) ?
        ['email' => $request->ephone, 'password' => $request->password] :
        ['no_hp' => $request->ephone, 'password' => $request->password];
}

function RepositoryGenerateSessionLoginByUser(array $credential)
{
    $login = Auth::getProvider()->retrieveByCredentials($credential);
    Auth::guard('user')->login($login);
    return Auth::guard('user')->user();
}

function RepositoryUserSubmitRegistration(string $name, string $email, string $no_hp, string $password): void
{
    DB::insert('INSERT INTO users (name, email, no_hp, password, created_at, updated_at, roles_id) VALUES (?, ?, ?, ?, ?, ?, ?)', [
        $name,
        $email,
        $no_hp,
        bcrypt($password), // Encrypt the password before storing
        now(), // Current timestamp for created_at
        now(),  // Current timestamp for updated_at
        2
    ]);
}

function RepositoryValidateUserLogout(): bool
{
    return !Auth::guard('user')->check() ? false : true;
}

function RepositoryUserSessionLogout(
    string $RedirectLogin,
    string $SuccessLogoutMessage,
): RedirectResponse {
    Auth::guard('user')->logout();
    return redirect()->route($RedirectLogin)->with('success', $SuccessLogoutMessage);
}
