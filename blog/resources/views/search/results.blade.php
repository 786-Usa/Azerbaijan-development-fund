@extends('app')

@section('content')
<div class="container py-5">
    <h2>Search Results for "{{ $query }}"</h2>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul class="list-group mt-4">
            @foreach($results as $result)
                <li class="list-group-item">
                    <h5>
                        <a href="{{ $result['url'] }}">{{ $result['title'] }}</a>
                    </h5>
                    <p>{{ Str::limit($result['summary'], 150) }}</p>
                    <small class="text-muted">From: {{ ucfirst($result['type']) }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
