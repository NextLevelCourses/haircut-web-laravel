<?php

const SUCCESS_LOGIN_MESSAGE = 'Login successful';
const SUCCESS_REGISTER_MESSAGE = 'Registration successful,please login here';

const REDIRECT_ROUTE_LOGIN = 'Landing.login';

const USER_REGISTRATION_RULES = [
    'name' => 'required|string|min:4',
    'email' => 'required|email|unique:users,email',
    'no_hp' => 'required|numeric|min:12',
    'password' => 'required|string|min:8',
];

const USER_REGISTRATION_MESSAGE = [
    'required' => ':attribute wajib di isi.',
    'email' => ':attribute harus berupa email yang valid.',
    'unique' => ':attribute sudah terdaftar.',
    'min' => ':attribute harus memiliki minimal :min karakter.',
];
