<?php


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
 */
function MainUserRegisterCase()
{
    try {
        return 'Registration successful, please login here';
    } catch (\Exception $e) {
        // Handle exception
        return 'Error: ' . $e->getMessage();
    }
}
