<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Sibeasiswaku</title>
    <link rel="icon" href="{{ asset('img/sibeasiswaku.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* CSS ini disamakan persis dengan halaman Login Anda */
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
            background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop');
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
            background: rgba(13, 110, 253, 0.6);
            position: absolute;
            inset: 0;
        }

        .image-content {
            position: relative;
            z-index: 1;
            padding: 2rem;
        }

        .register-card {
            width: 100%;
            max-width: 480px; /* Sedikit lebih lebar untuk form yang lebih panjang */
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

        @media (max-width: 991.98px) {
            .image-section {
                display: none;
            }
            .form-section {
                width: 100%;
            }
            .register-card {
                 max-width: 450px;
            }
        }
    </style>
</head>
<body>

<div class="main-container">

    <div class="form-section">
        <div class="register-card bg-white">
            <div class="text-center mb-4">
                <h1 class="brand-logo">🎓</h1>
                <h3 class="fw-bold mt-2">Buat Akun Baru</h3>
                <p class="text-muted">Isi data di bawah untuk memulai perjalananmu.</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger p-2 mb-3" role="alert">
                    <ul class="mb-0" style="padding-left: 1.5rem;">
                        @foreach($errors->all() as $error)
                            <li><small>{{ $error }}</small></li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-medium">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-medium">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="contoh@email.com" value="{{ old('email') }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-medium">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-medium">Domisili</label>
                        <input type="text" name="domisili" class="form-control" placeholder="Contoh: Jakarta" value="{{ old('domisili') }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-medium">Asal Sekolah</label>
                    <input type="text" name="sekolah" class="form-control" placeholder="Nama sekolah/universitas" value="{{ old('sekolah') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-medium">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Minimal 8 karakter" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-medium">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                </div>

                <button class="btn btn-primary w-100" type="submit">Daftar Akun</button>
            </form>

            <div class="text-center mt-4">
                <small class="text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="fw-medium text-decoration-none">Login di sini</a></small>
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
