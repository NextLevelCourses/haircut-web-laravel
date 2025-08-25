@extends('layouts.user.master', ['about_us' => $data['about_us']])

@section('title', 'Order Confirmation')

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

    <!-- Konfirmasi Booking Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Konfirmasi</p>
                <h1 class="text-uppercase">Konfirmasi Booking Anda</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-secondary text-white rounded-3 p-4 mb-4">
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Nama:</div>
                            <div class="col-6">{{ Auth::guard('user')->user()->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Email:</div>
                            <div class="col-6">{{ Auth::guard('user')->user()->email }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">No HP:</div>
                            <div class="col-6">{{ Auth::guard('user')->user()->no_hp }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Tanggal Booking:</div>
                            <div class="col-6">
                                {{ \Carbon\Carbon::parse($data['appoiment_schedule']->schedule_date)->format('d M Y') }}
                            </div>
                            <input type="text" name="appoiment_schedule_id" value="{{ $data['appoiment_schedule_id'] }}"
                                hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Gender:</div>
                            <div class="col-6">{{ $data['appoiment_gender_name'] }}</div>
                            <input type="text" name="appoiment_gender_id" value="{{ $data['appoiment_gender_id'] }}"
                                hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Service:</div>
                            <div class="col-6">{{ $data['appoiment_service_name'] }}</div>
                            <input type="text" name="appoiment_service_id" value="{{ $data['appoiment_service_id'] }}"
                                hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Barberman:</div>
                            <div class="col-6">{{ $data['appoiment_barberman']->name }}</div>
                            <input type="text" name="appoiment_barberman_id"
                                value="{{ $data['appoiment_barberman_id'] }}" hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Code Reference:</div>
                            <div class="col-6">{{ $data['appoiment_code_reference'] }}</div>
                            <input type="text" name="appoiment_code_reference"
                                value="{{ $data['appoiment_code_reference'] }}" hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Description:</div>
                            <div class="col-6">{{ $data['appoiment_description'] }}</div>
                            <input type="text" name="appoiment_description" value="{{ $data['appoiment_description'] }}"
                                hidden>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Harga:</div>
                            <div class="col-6">
                                {{ 'Rp.' . number_format($data['appoiment_barberman']->price, 0, ',', '.') }}
                            </div>
                            <input type="text" name="appoiment_amount" value="{{ $data['appoiment_barberman']->price }}"
                                hidden>
                        </div>

                        <!-- Metode Pembayaran -->
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">Metode Pembayaran:</div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="cash"
                                        value="Cash" checked>
                                    <label class="form-check-label" for="cash">Cash</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="debit"
                                        value="Debit">
                                    <label class="form-check-label" for="debit">Bank Transfer</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button Konfirmasi -->
                    <div class="text-center">
                        <button id="confirmBtnOrder" class="btn btn-primary px-5 py-2 text-uppercase">Konfirmasi
                            Booking</button>
                        <button id="confirmBtnCancel" class="btn btn-primary px-5 py-2 text-uppercase">Cancel</button>
                    </div>

                    <!-- Pesan sukses/gagal -->
                    <div id="booking-message" class="mt-4 d-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Konfirmasi Booking End -->
@endsection

@push('scripts')
    <script type="text/javascript">
        document.getElementById("confirmBtnCancel").addEventListener("click", function() {
            if (confirm("Apakah anda ingin membatalkan pesanan ?")) {
                window.location.href = "{{ route('Appoiment.view_book') }}"
            }
        })
    </script>
@endpush
