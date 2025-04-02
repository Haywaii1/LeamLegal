@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Banking & Finance Section -->
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/banking.jpg') }}" alt="Banking Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Banking, Finance & Investment Law</h2>
                <p>We advise financial institutions, investors, and businesses on complex banking and financial transactions 
                   to ensure compliance, security, and risk mitigation.</p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Services Include:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Loan agreements & credit facility structuring</li>
                <li>Debt recovery & enforcement of security interests</li>
                <li>Securities, investment & capital markets advisory</li>
                <li>Anti-money laundering (AML) compliance & financial regulations</li>
                <li>Corporate financing & project finance</li>
            </ul>
        </div>

        
    </div>
@endsection
