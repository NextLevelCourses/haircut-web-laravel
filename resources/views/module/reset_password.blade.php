@extends('layouts.user.master')

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

                        <form method="POST" action="{{ route('Landing.resetPassword.submit', $token) }}">
                            @csrf

                            <!-- New Password -->
                            <div class="mb-3 position-relative">
                                <label for="password" class="form-label text-white text-uppercase">New Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control border-0 py-3 pe-5" placeholder="Enter new password" required>
                                <span class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor:pointer;"
                                    onclick="togglePassword('password', this)">
                                    <i class="fa fa-eye text-white"></i>
                                </span>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4 position-relative">
                                <label for="password-confirm" class="form-label text-white text-uppercase">Confirm
                                    Password</label>
                                <input type="password" id="password-confirm" name="password_confirmation"
                                    class="form-control border-0 py-3 pe-5" placeholder="Confirm new password" required>
                                <span class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor:pointer;"
                                    onclick="togglePassword('password-confirm', this)">
                                    <i class="fa fa-eye text-white"></i>
                                </span>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 text-uppercase">Reset Password</button>
                        </form>

                        <p class="mt-4 text-white text-center">
                            Already have an account?
                            <a href="{{ route('user.login') }}" class="text-primary">Login here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password End -->

    <!-- Toggle Password Script -->
    <script>
        function togglePassword(fieldId, icon) {
            const input = document.getElementById(fieldId);
            const iconEl = icon.querySelector('i');
            if (input.type === "password") {
                input.type = "text";
                iconEl.classList.remove("fa-eye");
                iconEl.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                iconEl.classList.remove("fa-eye-slash");
                iconEl.classList.add("fa-eye");
            }
        }
    </script>
@endsection
