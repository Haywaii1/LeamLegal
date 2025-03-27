@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/estate.jpg') }}" alt="Corporate Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Real Estate & Property Law</h2>
                <p>
                    Our real estate practice provides end-to-end legal support for property transactions, investments, and
                    disputes. Whether you are an individual, developer, or corporation, we ensure that your real estate
                    interests are legally protected.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h2 style="color: #AD8E00;">Our Services</h2>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Property acquisition, leasing & sales agreements</li>
                <li>Title verification & due diligence</li>
                <li>Landlord-tenant disputes & eviction proceedings</li>
                <li>Property development & real estate financing</li>
                <li>Real estate litigation & dispute resolution</li>
            </ul>
        </div>
    </div>
@endsection
