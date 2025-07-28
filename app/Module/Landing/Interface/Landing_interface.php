<?php

namespace App\Module\Landing\Interface;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

interface Landing_interface
{
    public function Index(): View|RedirectResponse;
    public function Service(): View;
    public function Gender(): View;
    public function Invoice(): View;
    public function Barberman(): View;
    public function Schedule(): View;
    public function Transaction(): View;
    public function SuccessTransaction(): View;
    public function FailedTransaction(): View;
    public function Contact(): View;
    public function ContactSubmit();
    public function ForgotPasswordView(): View;
    public function ForgotPasswordSubmit();
    public function ResetPasswordToken(string $token): View|RedirectResponse;
    public function ResetPasswordSubmit(string $token);
}
