@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/compliance.jpg') }}" alt="Regulatory Compliance Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Content Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Regulatory Compliance & Government Relations</h2>
                <p>
                    Navigating the complex legal and regulatory landscape is crucial for businesses and organizations. 
                    We provide expert legal support in ensuring compliance with corporate, financial, environmental, 
                    and sector-specific regulations.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Services Include:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Regulatory compliance audits & legal risk assessments</li>
                <li>Corporate filings & regulatory reporting</li>
                <li>Licensing & permit applications</li>
                <li>Engagement with regulatory bodies & government agencies</li>
            </ul>
        </div>
    </div>
@endsection
