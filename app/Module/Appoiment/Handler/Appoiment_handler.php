<?php

namespace App\Module\Appoiment\Handler;

use Throwable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Module\Appoiment\Domain\Appoiment_domain;
use App\Module\Appoiment\Interface\Appoiment_interface;

require base_path('app/Module/Appoiment/Usecase/Appoiment_usecase.php'); //usecase
require base_path('app/Module/Appoiment/Constant/Appoiment_constant.php'); //constant


class Appoiment_handler extends Appoiment_domain implements Appoiment_interface
{
    public function __construct(
        private Request $request
    ) {}

    public function HandlerValidateForm($request, array $rules, array $message): void
    {
        $request->validate($rules, $message);
    }

    public function HandlerMapDataLanding(): array
    {
        return array(
            'about_us' => GetAboutUsCase(),
            'code_reference' => GetCodeReferenceCase(Str::random(5)),
            "gender" => GetGendersCase(),
        );
    }

    public function HandlerGetService(): array|Throwable
    {
        try {
            return GetServicesCase();
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

    public function HandlerGetBarbermanByService(int $service_id): array|Throwable
    {
        try {
            return GetBarbermanByServiceCase($service_id);
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

    /**
     * Order an appointment.
     * this method validate form of book appointment by users field
     */
    public function Order()
    {
        $this->HandlerValidateForm(
            $this->request,
            ORDER_RULES,
            ORDER_MESSAGE
        );
        try {
            dd($this->request->all());
        } catch (\Throwable $t) {
            return $t;
        }
    }
}
