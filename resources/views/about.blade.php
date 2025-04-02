@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="section-header">
        <h2 style="color: #AD8E00;">The Firm</h2>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-lg-5 col-md-6 text-center">
                    <div>
                        <img src="{{ asset('img/firm.jpg') }}" alt="Image" class="img-fluid rounded shadow-lg">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">


                        <h2 style="color: #AD8E00;">Where law meets excellence</h2>
                        <p>
                            At Leam Legal Practice, we are built on a foundation of excellence, integrity, and results. As a
                            full-service law firm, we provide cutting-edge legal solutions tailored to the needs of
                            individuals, businesses, and organizations.
                            With a team of highly skilled and experienced lawyers we navigate complex legal landscapes with
                            precision and diligence, ensuring that our clients receive strategic counsel, strong advocacy,
                            and innovative solutions. Our areas of expertise span corporate and commercial law, dispute
                            resolution, real estate transactions, regulatory compliance, intellectual property, technology
                            and data protection, sports and entertainment law, immigration law, employment and labour law,
                            banking, finance and investment law, Islamic banking and finance law, energy, oil & gas and
                            natural resources law, family law & estate planning, criminal law, and personal legal
                            representation.
                            We are committed to providing client-centric, results-oriented legal solutions. We carefully
                            assess each legal challenge, crafting personalised strategies that align with your objectives
                            while leveraging our expertise and industry insight to deliver effective representation.
                            We believe in building long-term partnerships based on trust, transparency, and unwavering
                            commitment to justice. Whether you are facing a complex legal challenge or seeking proactive
                            legal guidance, Leam Legal Practice is here to protect your interests.
                        </p>

                        <a href="{{ route('contact') }}" class="btn"
                            style="background-color: #AD8E00; color: white; border-radius: 5px; padding: 10px 20px; text-decoration: none;">
                            Contact Us
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection









{{-- @extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">

                    <div>
                        <img src="{{ asset('img/firm.jpg') }}" alt="Image" class="img-fluid rounded">
                    </div>

                <div class="col-lg-7 col-md-6">

                    <div class="about-text">
                        <h2 style="color: #AD8E00">WELCOME TO LEAM LEGAL PRACTICE</h2>
                        <p>
                            Where Expertise, Integrity, and Dedication Drive Our Practice
                            At Leam Legal Practice, we recognise that every legal challenge
                            is unique and complex, which is why we are here to guide, support,
                            and advocate for you every step of the way. With a client-first approach,
                            we take the time to listen, strategise, and develop legal solutions
                            tailored to client needs. By combining legal expertise, industry knowledge,
                            and innovative strategies, we provide proactive support and effective
                            representation—whether you're a business navigating corporate laws, an
                            individual seeking legal protection, or an organization requiring compliance
                            guidance. Committed to clarity, confidence, and results, we ensure that your
                            legal matters receive the dedicated attention and unwavering commitment they
                            deserve. Let’s move forward together.
                        </p><br /> <br />

                        <h2 style="color: #AD8E00">THE FIRM</h2>
                        <p>
                            At Leam Legal Practice, we are built on a foundation of excellence, integrity, and results. As a
                            full-service law firm, we provide cutting-edge legal solutions tailored to the needs of
                            individuals, businesses, and organizations.
                            With a team of highly skilled and experienced lawyers we navigate complex legal landscapes with
                            precision and diligence, ensuring that our clients receive strategic counsel, strong advocacy,
                            and innovative solutions. Our areas of expertise span corporate and commercial law, dispute
                            resolution, real estate transactions, regulatory compliance, intellectual property, technology
                            and data protection, sports and entertainment law, immigration law, employment and labour law,
                            banking, finance and investment law, Islamic banking and finance law, energy, oil & gas and
                            natural resources law, family law & estate planning, criminal law, and personal legal
                            representation.
                            We are committed to providing client-centric, results-oriented legal solutions. We carefully
                            assess each legal challenge, crafting personalised strategies that align with your objectives
                            while leveraging our expertise and industry insight to deliver effective representation.
                            We believe in building long-term partnerships based on trust, transparency, and unwavering
                            commitment to justice. Whether you are facing a complex legal challenge or seeking proactive
                            legal guidance, Leam Legal Practice is here to protect your interests.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    </body>

    </html>
@endsection --}}
