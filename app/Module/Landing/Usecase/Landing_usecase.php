<?php

use App\Mail\Forgot_password_mail;
use App\Mail\Success_reset_password_mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

require base_path('app/Module/Landing/Repository/Landing_repository.php'); //repository

function MainContactSubmitCase(
    string $name,
    string $email,
    string $subject,
    string $message,
    int $userID,
): void {
    RepositoryContactSubmit($name, $email, $subject, $message, $userID);
}

function MainForgotPasswordSubmitCase(
    string $email,
    string $ip,
    string $device
): void {
    $token = Str::random(20);
    $link = config('app.url');
    $url = "{$link}/reset/{$token}/password";
    $expired_at = Carbon::now()->timezone(config('app.timezone'))->addDays()->format('Y-m-d H:i:s');
    RepositoryResetPasswordSubmit($email, $token, $ip, $device, $expired_at, now());
    Mail::to($email)->send(new Forgot_password_mail($email, $url, $ip, $device, now()));
}


function MainResetPasswordTokenCase(string $token): bool
{
    $token = RepositoryValidateToken($token);
    //token harus ada dan gak kena revoke then true
    if (!empty($token) && $token[0]->revoke != 1) {
        return true;
    }

    return false;
}

function MainResetPasswordSubmitCase(string $token, string $password, string $url, string $ip, string $device): void
{
    $token = RepositoryValidateToken($token)[0];
    RepositoryResetPasswordByEmail($token->email, $password);
    RepositoryRevokeTokenAfterResetPassword($token->token);
    //send mail success information reset password
    Mail::to($token->email)->send(new Success_reset_password_mail($token->email, $url, $ip, $device, now(), $password));
}
