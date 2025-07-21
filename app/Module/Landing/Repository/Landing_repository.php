<?php

use Illuminate\Support\Facades\DB;

function RepositoryContactSubmit(
    string $name,
    string $email,
    string $subject,
    string $message,
    int $userID = 0, // default is 0 because user send contact out of session
): void {
    DB::insert('INSERT INTO contact (name, email, subject, message, users_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)', [
        $name,
        $email,
        $subject,
        $message,
        $userID,
        now(), // Current timestamp for created_at
        now()  // Current timestamp for updated_at
    ]);
}
