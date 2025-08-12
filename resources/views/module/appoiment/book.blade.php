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
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-dark text-primary py-1 px-4">Booking</p>
                        <h1 class="text-uppercase mb-4">Please field of this form booking</h1>
                        <p class="mb-4">After field it then click order now button.
                            {{-- done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                        </p>
                        <form method="POST" action="">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select type="text" class="form-control bg-transparent" id="name"
                                            name="name">
                                            <option value="" selected disabled>Pilih Layanan</option>
                                            @foreach ($data['service'] as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="name">Services</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select type="text" class="form-control bg-transparent" id="gender_select"
                                            name="gender_select">
                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                            @foreach ($data['gender'] as $gender)
                                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="gender_select">Gender</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select type="text" class="form-control bg-transparent" id="barberman_select"
                                            name="barberman_select">
                                            <option value="" selected disabled>Pilih Berberman</option>
                                            @foreach ($data['barberman'] as $barberman)
                                                <option value="{{ $barberman->id }}">{{ $barberman->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="barberman_select">Berberman</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select type="text" class="form-control bg-transparent" id="schedule_select"
                                            name="schedule_select">
                                            <option value="" selected disabled>Pilih Jadwal</option>
                                            @foreach ($data['schedule'] as $schedule)
                                                <option value="{{ $schedule->id }}">
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $schedule->schedule_date)->format('d M Y') }}
                                                    ({{ "$schedule->start_time - $schedule->end_time" }})
                                                </option>
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="schedule_select">Schedule</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control  bg-transparent" id="reference_code"
                                            name="code_reference" placeholder="Reference Code"
                                            value="{{ $data['code_reference'] }}" readonly>
                                        <label for="reference_code">Reference Code</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave description here" id="description"
                                            style="height: 100px" name="description"></textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-50 py-3" type="submit">Order Now</button>
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
