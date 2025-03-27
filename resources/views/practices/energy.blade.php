@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Energy Law Section -->
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/energy.jpg') }}" alt="Energy & Natural Resources" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Energy, Oil & Gas, and Natural Resources Law</h2>
                <p>We provide specialised legal advisory services to stakeholders in the energy, oil & gas, and natural
                   resources sectors, helping them navigate regulatory frameworks, commercial transactions, and dispute
                   resolution.</p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Expertise Includes:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Energy project development & financing</li>
                <li>Oil & gas exploration, production, and distribution contracts</li>
                <li>Regulatory compliance & environmental law advisory</li>
                <li>Renewable energy projects & sustainability compliance</li>
                <li>Litigation & arbitration in the energy sector</li>
            </ul>
        </div>
    </div>
@endsection
