@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<style>
    .carousel-item img {
        object-fit: cover;
        height: 600px; /* Adjust based on your design */
    }
</style>

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/home.jpg') }}" class="d-block w-100" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">WELCOME TO </h1>
                <h1 class="animated fadeInLeft">LEAM LEGAL PRACTICE</h1>
                <p class="animated fadeInRight">Your trusted partner for strategic legal solutions. With a client-first approach, we offer expert guidance and dedicated advocacy for businesses, individuals, and organizations.</p>
                <a class="btn btn-primary animated fadeInUp" href="{{ url('/appointment') }}"
                   style="background-color: #AD8E00; color: white; border: none;">Book a Consultation</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/home2.jpg') }}" class="d-block w-100" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">WELCOME TO </h1>
                <h1 class="animated fadeInLeft">LEAM LEGAL PRACTICE</h1>
                <p class="animated fadeInRight">Where Expertise, Integrity, and Dedication Drive Our Practice</p>
                <a class="btn btn-primary animated fadeInUp" href="{{ url('/appointment') }}"
                   style="background-color: #AD8E00; color: white; border: none;">Book a Consultation</a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- Newsletter Start -->
<div class="newsletter py-3 bg-light text-center mb-5">
    <div class="container d-flex justify-content-center">
        <div class="newsletter-content p-3 rounded bg-white shadow-sm" style="max-width: 600px; width: 100%;">
            <div class="section-header">
                <h4 style="color: #AD8E00">Subscribe to Our Newsletter</h4>
                <p>Stay updated with the latest news and articles.</p>
            </div>
            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf
                <div class="d-flex">
                    <input type="email" name="email" class="form-control flex-grow-1"
                        placeholder="Enter your email" required style="border: 2px solid #AD8E00;">
                    <button type="submit" class="btn btn-primary ml-2"
                        style="background-color: #AD8E00; color: #fff; border: none;">Subscribe</button>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Newsletter End -->

</div>
@endsection
