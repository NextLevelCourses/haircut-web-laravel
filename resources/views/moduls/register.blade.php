@extends('landingpage.auth.layout')


@section('title', 'Register')

@section('content')
<!-- Register Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-secondary p-5 rounded shadow">
                    <h2 class="text-uppercase text-center mb-4 text-white">Register</h2>

                    <form action="{{ url('/register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label text-white text-uppercase">Name</label>
                            <input type="text" class="form-control border-0 py-3" id="name" name="name"
                                placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-white text-uppercase">Email</label>
                            <input type="email" class="form-control border-0 py-3" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label text-white text-uppercase">Phone</label>
                            <input type="text" class="form-control border-0 py-3" id="phone" name="phone"
                                placeholder="Enter your phone number" required>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-white text-uppercase">Password</label>
                            <input type="password" class="form-control border-0 py-3" id="password" name="password"
                                placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 text-uppercase">Register</button>
                    </form>

                    <p class="mt-4 text-white text-center">
                        Already have an account?
                        <a href="{{ url('/login') }}" class="text-primary">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register End -->
@endsection
