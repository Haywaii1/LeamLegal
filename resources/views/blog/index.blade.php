@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header">
        <h2>Latest From Blog</h2>
    </div>
        <div class="row blog-page g-4 justify-content-center"> 
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item d-flex flex-column">
                    <img src="{{ asset($blog->image) }}" alt="Blog" class="img-fluid">
                    <h3>{{ $blog->title }}</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="#">{{ $blog->category }}</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>{{ $blog->published_at->format('d-M-Y') }}</p>
                    </div>
                    <p>{{ Str::limit($blog->content, 100) }}</p>
                    <a class="btn mt-auto" href="{{ route('blog.show', $blog->id) }}">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            @endforeach
        </div>
        
    <div class="row">
        <div class="col-12">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
