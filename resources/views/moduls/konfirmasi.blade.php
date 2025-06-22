@extends('landingpage.master')

@section('title', 'Konfirmasi Booking')

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
<!-- Konfirmasi Booking Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Konfirmasi</p>
            <h1 class="text-uppercase">Konfirmasi Booking Anda</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-secondary text-white rounded-3 p-4 mb-4">
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Nama:</div>
                        <div class="col-6">John Doe</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Email:</div>
                        <div class="col-6">john@example.com</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">No HP:</div>
                        <div class="col-6">0812xxxxxxx</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Tanggal:</div>
                        <div class="col-6">24 Juni 2025</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Jam:</div>
                        <div class="col-6">14:00 WIB</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Gender:</div>
                        <div class="col-6">Laki-Laki</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Service:</div>
                        <div class="col-6">Haircut + Coloring</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Tipe:</div>
                        <div class="col-6">Paket Lengkap</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Barberman:</div>
                        <div class="col-6">Rama</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 fw-bold">Harga:</div>
                        <div class="col-6">Rp150.000</div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary px-5 py-2 text-uppercase">Konfirmasi Booking</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Konfirmasi Booking End -->
@endsection
