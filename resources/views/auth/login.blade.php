<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sibeasiswaku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0d6efd;
            --text-color: #212529;
            --secondary-text-color: #6c757d;
            --background-color: #f8f9fa;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            background-color: var(--background-color);
        }

        .main-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        .form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding: 2rem;
            width: 100%;
        }

        .image-section {
            width: 50%;
            background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop'); /* Ganti dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .image-overlay {
            background: rgba(13, 110, 253, 0.6); /* Overlay biru */
            position: absolute;
            inset: 0;
        }

        .image-content {
            position: relative;
            z-index: 1;
            padding: 2rem;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 1rem;
            padding: 2.5rem;
        }

        .form-control {
            height: 50px;
            border-radius: 0.5rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            border-color: var(--primary-color);
        }

        .btn-primary {
            padding: 0.75rem;
            font-weight: 700;
            border-radius: 0.5rem;
        }

        .brand-logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--secondary-text-color);
            font-size: 0.9rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }

        .divider:not(:empty)::before {
            margin-right: .5em;
        }

        .divider:not(:empty)::after {
            margin-left: .5em;
        }

        .btn-google {
            background-color: white;
            border: 1px solid #dee2e6;
            color: var(--text-color);
        }
        .btn-google:hover {
            background-color: #f8f9fa;
            border-color: #adb5bd;
        }

        @media (max-width: 991.98px) {
            .image-section {
                display: none;
            }
            .form-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="main-container">

    <div class="form-section">
        <div class="login-card bg-white">
            <div class="text-center mb-4">
                <h1 class="brand-logo">🎓</h1>
                <h3 class="fw-bold mt-2">Selamat Datang Kembali!</h3>
                <p class="text-muted">Silakan masuk untuk melanjutkan ke Sibeasiswaku.</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger p-2 text-center" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="contoh@email.com" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Ingat Saya
                        </label>
                    </div>
                    
                </div>

                <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>

                <div class="divider my-3">atau</div>



            </form>

            <div class="text-center mt-4">
                <small class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="fw-medium text-decoration-none">Daftar di sini</a></small>
            </div>
        </div>
    </div>

    <div class="image-section">
        <div class="image-overlay"></div>
        <div class="image-content">
            <h1 class="display-5 fw-bold">Wujudkan Mimpimu</h1>
            <p class="lead mt-3">Akses ribuan peluang beasiswa dan raih potensi akademikmu bersama Sibeasiswaku.</p>
        </div>
    </div>
</div>

</body>
</html>
