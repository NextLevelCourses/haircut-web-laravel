<?php

namespace App\Module\Appoiment\Handler;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Module\Appoiment\Domain\Appoiment_domain;
use App\Module\Appoiment\Interface\Appoiment_interface;
use Illuminate\Support\Str;
use Throwable;

require base_path('app/Module/Appoiment/Usecase/Appoiment_usecase.php'); //usecase


class Appoiment_handler extends Appoiment_domain implements Appoiment_interface
{
    public function HandlerMapDataLanding(): array
    {
        return array(
            'about_us' => GetAboutUsCase(),
            'code_reference' => GetCodeReferenceCase(Str::random(5)),
            "service" => GetServicesCase(),
            "gender" => GetGendersCase(),
        );
    }

    public function HandlerGetBarberman(): array|Throwable
    {
        try {
            return GetbarbermansCase();
        } catch (\Throwable $t) {
            return $t;
        }
    }

    public function HandlerGetScheduleByBarberman(int $barberman_id): array|Throwable
    {
        try {
            return GetSchedulesByBarbermanCase($barberman_id);
        } catch (\Throwable $t) {
            return $t;
        }
    }

    public function View(): View|Throwable
    {
        try {
            $data = $this->HandlerMapDataLanding();
            return view('module.appoiment.book', compact('data'));
        } catch (\Throwable $e) {
            return $e;
        }
    }
}
