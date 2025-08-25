<?php

use Illuminate\Support\Facades\DB;


function RepositoryGetAboutUs(): array
{
    return DB::select("SELECT * FROM about_us");
}

function RepositoryGetServices(int $id = 0): array
{
    return $id != 0 ? DB::select("SELECT * FROM services WHERE id = ?", [$id]) : DB::select("SELECT * FROM services");
}

function RepositoryGetGenders(int $id = 0): array
{
    return $id != 0 ? DB::select("SELECT * FROM genders WHERE id = ?", [$id]) : DB::select("SELECT * FROM genders");
}

function RepositoryGetBarberman(int $id): array
{
    return DB::select("SELECT * FROM barbermans WHERE id = ?", [$id]);
}

function RepositoryGetSchedule(int $id): array
{
    return DB::select("SELECT * FROM schedules WHERE id = ?", [$id]);
}

function RepositoryGetSchedulesByBarberman(int $barberman_id): array
{
    return DB::select("SELECT * FROM schedules WHERE barbermans_id = ?", [$barberman_id]);
}

function RepositoryGetBarbermanByService(int $service_id): array
{
    return DB::select("SELECT * FROM barbermans WHERE services_id = ?", [$service_id]);
}
