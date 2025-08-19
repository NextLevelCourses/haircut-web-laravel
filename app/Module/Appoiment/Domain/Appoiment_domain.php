<?php

namespace App\Module\Appoiment\Domain;

use Throwable;

abstract class Appoiment_domain
{
    abstract public function HandlerMapDataLanding(): array;
    abstract public function HandlerGetScheduleByBarberman(int $barberman_id): array|Throwable;
    abstract public function HandlerGetBarberman(): array|Throwable;
}
