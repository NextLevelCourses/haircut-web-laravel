<?php

const CONTACT_SUCCESS = 'Thank you for contacting us! We will get back to you soon.';
const CONTACT_ERROR = 'There was an error submitting your contact form. Please try again later.';
const REDIRECT_BACK_CONTACT = 'Landing.contact';
const REDIRECT_BACK_SERVICE = 'Landing.service';
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
