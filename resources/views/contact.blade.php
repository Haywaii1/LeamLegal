@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="contact-text">
                            <h2>Location</h2>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-phone-alt"></i>
                        <div class="contact-text">
                            <h2>Phone</h2>
                            <p>+012 345 67890</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                    <div>
                        <button class="btn" type="submit">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>Subscribe Our Newsletter</h2>
        </div>
        <div class="form">
            <input class="form-control" placeholder="Email here">
            <button class="btn">Submit</button>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-about">
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                    <h2>Services Areas</h2>
                    <a href="">Civil Law</a>
                    <a href="">Family Law</a>
                    <a href="">Business Law</a>
                    <a href="">Education Law</a>
                    <a href="">Immigration Law</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    <a href="">About Us</a>
                    <a href="">Practices</a>
                    <a href="">Attorneys</a>
                    <a href="">Case Studies</a>
                    <a href="">FAQs</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
@endsection
