<?php

const SUCCESS_LOGIN_MESSAGE = 'Login successful,please logout again if out session';
const ERROR_LOGIN_MESSAGE = 'Login failed, wrong email or phone number or password';
const HAVE_BEEN_LOGIN_MESSAGE = 'You have been logged in, please logout first if you want to login again';
const SUCCESS_REGISTER_MESSAGE = 'Registration successful,please login here';
const REDIRECT_ROUTE_LOGIN = 'user.login';
const REDIRECT_LANDING = 'Landing.index';
const REDIRECT_LOGIN_SUCCESS = '/';
const SUCCESS_LOGOUT_MESSAGE = 'Logout berhasil,silahkan login kembali';
const ERROR_LOGOUT_MESSAGE = 'Logout gagal, silahkan coba lagi';
const USER_LOGIN_RULES = [
    'ephone' => 'required|string',
    'password' => 'required|string|min:8',
];
const USER_LOGIN_MESSAGE = [
    'ephone.required' => 'email atau nomor handphone wajib di isi.',
    'password.required' => 'password wajib di isi.',
    'min' => ':attribute harus memiliki minimal :min karakter.',
];
const USER_REGISTRATION_RULES = [
    'name' => 'required|string|min:4',
    'email' => 'required|email|unique:users,email',
    'no_hp' => 'required|numeric|min:12|unique:users,no_hp',
    'password' => 'required|string|min:8',
];
const USER_REGISTRATION_MESSAGE = [
    'required' => ':attribute wajib di isi.',
    'email' => ':attribute harus berupa email yang valid.',
    'unique' => ':attribute sudah terdaftar.',
    'min' => ':attribute harus memiliki minimal :min karakter.',
];
