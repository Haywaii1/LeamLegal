@extends('layouts.app')

@section('content')
<div class="container">
    <div class="blog-detail">
        <h2>{{ $blog->title }}</h2>
        <div class="meta">
            <i class="fa fa-list-alt"></i> <a href="#">{{ $blog->category }}</a>
            <i class="fa fa-calendar-alt"></i> <p>{{ $blog->published_at->format('d-M-Y') }}</p>
        </div>
        <img src="{{ asset($blog->image) }}" alt="Blog">
        <p>{{ $blog->content }}</p>
    </div>
</div>
@endsection
