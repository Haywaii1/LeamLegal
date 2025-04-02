<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LeamLegal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="img/logo.jpg" alt="Logo" class="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>9:00am - 5:00pm</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+234 802 571 3831</h2>
                                <p>Call Us For Consultation</p>
                            </div>
                            <div class="social">
                                <a href="https://x.com/LeamLegal?t=7Tct0rKBe-btNLy9CCBmSA&s=09" class="text-white mx-2"
                                    target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/share/1BYyf1zRHZ/" class="text-white mx-2"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/leam-legal/" class="text-white mx-2" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/leamlegal?igsh=MXA2azhlM2tvMjJqOQ=="
                                    class="text-white mx-2" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link">The Firm</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Practice
                                    Areas</a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('litigation') }}" class="dropdown-item">Litigation & Dispute
                                        Resolution</a>
                                    <a href="{{ route('regulation') }}" class="dropdown-item">Regulatory Compliance &
                                        Government Relations</a>
                                    <a href="{{ route('entertainment') }}" class="dropdown-item">Sports and
                                        Entertainment Law</a>
                                    <a href="{{ route('technology') }}" class="dropdown-item">Technology, Intellectual
                                        Property & Data Protection Law</a>
                                    <a href="{{ route('property') }}" class="dropdown-item">Real Estate & Property
                                        Law</a>
                                    <a href="{{ route('employment') }}" class="dropdown-item">Employment & Labour
                                        Law</a>
                                    <a href="{{ route('finance') }}" class="dropdown-item">Banking, Finance &
                                        Investment Law</a>
                                    <a href="{{ route('energy') }}" class="dropdown-item">Energy, Oil & Gas, and
                                        Natural Resources Law</a>
                                    {{-- <a href="{{ route('criminal') }}" class="dropdown-item">Criminal Defence</a> --}}
                                    <a href="{{ route('immigration') }}" class="dropdown-item">Immigration Law & Global
                                        Mobility</a>
                                    <a href="{{ route('family') }}" class="dropdown-item">Family Law & Estate
                                        Planning</a>
                                    <a href="{{ route('corporate') }}" class="dropdown-item">Corporate, Commercial &
                                        Company Secretarial Services</a>
                                    <a href="{{ route('islamic') }}" class="dropdown-item">Islamic Banking and Finance
                                        Law</a>
                                </div>
                            </div>
                            <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                            <a href="{{ url('/blog') }}" class="nav-item nav-link">News and Resources</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                            {{-- <a href="{{ route('practice') }}" class="nav-item nav-link">Privacy Policy</a> --}}
                            {{-- <a href="{{ route('case-studies') }}" class="nav-item nav-link">Case Studies</a>  --}}


                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="{{ url('/appointment') }}">BOOK A CONSULTATION</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        <div class="container mt-4">
            <div>
                <!-- Floating WhatsApp Button -->
                <a href="https://wa.me/2348025713831" class="whatsapp-float" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i>
                </a>

            </div>

            {{-- This is where the content from other views will be injected --}}
            @yield('content')
        </div>


        <!-- Footer Start -->
        <div class="footer  text-white pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about text-center text-md-left">
                            <div class="logo mb-3">
                                <a href="{{ route('home') }}">
                                    <img src="img/logo.jpg" alt="Logo" class="logo-img" style="width: 60%;">
                                </a>
                            </div>
                            <p>
                                At Leam Legal Practice, we blend legal expertise with innovation,
                                offering practical and effective legal solutions tailored to the
                                unique needs of our clients. Our firm is built on trust, excellence,
                                and a relentless commitment to achieving results.
                            </p>
                        </div>
                    </div>

                    <!-- Services Section -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link text-center text-md-left">
                            <h2 class="text-uppercase">Practice Areas</h2>
                            <ul>
                                <li>Banking, Finance & Investment Law</li>
                                <li>Islamic Banking and Finance Law</li>
                                <li>Employment & Labour Law</li>
                                <li>Real Estate & Property Law</li>
                                <li>Technology, Intellectual Property & Data Protection Law</li>
                                <li>Sports and Entertainment Law</li>
                                <li>Regulatory Compliance & Government Relations</li>
                                <li>Litigation & Dispute Resolution</li>
                                <li>Corporate, Commercial & Company Secretarial Services</li>
                                <li>Energy, Oil & Gas, and Natural Resources Law</li>
                                <li>Family Law & Estate Planning</li>
                                <li>Immigration Law & Global Mobility</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact text-center text-md-left">
                            <h2 class="text-uppercase">Contact Us</h2>
                            <p><i class="fa fa-map-marker-alt mr-2"></i>1st Floor, L.A Ajayi Plaza, No. 99
                                Obafemi<br />
                                Awolowo Way, Ikeja, Lagos. Nigeria</p>
                            <p><i class="fa fa-phone-alt mr-2"></i>+234 802 571 3831</p>
                            <p><i class="fa fa-envelope mr-2"></i>contact@leamlegal.com</p>
                            <p><i class="fa-brands fa-whatsapp fa-solid mr-2"></i>+234 802
                                571
                                3831</p>


                                <div class="social">
                                    <a href="https://x.com/LeamLegal?t=7Tct0rKBe-btNLy9CCBmSA&s=09" class="text-white mx-2"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/share/1BYyf1zRHZ/" class="text-white mx-2"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/leam-legal/" class="text-white mx-2" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com/leamlegal?igsh=MXA2azhlM2tvMjJqOQ=="
                                        class="text-white mx-2" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <div class="footer-menu">
                            <a href="" class="text-white mx-2">Terms of Use</a>
                            <a href="{{ route('practice') }}" class="nav-item nav-link">Privacy Policy</a>
                        </div>
                        <p class="mt-3 mb-0">&copy; 2025 LeamLegal. All Rights Reserved.(Designed by HayWare Tech)</p>
                    </div>
                </div>
            </div>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Footer End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
            $(document).ready(function() {
                $('.dropdown-menu a').click(function() {
                    $('.navbar .show').removeClass('show'); // Closes any open dropdown
                });
            });
        </script>

        {{-- this is for the corousel on the homepage --}}

        <script>
            $(document).ready(function() {
                $('#carousel').carousel();
            });
        </script>
</body>

</html>
