@extends('landingpage.master')

@section('title', 'Booking Gagal')

@section('content')
<!-- Header Info Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-danger">Booking Gagal</h5>
                <h3 class="fw-bold">Maaf, {{ Auth::user()->name ?? 'Customer' }}</h3>
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

<!-- Booking Failed Message Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <i class="bi bi-x-circle-fill display-4 text-danger mb-3"></i>
            <h2 class="text-uppercase text-danger">Booking Gagal!</h2>
            <p class="text-muted mt-3">
                Terjadi kesalahan saat memproses booking Anda. Silakan coba lagi atau hubungi kami untuk bantuan lebih lanjut.
            </p>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-danger px-4 py-2">Coba Lagi</a>
            <a href="#" class="btn btn-secondary px-4 py-2 ms-2">Kembali ke Beranda</a>
        </div>
    </div>
</div>
<!-- Booking Failed Message End -->
@endsection
