<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register | The Shortcut</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Register Container -->
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Daftar</h2>
                <p class="text-muted">Buat akun baru</p>
            </div>
            <form method="POST" action="#">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Nama lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="example@email.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="********" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="********" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="{{ url('/login') }}">Masuk di sini</a></p>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
