<?php

use Illuminate\Support\Facades\DB;

function RepositoryUserSubmitRegistration(string $name, string $email, string $no_hp, string $password): void
{
    DB::insert('INSERT INTO users (name, email, no_hp, password, created_at, updated_at, roles_id) VALUES (?, ?, ?, ?, ?, ?, ?)', [
        $name,
        $email,
        $no_hp,
        bcrypt($password), // Encrypt the password before storing
        now(), // Current timestamp for created_at
        now(),  // Current timestamp for updated_at
        2
    ]);
}
