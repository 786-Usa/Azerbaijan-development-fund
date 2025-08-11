@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-lg" style="background-color: #f8f9fa;">
                <div class="card-header bg-white py-3 border-bottom" style="border-bottom: 2px solid #e9ecef !important;">
                    <h2 class="fw-bold mb-0">
                        <i class="bi bi-pencil-square me-2 text-primary"></i>Edit Post
                    </h2>
                </div>

                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold">
                                <i class="bi bi-type-h1 me-1 text-primary"></i>Title
                            </label>
                            <input type="text" 
                                   name="title" 
                                   class="form-control form-control-lg shadow-sm border-0" 
                                   value="{{ old('title', $post->title) }}" 
                                   required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label fw-semibold">
                                <i class="bi bi-text-paragraph me-1 text-primary"></i>Content
                            </label>
                            <textarea name="content" 
                                      class="form-control shadow-sm border-0" 
                                      rows="6" 
                                      required>{{ old('content', $post->content) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label fw-semibold">
                                <i class="bi bi-image me-1 text-primary"></i>Image
                            </label>
                            @if($post->image)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $post->image) }}" 
                                         class="img-thumbnail shadow-sm" 
                                         style="max-width: 200px;" 
                                         alt="Current Image">
                                </div>
                            @endif
                            <input type="file" 
                                   name="image" 
                                   class="form-control shadow-sm border-0">
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('posts.index') }}" 
                               class="btn btn-light shadow-sm px-4">
                                <i class="bi bi-x-circle me-1"></i>Cancel
                            </a>
                            <button type="submit" 
                                    class="btn btn-primary shadow-sm px-4">
                                <i class="bi bi-check-circle me-1"></i>Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
