@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Page Header Start -->
<div class="section-header">
    <h2 style="color: #AD8E00;">Contact Us</h2>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="contact py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item d-flex align-items-center mb-4">
                        <i class="fa fa-map-marker-alt fa-2x mr-3" style="color: #AD8E00;"></i>
                        <div>
                            <h4 class="mb-1">Location</h4>
                            <p>1st Floor, L.A Ajayi Plaza, No. 99 Obafemi Awolowo Way, Ikeja, Lagos, Nigeria</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-4">
                        <i class="fa fa-phone-alt fa-2x mr-3" style="color: #AD8E00;"></i>
                        <div>
                            <h4 class="mb-1">Phone</h4>
                            <p>+234 802 571 3831</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center">
                        <i class="fa fa-envelope fa-2x mr-3" style="color: #AD8E00;"></i>

                        <div>
                            <h4 class="mb-1">Email</h4>
                            <p>contact@leamlegal.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex align-items-center">
                        <i class="fab fa-whatsapp fa-2x mr-3" style="color: #AD8E00;"></i>
                        <div>
                            <h4 class="mb-1">WhatsApp</h4>
                            <p>+234 802 571 3831</p> 
                        </div>
                    </div>


                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="p-4 bg-light rounded shadow">
                    <h4 class="text-center mb-4" style="color: #AD8E00;">Contact Us</h4>
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
                            <textarea class="form-control" name="message" placeholder="Message" rows="4" required></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn text-white" type="submit" style="background-color: #AD8E00;">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
