<?php

require base_path('app/Module/Appoiment/Repository/Appoiment_repository.php'); //repository

function GetAboutUsCase(): array
{
    $about_us = RepositoryGetAboutUs();
    return !empty($about_us) ? $about_us : [];
}

function GetServicesCase(int $id = 0): array
{
    if ($id != 0) {
        $services = RepositoryGetServices($id); //get by id
    } else {
        $services = RepositoryGetServices(); //get all
    }
    return !empty($services) ? $services : [];
}

function GetGendersCase(int $id = 0): array
{
    if ($id != 0) {
        $genders = RepositoryGetGenders($id); //get by id
    } else {
        $genders = RepositoryGetGenders(); // get all
    }
    return !empty($genders) ? $genders : [];
}

function GetBarbermanCase(int $id): array
{
    return !empty(RepositoryGetBarberman($id)) ? RepositoryGetBarberman($id) : [];
}

function GetScheduleCase(int $id): array
{
    return !empty(RepositoryGetSchedule($id)) ? RepositoryGetSchedule($id) : [];
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
