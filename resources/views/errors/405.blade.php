@extends('errors::minimal')

@section('title', __('Method not allowed'))
@section('status_code', '405')
@section('message', __('method not valid'))
