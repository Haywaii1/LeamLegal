@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/corporate.jpg') }}" alt="Corporate Services" class="img-fluid rounded" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00; font-size: 28px;">Corporate, Commercial & Company Secretarial Services</h2>
                <p style="font-size: 16px; line-height: 1.6;">
                    We provide comprehensive legal support to businesses, ensuring compliance, strategic growth, and effective
                    risk management. Our corporate and commercial law practice guides corporations, partnerships, and startups
                    through complex legal and regulatory landscapes, while our company secretarial services help businesses
                    meet statutory and governance requirements seamlessly.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00; font-size: 24px;">Our Services Include:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Company incorporation, structuring & regulatory compliance</li>
                <li>Mergers, acquisitions & corporate restructuring</li>
                <li>Contract negotiation, drafting & enforcement</li>
                <li>Corporate governance advisory & compliance audits</li>
                <li>Investment structuring & joint ventures</li>
                <li>Shareholder agreements & corporate dispute resolution</li>
                <li>Filing of statutory returns & corporate filings</li>
                <li>Board resolutions, minutes & shareholder meetings coordination</li>
                <li>Advisory on directors' duties & fiduciary obligations</li>
                <li>Business name & trademark registrations</li>
            </ul>
            <p style="font-size: 16px; line-height: 1.6;">
                We combine deep legal expertise with a proactive approach to help businesses thrive while ensuring full legal
                and regulatory compliance.
            </p>
        </div>
    </div>
@endsection
