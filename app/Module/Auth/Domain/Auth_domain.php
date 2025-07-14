<?php

namespace App\Module\Auth\Domain;

abstract class Auth_domain
{
    abstract public function HandlerValidateUserLogin($request, array $rules, array $message): void;
    abstract public function HandlerValidateRegistration($request, array $rules, array $message): void;
}
