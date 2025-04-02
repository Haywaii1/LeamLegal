@extends('layouts.app')

@section('content')

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header">
                <h2 style="color: #AD8E00;">Meet Our Team</h2>
            </div>
            <div class="row">
                @php
                    $teamMembers = [
                                ['name' => 'Luqman Abimbola Eyinade', 'role' => 'Lead Partner', 'image' => 'img/bimbo.jpg', 'profile' => url('/profile/luqman')],
                                ['name' => 'Morisola Alaba Akinlabi', 'role' => 'Partner', 'image' => 'img/moji.jpg', 'profile' => url('/profile/morisola')],
                                ['name' => 'Waliu Abiodun Bello', 'role' => 'Partner', 'image' => 'img/waliu.jpg', 'profile' => url('/profile/waliu')],
                                ['name' => 'Ridwan Sharomi', 'role' => 'Associate', 'image' => 'img/ridwan.jpg', 'profile' => url('/profile/ridwan')],
                                ['name' => 'Aliyu Akinwunmi Akano', 'role' => 'Associate', 'image' => 'img/aliyu.jpg', 'profile' => url('/profile/aliyu')]
                            ];
                @endphp

<style>
    .team-img img {
        width: 100%; /* Ensure images fill the container */
        height: 300px; /* Adjust height for uniform display */
        object-fit: cover; /* Maintain aspect ratio and crop if necessary */
        border-radius: 10px; /* Optional: Rounded corners */
    }
</style>

<div class="container">
    <div class="row">
        @foreach ($teamMembers as $index => $member)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-item text-center">
                    <div class="team-img">
                        <a href="{{ $member['profile'] }}">
                            <img src="{{ asset($member['image']) }}" alt="Team Image" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-text">
                        <h2>{{ $member['name'] }}</h2>
                        <p>{{ $member['role'] }}</p>
                    </div>
                </div>
            </div>
            @if ($index == 2)
                </div><div class="row justify-content-center">
            @endif
        @endforeach
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection

