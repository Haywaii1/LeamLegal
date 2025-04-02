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
    <style>
        .text-highlight { color: #AD8E00 !important; }
        .btn-highlight { border-color: #AD8E00 !important; color: #AD8E00 !important; }
        .btn-highlight:hover { background-color: #AD8E00 !important; color: #fff !important; }
    </style>
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="{{ route('home') }}" class="navbar-brand text-highlight">LEAM LEGAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-highlight">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">The Firm</a></li>
                        <li class="nav-item"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
                        <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">News & Resources</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="ml-auto">
                        <a href="{{ url('/appointment') }}" class="btn btn-highlight btn-lg">BOOK A CONSULTATION</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Content Section -->
    <div class="container my-5">
        <!-- Team Member Details -->
        @if(isset($member))
        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="img-fluid rounded shadow-sm" style="width: 100%; height: auto; object-fit: cover;">
            </div>
            <div class="col-lg-8">
                <h1 class="text-highlight">{{ $member['name'] }}</h1>
                <p class="fw-bold">{{ $member['role'] }}</p>
                <p class="text-justify fs-5">{!! $member['bio'] !!}</p>
                <a href="{{ url('/team') }}" class="btn btn-highlight">&larr; Back to Team</a>
            </div>
        </div>
        @endif

        <!-- Blog Post Details -->
        @if(isset($blog))
        <div>
            <h1 class="text-highlight">{{ $blog->title }}</h1>
            <div class="text-center my-3">
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded" style="width: 100%; max-width: 600px; height: auto; object-fit: cover;">
            </div>
            <p><strong>Category:</strong> {{ $blog->category }}</p>
            <p><strong>Published On:</strong> {{ \Carbon\Carbon::parse($blog->published_at)->format('d-M-Y') }}</p>
            <p class="text-justify fs-5">{{ $blog->content }}</p>
            <a href="{{ route('blog.index') }}" class="btn btn-highlight">&larr; Back to News</a>
        </div>
        @endif
    </div>
    <!-- Content Section End -->

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
