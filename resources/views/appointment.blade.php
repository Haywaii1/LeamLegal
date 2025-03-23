@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mt-4" style="color: #AD8E00;">Book an Appointment</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input type="datetime-local" id="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message (Optional)</label>
            <textarea id="message" name="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn w-100" style="background-color: #AD8E00; color: #fff; border: none;">
            Book Appointment
        </button>
    </form>
</div>
@endsection
