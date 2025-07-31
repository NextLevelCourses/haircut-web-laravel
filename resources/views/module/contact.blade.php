@extends('layouts.user.master', ['about_us' => $data['about_us']])

@section('title', 'Home')

@php
    $authUserCheck = Auth::guard('user')->check();
    $name = $authUserCheck ? Auth::guard('user')->user()->name : old('name');
    $email = $authUserCheck ? Auth::guard('user')->user()->email : old('email');
@endphp

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
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
                        <form method="POST" action="{{ route('Landing.contact_submit') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @if ($errors->has('name')) is-invalid @elseif(old('name') || isset($name)) is-valid @endif bg-transparent"
                                            id="name" name="name" placeholder="Your Name"
                                            value="{{ $name }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @if ($errors->has('email')) is-invalid @elseif(old('email') || isset($email)) is-valid @endif bg-transparent"
                                            id="email" name="email" placeholder="Your Email"
                                            value="{{ $email }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @if ($errors->has('subject')) is-invalid @elseif(old('subject') || isset($subject)) is-valid @endif bg-transparent"
                                            name="subject" id="subject" placeholder="Subject"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea
                                            class="form-control @if ($errors->has('message')) is-invalid @elseif(old('message') || isset($message)) is-valid @endif bg-transparent"
                                            placeholder="Leave a message here" id="message" style="height: 100px" name="message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="google-map w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15868.234203545615!2d106.65006121241768!3d-6.122822466439574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02695aaccb09%3A0x61dee98159fa3fe5!2sSoekarno%E2%80%93Hatta%20International%20Airport!5e0!3m2!1sen!2sid!4v1753068298038!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                            style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
