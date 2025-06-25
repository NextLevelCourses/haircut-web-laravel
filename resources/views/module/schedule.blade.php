@extends('landingpage.master')

@section('title', 'Jadwal Tersedia')

@section('content')
<!-- Header Info Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-primary">My Booking</h5>
                <h3 class="fw-bold">Halo, {{ Auth::user()->name ?? 'Username' }}</h3>
            </div>
            <div class="text-end">
                <p class="mb-0 text-muted">
                    {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                </p>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- Header Info End -->

<!-- Jadwal Tersedia Start -->
<div class="container-xxl pb-5">
    <div class="container text-center">
        <h2 class="mb-5 fw-bold">Jadwal Tersedia</h2>

        <!-- Box Kalender -->
        <div class="mx-auto mb-4 bg-danger text-white d-flex justify-content-center align-items-center"
             style="border-radius: 30px; height: 300px; max-width: 100%; width: 90%;">
            <span class="fs-4 fw-bold">KALENDER</span>
        </div>

        <!-- Box Waktu Tersedia -->
        <div class="mx-auto bg-danger text-white d-flex justify-content-center align-items-center"
             style="border-radius: 30px; height: 150px; max-width: 600px; width: 100%;">
            <span class="fs-5 fw-bold">WAKTU TERSEDIA</span>
        </div>
    </div>
</div>
<!-- Jadwal Tersedia End -->
@endsection
