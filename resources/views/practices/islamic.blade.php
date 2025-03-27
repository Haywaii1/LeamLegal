@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/islam.jpg') }}" alt="Islamic Banking Services" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7 mt-4 mt-md-0">
                <h2 style="color: #AD8E00;">Islamic Banking and Finance Law</h2>
                <p>
                    We provide expert legal advisory services in Islamic banking and finance, ensuring compliance with 
                    Shari’ah principles while facilitating ethical and interest-free financial transactions.
                </p>

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
    </div>
@endsection
