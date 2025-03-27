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

        <!-- Islamic Banking Section -->
        <div class="mt-5">
            <h2 style="color: #AD8E00;">Islamic Banking and Finance Law</h2>
            <p>We provide expert legal advisory services in Islamic banking and finance, ensuring compliance with
                Shari’ah principles while facilitating ethical and interest-free financial transactions.</p>

            <h3 style="color: #AD8E00;">Our Services Include:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Structuring Shari’ah-compliant financial products (Murabaha, Ijara, Sukuk, Takaful, etc.)</li>
                <li>Advising on Islamic corporate financing and investment structures</li>
                <li>Ensuring regulatory compliance with Islamic finance laws</li>
                <li>Drafting and reviewing Islamic finance contracts</li>
                <li>Legal support for Islamic financial institutions</li>
            </ul>
        </div>
    </div>
@endsection
