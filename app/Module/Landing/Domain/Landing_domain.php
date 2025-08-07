<?php

namespace App\Module\Landing\Domain;

abstract class Landing_domain
{
    abstract public function HandlerValidateForm($request, array $rules, array $message): void;
    abstract public function HandlerSessionGuard(string $guard = ''): \Illuminate\Contracts\Auth\Guard;
    abstract public function HandlerMapDataLanding(): array;
}
