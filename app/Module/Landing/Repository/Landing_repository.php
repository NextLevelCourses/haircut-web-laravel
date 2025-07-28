<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

function RepositoryContactSubmit(
    string $name,
    string $email,
    string $subject,
    string $message,
    int $userID
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

function RepositoryResetPasswordSubmit(string $email, string $token, string $ip, string $device, string $expired_at, string $created_at): void
{
    DB::insert('INSERT INTO password_reset_tokens (email, token, ip, device, expired_at, created_at) VALUES (?, ?, ?, ?, ?, ?)', [
        $email,
        $token,
        $ip,
        $device,
        $expired_at,
        $created_at
    ]);
}

function RepositoryValidateToken(string $token): array
{
    return DB::select('SELECT * FROM password_reset_tokens where token = ?', [$token]);
}

function RepositoryResetPasswordByEmail(string $email, string $password): void
{
    DB::update('UPDATE users SET password = ?, updated_at = ? WHERE email = ?', [Hash::make($password), now(), $email]);
}

function RepositoryRevokeTokenAfterResetPassword(string $token, int $revoke = 1): void
{
    DB::update('UPDATE password_reset_tokens SET `revoke` = ?, updated_at = ? WHERE token = ?', [$revoke, now(), $token]);
}
