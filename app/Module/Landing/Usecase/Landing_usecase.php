<?php
require base_path('app/Module/Landing/Repository/Landing_repository.php'); //repository
require base_path('app/Src/Log/Logging.php'); //log

function MainContactSubmitCase(
    string $name,
    string $email,
    string $subject,
    string $message,
    int $userID,
): void {
    RepositoryContactSubmit($name, $email, $subject, $message, $userID);
}
