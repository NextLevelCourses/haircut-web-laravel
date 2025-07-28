<?php

const CONTACT_SUCCESS = 'Thank you for contacting us! We will get back to you soon.';
const FORGOT_PASSWORD_SUCCESS = 'Reset password has send your email,please open inbox and follow the steps';
const RESET_PASSWORD_SUCCESS = 'Reset password success please login as new password';
const CONTACT_ERROR = 'There was an error submitting your contact form. Please try again later.';
const REDIRECT_BACK_CONTACT = 'Landing.contact';
const REDIRECT_BACK_FORGOT_PASSWORD = 'Landing.forgotPassword.view';
const REDIRECT_BACK_LOGIN = 'user.login';
const REDIRECT_BACK_SERVICE = 'Landing.service';
const FORGOT_PASSWORD_EXPIRED = 'Token reset password sudah kadaluarsa,harap request ulang';
const REDIRECT_HOME = 'Landing.index';
const CONTACT_RULES = [
    'name' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'subject' => 'required|string|max:255',
    'message' => 'required|string|max:5000'
];
const CONTACT_MESSAGES = [
    'required' => ':attribute wajib di isi.',
    'email.email' => 'Email must be a valid email address.',
    'message.max' => 'Message cannot exceed 5000 characters.'
];

const FORGOT_PASSWORD_RULES = [
    'email' => 'required|email|max:255|exists:users,email'
];

const FORGOT_PASSWORD_MESSAGE = [
    'email.exists' => 'email tidak terdaftar di sistem kami,harap lakukan registrasi'
];

const RESET_PASSWORD_RULES = [
    'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|confirmed',
    'password_confirmation' => 'required|min:6'
];

const RESET_PASSWORD_MESSAGE = [
    'required' => ':attribute wajib di isi',
    'password.regex' => 'Format password menggunakan huruf besar,kecil,angka dan special character',
    'password.confirmed' => 'Password tidak sama dengan password confirmation'
];
