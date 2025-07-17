@extends('landingpage.auth.layout')

@section('title', 'Reset Password')

@section('content')
    <!-- Reset Password Start -->
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

                        <h2 class="text-uppercase text-center mb-4 text-white">Reset Password</h2>

                        <form method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <label for="password" class="form-label text-white text-uppercase">New Password</label>
                                <input type="password" id="password" name="password"
                                       class="form-control border-0 py-3" placeholder="Enter new password" required>
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="form-label text-white text-uppercase">Confirm Password</label>
                                <input type="password" id="password-confirm" name="password_confirmation"
                                       class="form-control border-0 py-3" placeholder="Confirm new password" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 text-uppercase">Reset Password</button>
                        </form>

                        <p class="mt-4 text-white text-center">
                            Already have an account?
                            <a href="#" class="text-primary">Login here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password End -->
@endsection
