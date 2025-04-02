<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LeamLegal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Law Firm Website Template">
    <meta name="description" content="Law Firm Website Template">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600;700;800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 (Updated) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="{{ route('home') }}" class="navbar-brand">LEAM LEGAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">The Firm</a></li>
                        <li class="nav-item"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
                        <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">News & Resources</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="ml-auto">
                        <a href="{{ url('/appointment') }}" class="btn btn-outline-warning btn-lg">BOOK A CONSULTATION</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Team Member Details -->
    <div class="container my-5 py-4">
        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-8">
                <h1 class="fw-bold" style="color: #AD8E00;">{{ $member['name'] }}</h1>
                <p class="fw-semibold fs-4 text-dark">{{ $member['role'] }}</p>
                <p class="fs-5 mt-3 text-justify">{!! $member['bio'] !!}</p>
                <a href="{{ url('/team') }}" class="btn btn-outline-warning">← Back to Team</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Updated) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
