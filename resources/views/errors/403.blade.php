@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('status_code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
