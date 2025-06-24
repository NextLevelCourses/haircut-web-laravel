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
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p>
            <h1 class="text-uppercase">Meet Our Barber</h1>
        </div>
        <div class="row g-4">
            @foreach ([1,2,3,4] as $i)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $i * 2 }}s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/team-' . $i . '.jpg') }}" alt="Barber {{ $i }}">
                        <div class="team-social">
                            <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase mb-2">Barber {{ $i }}</h5>
                        <span class="text-primary d-block mb-2">Senior Barber</span>

                        <!-- Rating -->
                        <div class="mb-2">
                            @for ($star = 1; $star <= 5; $star++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <span class="badge bg-primary fs-6 py-1 px-2">Rp{{ number_format(50000 + $i * 10000, 0, ',', '.') }}</span>
                        </div>

                        <!-- Select Button -->
                        <form action="#" method="POST">
                            @csrf
                            <input type="hidden" name="barberman_id" value="{{ $i }}">
                            <button type="submit" class="btn btn-outline-light w-100 text-uppercase">Pilih</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Barberman Selection End -->
@endsection
