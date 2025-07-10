@extends('landingpage.master')

@section('title', 'Invoice Transaksi')

@section('content')
<!-- Invoice Header Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-primary">Invoice</h5>
                <h3 class="fw-bold">#INV-20250625-001</h3>
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
<!-- Invoice Header End -->

<!-- Invoice Body Start -->
<div class="container-xxl py-5">
    <div class="container bg-white p-4 rounded shadow">
        <!-- Client Info -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h5 class="fw-bold mb-2">Kepada:</h5>
                <p class="mb-1">John Doe</p>
                <p class="mb-1">john@example.com</p>
                <p class="mb-0">+62 812-3456-7890</p>
            </div>
            <div class="col-md-6 text-md-end mt-4 mt-md-0">
                <h5 class="fw-bold mb-2">Hair Shortcut</h5>
                <p class="mb-1">Jl. Pangkas No. 88, Jakarta</p>
                <p class="mb-1">hairshortcut@email.com</p>
                <p class="mb-0">+62 812-1234-5678</p>
            </div>
        </div>

        <!-- Invoice Table -->
        <div class="table-responsive mb-4">
            <table class="table table-bordered text-center">
                <thead class="table-light text-uppercase">
                    <tr>
                        <th>#</th>
                        <th>Service</th>
                        <th>Barberman</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Haircut + Coloring</td>
                        <td>Rama</td>
                        <td>Rp150.000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Total</th>
                        <th>Rp150.000</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Notes -->
        <div class="mb-4">
            <p class="text-muted fst-italic">*Harap tunjukkan invoice ini saat datang ke lokasi untuk validasi booking Anda.</p>
        </div>

        <!-- Action -->
        <div class="text-center">
            <button class="btn btn-primary px-4 py-2 rounded-pill" onclick="window.print()">
                <i class="bi bi-printer me-2"></i> Cetak Invoice
            </button>
        </div>
    </div>
</div>
<!-- Invoice Body End -->
@endsection
