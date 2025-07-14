<?php

use Illuminate\Support\Facades\DB;

function HandlerLogSuccess(string $message, int $user_id): void
{
    DB::insert('INSERT INTO log_success (message, users_id) VALUES (?, ?)', [
        $message,
        $user_id
    ]);
}

function HandlerLogError(string $message, string $route, int $user_id): void
{
    DB::insert('INSERT INTO log_errors (message, route, users_id) VALUES (?, ?, ?)', [
        $message,
        $route,
        $user_id
    ]);
}

function MainLog(string $type = 'error', string $message, string $route, int $user_id): void
{
    switch ($type) {
        case 'success':
            HandlerLogSuccess($message, $user_id);
            break;
        case 'error':
            HandlerLogError($message, $route, $user_id);
            break;
    }
}
