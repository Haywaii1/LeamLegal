@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/sport.jpg') }}" alt="Corporate Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Sport and Entertainment Law</h2>
                <p>
                    We provide specialised legal services to clients in the sports and entertainment industries, ensuring 
                    compliance, protecting intellectual property, and securing commercial interests. Our expertise extends to 
                    regulatory compliance, contract negotiation, dispute resolution, and corporate structuring within these 
                    dynamic sectors.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Services Include</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Legal Advisory for Football Clubs and Athletes</li>
                <li>Sports Arbitration and Dispute Resolution</li>
                <li>Sponsorship, Licensing, and Endorsement Agreements</li>
                <li>Intellectual Property Protection</li>
                <li>Entertainment Contracts and Talent Representation</li>
                <li>Media and Digital Rights Management</li>
                <li>Corporate Structuring and Regulatory Compliance</li>
            </ul>
        </div>

        <div class="mt-3">
            <p>
                With extensive industry experience, we offer strategic legal solutions to sports and entertainment 
                professionals, helping them navigate complex legal challenges while maximizing opportunities for growth.
            </p>
        </div>
    </div>
@endsection
