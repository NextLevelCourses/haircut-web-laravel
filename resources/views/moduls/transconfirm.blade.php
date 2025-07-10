@extends('landingpage.master')

@section('title', 'Booking Berhasil')

@section('content')
<!-- Header Info Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-primary">Booking Sukses</h5>
                <h3 class="fw-bold">Terima kasih, {{ Auth::user()->name ?? 'Customer' }}!</h3>
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

<!-- Booking Confirmation Message Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <i class="bi bi-check-circle-fill display-4 text-success mb-3"></i>
            <h2 class="text-uppercase text-success">Booking Anda Telah Dikonfirmasi!</h2>
            <p class="text-muted mt-3">Kami sudah menerima jadwal Anda dan siap menyambut kedatangan Anda sesuai jadwal.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-secondary text-white rounded-3 p-4 mb-4">
                    <div class="row mb-3"><div class="col-6 fw-bold">Tanggal:</div><div class="col-6">24 Juni 2025</div></div>
                    <div class="row mb-3"><div class="col-6 fw-bold">Jam:</div><div class="col-6">14:00 WIB</div></div>
                    <div class="row mb-3"><div class="col-6 fw-bold">Service:</div><div class="col-6">Haircut + Coloring</div></div>
                    <div class="row mb-3"><div class="col-6 fw-bold">Barberman:</div><div class="col-6">Rama</div></div>
                    <div class="row mb-3"><div class="col-6 fw-bold">Harga:</div><div class="col-6">Rp150.000</div></div>
                </div>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-light px-4 py-2">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Confirmation Message End -->
@endsection
