@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header text-center mb-4">
        <h2 style="color: #AD8E00">News And Resources</h2>
    </div>

    <div class="row blog-page g-4 justify-content-center">
        @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 blog-item d-flex flex-column p-3 shadow-sm rounded">
                <img src="{{ asset($blog->image) }}" alt="Blog" class="img-fluid rounded mb-3">

                <h3 style="color: #AD8E00" class="text-center">{{ $blog->title }}</h3>

                <div class="meta d-flex justify-content-between align-items-center text-muted small mb-2">
                    <span>
                        <i class="fa fa-list-alt me-1"></i>
                        <a href="#" class="text-decoration-none">{{ $blog->category }}</a>
                    </span>
                    <span>
                        <i class="fa fa-calendar-alt me-1"></i>
                        {{ $blog->published_at->format('d-M-Y') }}
                    </span>
                </div>

                <p class="mb-3">{{ Str::limit($blog->content, 100) }}</p>

                <a class="btn btn-primary mt-auto align-self-start" href="{{ route('blog.show', $blog->id) }}" style="background-color: #AD8E00">
                    Read More <i class="fa fa-angle-right"></i>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
