@extends('app')

@section('content')
<div class="container">
    <h1 class="mb-3">{{ $post->title }}</h1>
     <p class="text-muted mb-3">
        Published on {{ $post->created_at->format('F j, Y') }}
    </p>
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="{{ $post->title }}">
    @endif
    <div>
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">← Back to Blog</a>
</div>
@endsection
