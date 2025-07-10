@extends('landingpage.master')

@section('title', 'Testimoni Pelanggan')

@section('content')
<!-- Header Info Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2">
                <h5 class="text-uppercase text-primary">Testimoni</h5>
                <h3 class="fw-bold">Kelola Testimoni Pelanggan</h3>
            </div>
            <div class="text-end">
                <p class="mb-0 text-muted">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- Header Info End -->

<!-- Testimoni Form Start -->
<div class="container-xxl pb-4">
    <div class="container">
        <div class="bg-white rounded shadow p-4 mb-4">
            <h4 class="mb-3">Tambah Testimoni</h4>
            <form id="testimonialForm">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <select id="rating" class="form-select" required>
                            <option value="">Pilih Rating</option>
                            <option value="5">★★★★★</option>
                            <option value="4">★★★★☆</option>
                            <option value="3">★★★☆☆</option>
                            <option value="2">★★☆☆☆</option>
                            <option value="1">★☆☆☆☆</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea id="comment" rows="3" class="form-control" placeholder="Tulis testimoni..." required></textarea>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Testimoni Form End -->

<!-- Testimoni List Start -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="text-uppercase">Testimoni Terbaru</h1>
        </div>

        <div id="testimonialList" class="row g-4">
            <!-- Testimoni akan muncul di sini -->
        </div>
    </div>
</div>
<!-- Testimoni List End -->

@push('scripts')
<script>
    const form = document.getElementById('testimonialForm');
    const testimonialList = document.getElementById('testimonialList');

    let testimonials = [
        { name: 'Rizky Maulana', rating: 4, comment: 'Pelayanan ramah dan hasil potongannya sangat rapi.' },
        { name: 'Sarah Amanda', rating: 5, comment: 'Barberman-nya profesional, tempatnya juga nyaman.' },
        { name: 'Andi Pratama', rating: 3, comment: 'Cukup memuaskan, perlu lebih cepat prosesnya.' }
    ];

    function renderTestimonials() {
        testimonialList.innerHTML = '';
        testimonials.forEach((item, index) => {
            testimonialList.innerHTML += `
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded p-4 shadow position-relative">
                        <strong>${item.name}</strong>
                        <div class="text-warning mb-2">${'★'.repeat(item.rating)}${'☆'.repeat(5 - item.rating)}</div>
                        <p class="fst-italic text-muted mb-0">${item.comment}</p>
                        <button class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2" onclick="deleteTestimonial(${index})">×</button>
                    </div>
                </div>
            `;
        });
    }

    function deleteTestimonial(index) {
        if (confirm("Yakin ingin menghapus testimoni ini?")) {
            testimonials.splice(index, 1);
            renderTestimonials();
        }
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('name').value.trim();
        const rating = parseInt(document.getElementById('rating').value);
        const comment = document.getElementById('comment').value.trim();

        if (name && rating && comment) {
            testimonials.unshift({ name, rating, comment });
            form.reset();
            renderTestimonials();
        }
    });

    document.addEventListener('DOMContentLoaded', renderTestimonials);
</script>
@endpush
@endsection
