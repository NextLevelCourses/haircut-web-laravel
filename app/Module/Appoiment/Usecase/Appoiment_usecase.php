<?php

require base_path('app/Module/Appoiment/Repository/Appoiment_repository.php'); //repository

function GetAboutUsCase(): array
{
    $about_us = RepositoryGetAboutUs();
    return !empty($about_us) ? $about_us : [];
}

function GetServicesCase(): array
{
    $services = RepositoryGetServices();
    return !empty($services) ? $services : [];
}

function GetGendersCase(): array
{
    $genders = RepositoryGetGenders();
    return !empty($genders) ? $genders : [];
}

function GetCodeReferenceCase(string $random_str): string
{
    return "APT{$random_str}";
}

function GetSchedulesByBarbermanCase(int $barberman_id): array
{
    $schedules = RepositoryGetSchedulesByBarberman($barberman_id);
    return !empty($schedules) ? $schedules : [];
}

function GetBarbermanByServiceCase(int $service_id): array
{
    $barberman_by_service = RepositoryGetBarbermanByService($service_id);
    return !empty($barberman_by_service) ? $barberman_by_service : [];
}
