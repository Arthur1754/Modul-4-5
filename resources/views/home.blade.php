<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Laravel App</a>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-6 mb-2">{{ $username }}</h1>
            <p class="lead mb-0">{{ $last_login }}</p>
        </div>
    </section>

    <!-- Tiga Kolom -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri (Form Pertanyaan) -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pertanyaan</h5>

                            <form action="{{ route('question.store') }}" method="POST">
                                @csrf
                               <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input 
                                        type="text" 
                                        id="nama" 
                                        name="nama_lengkap" 
                                        class="form-control" 
                                        placeholder="Masukkan nama lengkap Anda" 
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="alamat_email" 
                                        class="form-control" 
                                        placeholder="Masukkan email aktif Anda" 
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                    <textarea 
                                        id="pertanyaan" 
                                        name="isi_pertanyaan" 
                                        class="form-control" 
                                        rows="4" 
                                        placeholder="Tuliskan pertanyaan Anda di sini..." 
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Kolom Tengah (kosong dulu) -->
                <div class="col-md-4">
                    <!-- Kosong -->
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
