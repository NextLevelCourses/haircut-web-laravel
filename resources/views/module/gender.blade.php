@extends('landingpage.master')

@section('title', 'Pilih Gender')

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
<!-- Gender Selection Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Pilih Gender</p>
            <h1 class="text-uppercase">Siapa Kamu?</h1>
        </div>
        <div class="row justify-content-center g-4">
            <!-- Laki-laki -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <label class="w-100">
                    <input type="radio" name="gender" value="Laki-Laki" class="d-none">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 cursor-pointer">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                             style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="#" alt="Laki-Laki">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Laki-Laki</h3>
                            <p>Pilihan untuk pengguna pria</p>
                        </div>
                        <span class="btn btn-square position-absolute top-0 end-0 m-3"><i class="fa fa-mars text-primary"></i></span>
                    </div>
                </label>
            </div>

            <!-- Wanita -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <label class="w-100">
                    <input type="radio" name="gender" value="Wanita" class="d-none">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 cursor-pointer">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                             style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="#" alt="Wanita">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Wanita</h3>
                            <p>Pilihan untuk pengguna wanita</p>
                        </div>
                        <span class="btn btn-square position-absolute top-0 end-0 m-3"><i class="fa fa-venus text-primary"></i></span>
                    </div>
                </label>
            </div>
        </div>
    </div>
</div>
<!-- Gender Selection End -->
@endsection
