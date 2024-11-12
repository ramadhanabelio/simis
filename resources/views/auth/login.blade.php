<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Inventaris Divisi MIS - RSUD Bengkalis</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card shadow border-0" style="max-width: 800px; width: 100%;">
            <div class="row g-0">
                <!-- Bagian Form -->
                <div class="col-md-6">
                    <div class="card-body m-3">
                        <div class="text-center">
                            <img src="{{ asset('img/logo.webp') }}" alt="Logo" class="mt-3 mb-3"
                                style="width: 25%;">
                        </div>
                        <h4 class="text-center mb-2">Sistem Inventaris </h4>
                        <h6 class="text-center text-muted mb-4">Divisi MIS</h6>
                        @if ($errors->any())
                            <div class="alert alert-danger text-center fw-bold">{{ $errors->first() }}</div>
                        @endif
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label fw-medium">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3 position-relative">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan password" required>
                                <button type="button" id="togglePassword" class="position-absolute"
                                    style="right: 10px; top: 38px; border: none; background: none;">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                            <button type="submit" class="btn btn-success rounded-0 w-100">Masuk</button>
                        </form>
                    </div>
                </div>

                <!-- Bagian Gambar -->
                <div class="col-md-6 d-none d-md-block">
                    <div class="h-100 w-100"
                        style="background-image: url('{{ asset('img/background.jpg') }}'); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- My JS --}}
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('bi-eye');
            eyeIcon.classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>
