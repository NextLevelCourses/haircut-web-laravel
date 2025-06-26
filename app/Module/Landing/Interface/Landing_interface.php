<?php

namespace App\Module\Landing\Interface;

use Illuminate\Contracts\View\View;

interface Landing_interface
{
    public function Index(): View;
    public function Service(): View;
    public function Gender(): View;
    public function Barberman(): View;
    public function Schedule(): View;
    public function Transaction(): View;
    public function SuccessTransaction(): View;
    public function FailedTransaction(): View;
    public function ViewLogin(): View;
    public function ViewRegister(): View;
}
