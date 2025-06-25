<?php

namespace App\Module\Landing\Handler;

use App\Module\Landing\Interface\Landing_interface;
use Illuminate\Contracts\View\View;

class Landing_handler implements Landing_interface
{
    /**
     * @method index
     * @return View
     * @description This method returns the landing page view.
     */
    public function index(): View
    {
        return view('module.carousel');
    }

    /**
     * @method service
     * @return View
     * @description This method returns the service page view.
     */
    public function service(): View
    {
        return view('module.service');
    }

    /**
     * @method gender
     * @return View
     * @description This method returns the gender page view.
     */
    public function gender(): View
    {
        return view('module.gender');
    }

    /**
     * @method barberman
     * @return View
     * @description This method returns the barberman page view.
     */
    public function barberman(): View
    {
        return view('module.barberman');
    }

    /**
     * @method schedule
     * @return View
     * @description This method returns the schedule page view.
     */
    public function schedule(): View
    {
        return view('module.schedule');
    }

    /**
     * @method transaction
     * @return View
     * @description This method returns the transaction page view.
     */
    public function transaction(): View
    {
        return view('module.transaction');
    }

    /**
     * @method success_transaction
     * @return View
     * @description This method returns the success_transaction page view.
     */
    public function success_transaction(): View
    {
        return view('module.success_transaction');
    }

    /**
     * @method failed_transaction
     * @return View
     * @description This method returns the failed_transaction page view.
     */
    public function failed_transaction(): View
    {
        return view('module.failed_transaction');
    }

    /**
     * @method login
     * @return View
     * @description This method returns the login page view.
     */
    public function login(): View
    {
        return view('module.login');
    }

    /**
     * @method register
     * @return View
     * @description This method returns the register page view.
     */
    public function register(): View
    {
        return view('module.register');
    }
}
