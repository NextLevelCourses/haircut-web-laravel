<?php

namespace App\Module\Auth\Domain;

use Illuminate\Http\RedirectResponse;

abstract class Auth_domain
{
    abstract public function HandlerValidateUserLogin($request, array $rules, array $message): void;
    abstract public function HandlerValidateRegistration($request, array $rules, array $message): void;
}
