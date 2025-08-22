<?php

namespace App\Module\Appoiment\Domain;

use Throwable;

abstract class Appoiment_domain
{
    abstract public function HandlerValidateForm($request, array $rules, array $message): void;
    abstract public function HandlerMapDataLanding(): array;
    abstract public function HandlerGetScheduleByBarberman(int $barberman_id): array|Throwable;
    abstract public function HandlerGetBarbermanByService(int $service_id): array|Throwable;
    abstract public function HandlerGetService(): array|Throwable;
}
