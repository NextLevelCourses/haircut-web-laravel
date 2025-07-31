<?php

namespace App\Module\Landing\Handler;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Module\Landing\Domain\Landing_domain;
use App\Module\Landing\Interface\Landing_interface;
use Illuminate\Support\Facades\DB;

//import
require base_path('app/Module/Landing/Constant/Landing_constant.php'); //constant
require base_path('app/Module/Landing/Usecase/Landing_usecase.php'); //constant


class Landing_handler extends Landing_domain implements Landing_interface
{
    public function __construct(private Request $request) {}

    public function HandlerValidateForm($request, array $rules, array $message): void
    {
        $request->validate($rules, $message);
    }

    public function HandlerSessionGuard(string $guard = ''): \Illuminate\Contracts\Auth\Guard
    {
        return Auth::guard($guard);
    }

    public function HandlerMapDataLanding(): array
    {
        return array(
            'about_us' => DB::select("SELECT * FROM about_us")[0], //first data
            'service' => DB::select("SELECT * FROM services"),
            'barberman' => DB::select("SELECT barbermans.*,
                services.name AS service_name,
                genders.name AS gender_name
            FROM barbermans
                INNER JOIN services ON barbermans.services_id = services.id
                INNER JOIN genders ON barbermans.genders_id = genders.id
            ORDER BY barbermans.id ASC
            ")
        );
    }
    /**
     * @method index
     * @return View|RedirectResponse
     * @description This method returns the landing page view.
     */
    public function Index(): View|RedirectResponse
    {
        if (!$this->HandlerSessionGuard('user')->check()) {
            $data = $this->HandlerMapDataLanding();
            return view('module.carousel', compact('data'));
        }
        return redirect()->route(REDIRECT_BACK_SERVICE)->with('error', 'anda sudah login silahkan lanjutkan ke booking');
    }

    /**
     * @method service
     * @return View
     * @description This method returns the service page view.
     */
    public function Service(): View
    {
        return view('module.service');
    }

    /**
     * @method gender
     * @return View
     * @description This method returns the gender page view.
     */
    public function Gender(): View
    {
        return view('module.gender');
    }

    /**
     * @method barberman
     * @return View
     * @description This method returns the barberman page view.
     */
    public function Barberman(): View
    {
        return view('module.barberman');
    }

    /**
     * @method schedule
     * @return View
     * @description This method returns the schedule page view.
     */
    public function Schedule(): View
    {
        return view('module.schedule');
    }

    /**
     * @method transaction
     * @return View
     * @description This method returns the transaction page view.
     */
    public function Transaction(): View
    {
        return view('module.transaction');
    }

    /**
     * @method success_transaction
     * @return View
     * @description This method returns the success_transaction page view.
     */
    public function SuccessTransaction(): View
    {
        return view('module.success_transaction');
    }

    /**
     * @method failed_transaction
     * @return View
     * @description This method returns the failed_transaction page view.
     */
    public function FailedTransaction(): View
    {
        return view('module.failed_transaction');
    }

    /**
     * @method invoice
     * @return View
     * @description This method returns the invoice page view.
     */

    public function Invoice(): View
    {
        return view('module.invoice');
    }

    /**
     * @method contact
     * @return View
     * @description This method returns the contact page view.
     */

    public function Contact(): View
    {
        return view('module.contact');
    }

    /**
     * @method ContactSubmit
     * @description This method submit contact form data.
     */
    public function ContactSubmit()
    {
        $this->HandlerValidateForm($this->request, CONTACT_RULES, CONTACT_MESSAGES);

        try {
            MainContactSubmitCase(
                $this->request->name,
                $this->request->email,
                $this->request->subject,
                $this->request->message,
                $this->HandlerSessionGuard('user')->user()->id ?? 0 // default is 0 because user send contact out of session;
            );

            return redirect()->route(REDIRECT_BACK_CONTACT)->with('success', CONTACT_SUCCESS);
        } catch (\Throwable $t) {
            return $t->getMessage();
        }
    }

    public function ForgotPasswordView(): View
    {
        return view('module.forgot_password');
    }

    public function ForgotPasswordSubmit()
    {
        $this->HandlerValidateForm($this->request, FORGOT_PASSWORD_RULES, FORGOT_PASSWORD_MESSAGE);
        try {
            MainForgotPasswordSubmitCase($this->request->email, $this->request->ip(), $this->request->header('User-Agent'));
            return redirect()->route(REDIRECT_BACK_FORGOT_PASSWORD)->with('success', FORGOT_PASSWORD_SUCCESS);
        } catch (\Throwable $t) {
            return $t->getMessage();
        }
        //handler forgot password submit by email
    }

    public function ResetPasswordToken(string $token): View|RedirectResponse
    {
        return MainResetPasswordTokenCase($token) ?
            view('module.reset_password', compact('token'))
            : redirect()->route(REDIRECT_HOME)->with('error', FORGOT_PASSWORD_EXPIRED);
    }

    public function ResetPasswordSubmit(string $token)
    {
        $this->HandlerValidateForm($this->request, RESET_PASSWORD_RULES, RESET_PASSWORD_MESSAGE);
        try {
            $url = config('app.url') . '/login';
            MainResetPasswordSubmitCase($token, $this->request->password, $url, $this->request->ip(), $this->request->header('User-Agent'));
            return redirect()->route(REDIRECT_BACK_LOGIN)->with('success', RESET_PASSWORD_SUCCESS);
        } catch (\Throwable $t) {
            return $t->getMessage();
        }
    }
}
