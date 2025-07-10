@extends('landingpage.master')

@section('title', 'Riwayat Transaksi')

@section('content')
<!-- Header Info Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-primary">Transaksi</h5>
                <h3 class="fw-bold">Riwayat Transaksi Anda</h3>
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

<!-- History Table Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow">
            <table id="historyTable" class="table table-bordered table-hover text-center align-middle">
                <thead class="table-primary text-uppercase">
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Service</th>
                        <th>Barberman</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>24 Juni 2025</td>
                        <td>14:00</td>
                        <td>Haircut + Coloring</td>
                        <td>Rama</td>
                        <td>Rp150.000</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>20 Juni 2025</td>
                        <td>11:00</td>
                        <td>Haircut</td>
                        <td>Fajar</td>
                        <td>Rp50.000</td>
                        <td><span class="badge bg-danger">Dibatalkan</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>15 Juni 2025</td>
                        <td>09:00</td>
                        <td>Haircut + Massage</td>
                        <td>Yogi</td>
                        <td>Rp90.000</td>
                        <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- History Table End -->

<!-- DataTables Assets -->
@push('scripts')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#historyTable').DataTable({
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ entri",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "paginate": {
                    "first": "Awal",
                    "last": "Akhir",
                    "next": "→",
                    "previous": "←"
                }
            }
        });
    });
</script>
@endpush
@endsection
