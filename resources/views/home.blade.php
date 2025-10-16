<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('../assets/css/custom-style.css') }}">
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-weight: bold;
        }
    </style> --}}
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <img src="{{ asset('/assets/images/Silent_Witch.jpeg') }}" alt="Logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tiga Kolom -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri (Form Pertanyaan) -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pertanyaan</h5>
                                @if (session('info'))
                                    <div class="alert alert-info">
                                        {!! session('info') !!}
                                    </div>
                                @endif
                            <!-- ERROR MESSAGES KHUSUS FORM PERTANYAAN -->
                            @if ($errors->has('nama') || $errors->has('email') || $errors->has('pertanyaan'))
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @if ($errors->has('nama'))
                                            <li>{{ $errors->first('nama') }}</li>
                                        @endif
                                        @if ($errors->has('email'))
                                            <li>{{ $errors->first('email') }}</li>
                                        @endif
                                        @if ($errors->has('pertanyaan'))
                                            <li>{{ $errors->first('pertanyaan') }}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('question.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ old('nama') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="4">{{ old('pertanyaan') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Kolom Tengah (Form Login) -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Form Login</h5>

                            <!-- ERROR MESSAGES KHUSUS FORM LOGIN -->
                            @if ($errors->has('username') || $errors->has('password'))
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @if ($errors->has('username'))
                                            <li>{{ $errors->first('username') }}</li>
                                        @endif
                                        @if ($errors->has('password'))
                                            <li>{{ $errors->first('password') }}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-success w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan (kosong dulu) -->
                <div class="col-md-4">
                    <!-- Kosong -->
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>