<?php

namespace App\Module\Appoiment\Interface;

use Illuminate\Contracts\View\View;
use Throwable;

interface Appoiment_interface
{
    public function View(): View|Throwable;
    public function Order();
}
