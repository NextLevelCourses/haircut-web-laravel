@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('status_code', '429')
@section('message', __('Too Many Requests'))
