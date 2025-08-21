<?php

const ORDER_RULES = [
    'services_id' => 'required|exists:services,id',
    'genders_id' => 'required|exists:genders,id',
    'barbermans_id' => 'required|exists:barbermans,id',
    'schedules_id' => 'required|exists:schedules,id',
    'description' => 'nullable|string|max:5000',
];
const ORDER_MESSAGE = [
    'services_id.required' => 'layanan wajib di pilih',
    'genders_id.required' => 'jenis kelamin wajib di pilih',
    'barbermans_id.required' => 'barberman wajib di pilih',
    'schedules_id.required' => 'jadwal wajib di pilih',
    'description.max' => 'Deskripsi tidak boleh lebih dari 5000 karakter',
    'description.string' => 'Deskripsi harus berupa teks',
    'exists' => ':attribute tidak ditemukan di database'
];
