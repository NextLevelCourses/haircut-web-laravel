<?php
require base_path('app/Module/Landing/Repository/Landing_repository.php'); //repository

function MainContactSubmitCase(
    string $name,
    string $email,
    string $subject,
    string $message,
    int $userID,
): void {
    RepositoryContactSubmit($name, $email, $subject, $message, $userID);
}
