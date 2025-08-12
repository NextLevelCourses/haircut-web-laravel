@extends('layouts.user.master', ['about_us' => $data['about_us']])

@section('title', 'Booking')

@section('content')
    @session('success')
        <div class="flash-data-success" data-flashdata="{{ $value }}" role="alert">
        </div>
    @endsession

    @session('error')
        <div class="flash-data-error" data-flashdata="{{ $value }}" role="alert">
        </div>
    @endsession
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
    <!-- Book Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-dark text-primary py-1 px-4">Contact Us</p>
                        @session('success')
                            <div class="alert alert-success" role="alert">
                                {{ $value }}
                            </div>
                        @endsession

                        @session('error')
                            <div class="alert alert-danger" role="alert">
                                {{ $value }}
                            </div>
                        @endsession
                        <h1 class="text-uppercase mb-4">Have Any Question? Please Contact Us!</h1>
                        <p class="mb-4">The contact form insert your name,email,subject,and also message it.
                            {{-- done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                        </p>
                        <form method="POST" action="">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            name="name" placeholder="Your Name" value="">
                                        {{-- @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="email"
                                            name="email" placeholder="Your Email" value="">
                                        {{-- @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control  bg-transparent" name="subject"
                                            id="subject" placeholder="Subject" value="">
                                        {{-- @error('subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px"
                                            name="message"></textarea>
                                        {{-- @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="google-map w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15868.234203545615!2d106.65006121241768!3d-6.122822466439574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02695aaccb09%3A0x61dee98159fa3fe5!2sSoekarno%E2%80%93Hatta%20International%20Airport!5e0!3m2!1sen!2sid!4v1753068298038!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                            style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
