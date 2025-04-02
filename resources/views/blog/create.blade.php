@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="color: #AD8E00">Create New Blog Article</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label" style="color: #AD8E00">Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label" style="color: #AD8E00">Category</label>
            <input type="text" id="category" name="category" class="form-control" placeholder="Category" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label" style="color: #AD8E00">Upload Image</label>
            <input style="color: #AD8E00" type="file" id="image" name="image" class="form-control" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label" style="color: #AD8E00">Published Date</label>
            <input type="date" id="published_at" name="published_at" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label" style="color: #AD8E00">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" placeholder="Content" required></textarea>
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #AD8E00">Submit Article</button>
    </form>
</div>
@endsection
