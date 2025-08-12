<?php

namespace App\Module\Appoiment\Handler;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Module\Appoiment\Domain\Appoiment_domain;
use App\Module\Appoiment\Interface\Appoiment_interface;

class Appoiment_handler extends Appoiment_domain implements Appoiment_interface
{
    public function HandlerMapDataLanding(): array
    {
        return array(
            'about_us' => DB::select("SELECT * FROM about_us"),
        );
    }

    public function View(): View
    {
        $data = $this->HandlerMapDataLanding();
        return view('module.appoiment.book', compact('data'));
    }
}
