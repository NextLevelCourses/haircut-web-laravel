<?php

namespace App\Module\Appoiment\Handler;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Module\Appoiment\Domain\Appoiment_domain;
use App\Module\Appoiment\Interface\Appoiment_interface;
use Illuminate\Support\Str;

class Appoiment_handler extends Appoiment_domain implements Appoiment_interface
{
    public function HandlerMapDataLanding(): array
    {
        $str_random = Str::random(5);
        return array(
            'about_us' => DB::select("SELECT * FROM about_us"),
            'code_reference' => "APT{$str_random}"
        );
    }

    public function View(): View
    {
        $data = $this->HandlerMapDataLanding();
        return view('module.appoiment.book', compact('data'));
    }
}
