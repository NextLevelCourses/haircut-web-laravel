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

    public function HandlerMapDataAppoiment(Request $request): array
    {
        return array(
            'about_us'        => GetAboutUsCase(),
            'code_reference'  => GetCodeReferenceCase(Str::random(5)),
            "gender"          => GetGendersCase(),
            /**
             * appoiment data: service,gender,barberman,schedule,reference code,description
             */
            //service
            "appoiment_service_id"      => $request->services_id ?? null,
            "appoiment_service_name"    => GetServicesCase($request->services_id ?? 0)[0]->name ?? null,
            //gender
            "appoiment_gender_id"       => $request->genders_id ?? null,
            "appoiment_gender_name"     => GetGendersCase($request->genders_id ?? 0)[0]->name ?? null,
            //barberman
            "appoiment_barberman_id"    => $request->barbermans_id ?? null,
            "appoiment_barberman"       => GetBarbermanCase($request->barbermans_id ?? 0)[0] ?? null,
            //schedule
            "appoiment_schedule_id"     => $request->schedules_id ?? null,
            "appoiment_schedule"        => GetScheduleCase($request->schedules_id ?? 0)[0] ?? null,
            //code reference
            "appoiment_code_reference"  => $request->code_reference ?? null,
            //description
            "appoiment_description"     => $request->description ?? null
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
            $data = $this->HandlerMapDataAppoiment($this->request);
            return view('module.appoiment.book', compact('data'));
        } catch (\Throwable $e) {
            return $e;
        }
    }

    /**
     * Order an appointment.
     * this method validate form of book appointment by users field
     */
    public function ConfirmationOrder(): View|Throwable
    {
        $this->HandlerValidateForm(
            $this->request,
            ORDER_RULES,
            ORDER_MESSAGE
        );
        try {
            $data = $this->HandlerMapDataAppoiment($this->request);
            return view('module.appoiment.confirmation', compact('data'));
        } catch (\Throwable $t) {
            return $t;
        }
    }
}
