<?php

use Illuminate\Support\Facades\DB;


function RepositoryGetAboutUs(): array
{
    return DB::select("SELECT * FROM about_us");
}

function RepositoryGetServices(): array
{
    return DB::select("SELECT * FROM services");
}

function RepositoryGetGenders(): array
{
    return DB::select("SELECT * FROM genders");
}

function RepositoryGetBarbermans(): array
{
    return DB::select("SELECT * FROM barbermans");
}

function RepositoryGetSchedulesByBarberman(int $barberman_id): array
{
    return DB::select("SELECT * FROM schedules WHERE barbermans_id = ?", [$barberman_id]);
}
