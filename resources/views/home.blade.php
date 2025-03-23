@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel-1.jpg') }}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your justice</h1>
                        <p class="animated fadeInRight">Lorem ipsum dolor sit amet elit. Mauris odio mauris...</p>
                        <a class="btn btn-primary animated fadeInUp" href="{{ url('/appointment') }}"
                            style="color: #FFFFFF;">Book an appointment</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-2.jpg') }}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                        <p class="animated fadeInRight">Lorem ipsum dolor sit amet elit. Mauris odio mauris...</p>
                        <a class="btn btn-primary animated fadeInUp" href="{{ url('/appointment') }}"
                            style="color: #FFFFFF;">Book an appointment</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-3.jpg') }}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                        <p class="animated fadeInRight">Lorem ipsum dolor sit amet elit. Mauris odio mauris...</p>
                        <a class="btn btn-primary animated fadeInUp" href="{{ url('/appointment') }}"
                            style="color: #FFFFFF;">Book an appointment</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->

        <!-- Top Feature Start-->
        <div class="feature-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-check-circle"></i>
                            <h3>Legal</h3>
                            <p>Govt Approved</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="fa fa-user-tie"></i>
                            <h3>Attorneys</h3>
                            <p>Expert Attorneys</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-thumbs-up"></i>
                            <h3>Success</h3>
                            <p>99.99% Case Won</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-handshake"></i>
                            <h3>Support</h3>
                            <p>Quick Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Feature End-->

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
