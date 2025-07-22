@extends('layouts.user.master')

@section('title', 'Login')

@section('content')
    <!-- Login Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5 rounded shadow">
                        @session('success')
                            <div class="flash-data-success" data-flashdata="{{ $value }}" role="alert">
                            </div>
                        @endsession

                        @session('error')
                            <div class="flash-data-error" data-flashdata="{{ $value }}" role="alert">
                            </div>
                        @endsession

                        <h2 class="text-uppercase text-center mb-4 text-white">Login</h2>

                        <form action="{{ route('user.do_login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label text-white text-uppercase">Email/No
                                    Handphone</label>
                                <input type="text"
                                    class="form-control @error('ephone') is-invalid @enderror border-0 py-3" id="ephone"
                                    name="ephone" placeholder="Enter your email or no handphone">
                                @error('ephone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label text-white text-uppercase">Password</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror border-0 py-3"
                                    id="password" name="password" placeholder="Enter your password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label text-white" for="remember">
                                        Remember Me
                                    </label> --}}
                                </div>
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 text-uppercase">Login</button>
                        </form>

                        <p class="mt-4 text-white text-center">
                            Don't have an account?
                            <a href="{{ route('user.register') }}" class="text-primary">Register here</a> Or Back Landing <a
                                href="{{ route('Landing.index') }}" class="text-primary">Home</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
@endsection
