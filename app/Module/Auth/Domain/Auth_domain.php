<?php

namespace App\Module\Auth\Domain;

abstract class Auth_domain
{

    abstract public function ValidateRegistration($request, array $rules, array $message): void;
}
