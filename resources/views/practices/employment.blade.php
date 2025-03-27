@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5">
                <img src="{{ asset('img/employment.jpg') }}" alt="Employment Law" 
                     class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7">
                <h2 style="color: #AD8E00;">Employment & Labour Law</h2>
                <p>
                    We provide expert legal counsel on employment and labour-related matters, ensuring compliance with labour
                    laws and best HR practices for both employers and employees.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="mt-4">
            <h3 style="color: #AD8E00;">Our Services Include:</h3>
            <ul style="font-size: 16px; line-height: 1.6;">
                <li>Employment contracts & workplace policies</li>
                <li>Employee rights, benefits & termination matters</li>
                <li>Workplace discrimination & harassment claims</li>
                <li>Collective bargaining & industrial relations</li>
                <li>Labour law compliance</li>
            </ul>
        </div>
    </div>
@endsection
