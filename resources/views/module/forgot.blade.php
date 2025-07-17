@extends('landingpage.auth.layout')

@section('title', 'Forgot Password')

@section('content')
    <!-- Forgot Password Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5 rounded shadow">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 class="text-uppercase text-center mb-4 text-white">Forgot Password</h2>

                        <form method="POST" action="#">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label text-white text-uppercase">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control border-0 py-3"
                                       placeholder="Enter your email" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 text-uppercase">
                                Send Password Reset Link
                            </button>
                        </form>

                        <p class="mt-4 text-white text-center">
                            Remembered your password?
                            <a href="#" class="text-primary">Login here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password End -->
@endsection
