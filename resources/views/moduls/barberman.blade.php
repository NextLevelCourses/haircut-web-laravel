@extends('landingpage.master')

@section('title', 'Pilih Barbermen')

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
<!-- Barberman Selection Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Barberman</p>
            <h1 class="text-uppercase">Silahkan Pilih Barbermen Anda</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Barberman 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <label class="w-100">
                    <input type="radio" name="barber" value="Andi" class="d-none">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 cursor-pointer">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle overflow-hidden"
                             style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{ asset('assets/img/barber1.png') }}" alt="Andi">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-2">Andi</h3>
                            <p>Spesialis potongan klasik dan modern fade</p>
                        </div>
                        <span class="btn btn-square position-absolute top-0 end-0 m-3"><i class="fa fa-user text-primary"></i></span>
                    </div>
                </label>
            </div>

            <!-- Barberman 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <label class="w-100">
                    <input type="radio" name="barber" value="Rama" class="d-none">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 cursor-pointer">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle overflow-hidden"
                             style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{ asset('assets/img/barber2.png') }}" alt="Rama">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-2">Rama</h3>
                            <p>Ahli dalam styling rambut kekinian & color</p>
                        </div>
                        <span class="btn btn-square position-absolute top-0 end-0 m-3"><i class="fa fa-user text-primary"></i></span>
                    </div>
                </label>
            </div>

            <!-- Barberman 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <label class="w-100">
                    <input type="radio" name="barber" value="Bayu" class="d-none">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 cursor-pointer">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle overflow-hidden"
                             style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{ asset('assets/img/barber3.png') }}" alt="Bayu">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-2">Bayu</h3>
                            <p>Berpengalaman lebih dari 10 tahun di bidang barber</p>
                        </div>
                        <span class="btn btn-square position-absolute top-0 end-0 m-3"><i class="fa fa-user text-primary"></i></span>
                    </div>
                </label>
            </div>
        </div>
    </div>
</div>
<!-- Barberman Selection End -->
@endsection
