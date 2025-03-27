@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/family.jpg') }}" alt="Immigration Law & Global Mobility" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Immigration Law & Global Mobility</h2>
                <p>
                    Our immigration law practice provides strategic legal solutions for individuals, businesses, and 
                    organisations navigating complex immigration processes. We assist clients with employment-based and 
                    investor visas, permanent residency, citizenship applications, family reunification, and business 
                    immigration.
                </p>
                <p>
                    We work closely with corporations to facilitate global mobility, ensuring seamless relocation of 
                    expatriates, compliance with immigration regulations, and efficient processing of work permits and 
                    residency status. With a deep understanding of both Nigerian and international immigration frameworks, 
                    we help clients achieve their immigration goals with precision and efficiency.
                </p>
            </div>
        </div>
    </div>
@endsection
