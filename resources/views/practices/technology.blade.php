@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/technology.jpg') }}" alt="Corporate Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Technology Law</h2>
                <p>
                    In today’s digital economy, businesses must navigate complex legal landscapes in technology, data protection,
                    and intellectual property. At Leam Legal Practice, we provide comprehensive legal services to safeguard
                    proprietary assets, ensure regulatory compliance, and mitigate cybersecurity risks.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Services Include</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Intellectual Property Protection</li>
                <li>Technology Contracts & Licensing</li>
                <li>Data Protection & Privacy Compliance</li>
                <li>E-commerce & Fintech Regulations</li>
            </ul>
        </div>

        <div class="mt-3">
            <p>
                We help businesses and individuals navigate the intersection of technology, intellectual property, and data
                privacy, ensuring they remain compliant while leveraging digital innovation.
            </p>
        </div>
    </div>
@endsection
