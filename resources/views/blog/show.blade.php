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
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">The Firm</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Practice Areas</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('litigation') }}" class="dropdown-item">Litigation & Dispute Resolution</a></li>
                                <li><a href="{{ route('regulation') }}" class="dropdown-item">Regulatory Compliance & Government Relations</a></li>
                                <li><a href="{{ route('entertainment') }}" class="dropdown-item">Sports & Entertainment Law</a></li>
                                <li><a href="{{ route('technology') }}" class="dropdown-item">Technology, Intellectual Property & Data Protection</a></li>
                                <li><a href="{{ route('property') }}" class="dropdown-item">Real Estate & Property Law</a></li>
                                <li><a href="{{ route('employment') }}" class="dropdown-item">Employment & Labour Law</a></li>
                                <li><a href="{{ route('finance') }}" class="dropdown-item">Banking, Finance & Investment Law</a></li>
                                <li><a href="{{ route('energy') }}" class="dropdown-item">Energy, Oil & Gas, and Natural Resources Law</a></li>
                                <li><a href="{{ route('criminal') }}" class="dropdown-item">Criminal Defence</a></li>
                                <li><a href="{{ route('immigration') }}" class="dropdown-item">Immigration Law & Global Mobility</a></li>
                                <li><a href="{{ route('family') }}" class="dropdown-item">Family Law & Estate Planning</a></li>
                                <li><a href="{{ route('corporate') }}" class="dropdown-item">Corporate, Commercial & Company Secretarial Services</a></li>
                                <li><a href="{{ route('islamic') }}" class="dropdown-item">Islamic Banking and Finance Law</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('team') }}" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/blog') }}" class="nav-link">News & Resources</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="ml-auto">
                        <a href="{{ url('/appointment') }}" class="btn btn-outline-warning btn-lg">
                            BOOK A CONSULTATION
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->



    <div class="container">
        <h1>{{ $blog->title }}</h1>
        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
        <p><strong>Category:</strong> {{ $blog->category }}</p>
        <p><strong>Published On:</strong> {{ \Carbon\Carbon::parse($blog->published_at)->format('d-M-Y') }}</p>
        <p>{{ $blog->content }}</p>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Blog</a>
    </div>







{{-- <div class="container">
    <div class="blog-detail">
        <h2>{{ $blog->title }}</h2>
        <div class="meta">
            <i class="fa fa-list-alt"></i> <a href="#">{{ $blog->category }}</a>
            <i class="fa fa-calendar-alt"></i> <p>{{ $blog->published_at->format('d-M-Y') }}</p>
        </div>
        <img src="{{ asset($blog->image) }}" alt="Blog">
        <p>{{ $blog->content }}</p>
    </div>
</div> --}}


</body>
</html>
