<?php

//import repository
require base_path('app/Module/Auth/Repository/Auth_repository.php'); //constant


/**
 * ======================== user login process ========================
 */


/**
 * @method DoLogin
 */
function MainUserLoginCase()
{
    try {
    } catch (\Exception $e) {
        // Handle exception
        return 'Error: ' . $e->getMessage();
    }
}


/**
 * ======================== admin login process ========================
 */


/**
 * @method DoLogin
 */
function MainAdminLoginCase()
{
    try {
    } catch (\Exception $e) {
        // Handle exception
        return 'Error: ' . $e->getMessage();
    }
}



/**
 * ======================== user regsiter process ========================
 */


/**
 * @method DoRegister
 * @param $name
 * @param $email
 * @param $no_hp
 * @param $password
 */
function MainUserRegisterCase(string $name, string $email, string $no_hp, string $password): void
{
    RepositoryUserSubmitRegistration($name, $email, $no_hp, $password); //submit registration data to handle by repository
}
