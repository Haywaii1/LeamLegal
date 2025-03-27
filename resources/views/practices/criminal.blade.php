@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/criminal.jpg') }}" alt="Criminal Defence" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Criminal Defence</h2>
                <p>
                    We provide strategic legal representation for individuals and businesses facing criminal investigations 
                    and prosecutions. Our dispute team is skilled in handling complex and high-stakes cases, ensuring that 
                    the interests of our clients are protected throughout the legal process.
                </p>
                <p>
                    Our approach is proactive and meticulous, involving early intervention, strategic negotiations, and, where 
                    necessary, robust courtroom advocacy. We work closely with clients to build strong defence strategies, 
                    leveraging legal expertise, forensic analysis, and investigative resources to challenge allegations 
                    effectively.
                </p>
                <p>
                    Whether defending against financial crimes, corporate fraud, cyber offenses, or regulatory breaches, we 
                    provide discreet, comprehensive, and results-driven legal solutions. Understanding the profound impact 
                    criminal charges can have on reputations, businesses, and personal freedom, we ensure that every case is 
                    handled with professionalism, discretion, and commitment to achieving the best possible outcome.
                </p>
            </div>
        </div>
    </div>
@endsection
