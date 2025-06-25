<?php

/**
 * @method generate_session
 * @param string $message
 * @return string
 */
function generate_session(string $message): string
{
    return $message . ' And Login successful';
}

/**
 * @method submit
 * @param string $message 
 * @return string
 */
function submit(string $message): string
{
    return $message . ' And Register successful';
}
