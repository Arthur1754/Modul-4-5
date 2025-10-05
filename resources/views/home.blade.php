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

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <h4>About Our Application</h4>
            <p>
                Our application provides a clean and intuitive interface, allowing users to navigate easily
                and perform tasks efficiently. Built with Laravel and Bootstrap, it offers flexibility and responsiveness.
            </p>
            <a href="#" class="btn btn-primary">Explore More</a>
        </div>
    </section>

    <!-- List Pendidikan Section -->
    <section class="py-3">
        <div class="container">
            <h4>Daftar Jenjang Pendidikan</h4>
            <ul class="list-group mt-3">
                @foreach ($list_pendidikan as $pendidikan)
                    <li class="list-group-item">{{ $pendidikan }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Alerts Section -->
    <section class="py-3">
        <div class="container">
            <div class="alert alert-info">Informational alert</div>
            <div class="alert alert-success">Success alert</div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
