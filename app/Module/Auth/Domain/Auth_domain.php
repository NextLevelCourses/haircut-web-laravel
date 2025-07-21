<?php

namespace App\Module\Auth\Domain;

use Illuminate\Http\RedirectResponse;

abstract class Auth_domain
{
    abstract public function HandlerValidateForm($request, array $rules, array $message): void;
    abstract public function HandlerValidateSessionLogin(string $guard): bool;
}
