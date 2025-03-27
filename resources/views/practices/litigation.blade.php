@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/litigation.jpg') }}" alt="Litigation Services" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Heading & Intro Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00; font-size: 28px;">Litigation & Dispute Resolution</h2>
                <p style="font-size: 16px; line-height: 1.6;">
                    We have a strong track record of successfully representing clients in complex disputes before courts,
                    tribunals, and arbitration panels. Our litigation and dispute resolution team is skilled in handling
                    high-stakes commercial and civil litigation.
                </p>
            </div>
        </div>

        <!-- Expertise Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00; font-size: 24px;">Our Expertise Covers:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Commercial litigation & contract disputes</li>
                <li>Debt recovery & enforcement of judgments</li>
                <li>Employment & labour disputes</li>
                <li>Land & property disputes</li>
                <li>Intellectual property litigation</li>
                <li>Breach of fiduciary duty & corporate fraud litigation</li>
                <li>Fundamental human rights enforcement</li>
            </ul>
        </div>

        <!-- ADR Section -->
        <div class="mt-3">
            <p style="font-size: 16px; line-height: 1.6;">
                We also offer <strong>Alternative Dispute Resolution (ADR)</strong> services, including mediation and arbitration, 
                to help clients achieve <strong>efficient, cost-effective, and amicable</strong> solutions.
            </p>
        </div>
    </div>
@endsection
