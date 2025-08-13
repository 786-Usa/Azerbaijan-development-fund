@props([
    'stats' => [],
    'sources' => null,
    'background' => '#f8f9fa',
    'textAlign' => 'text-center text-md-start',
    'spacing' => 'px-5 py-5',
    'titleClass' => 'fw-bold display-4',
    'descriptionClass' => 'fw-semibold mb-0',
])

@php
    // Calculate column class based on number of stats
    $columnClass = match(count($stats)) {
        1 => 'col-12 col-md-12',
        2 => 'col-12 col-md-6',
        3 => 'col-12 col-md-4',
        4 => 'col-12 col-md-3',
        5 => 'col-12 col-md-2',
        default => 'col-12 col-md'
    };
@endphp

<div class="container-fluid {{ $spacing }}" style="background-color: {{ $background }};">
    <div class="row {{ $textAlign }}">
        @forelse($stats as $stat)
            <div class="{{ $columnClass }} mb-4 mb-md-0">
                <h1 class="{{ $titleClass }}">{{ $stat['number'] ?? 'N/A' }}</h1>
                <p class="{{ $descriptionClass }}">{{ $stat['description'] ?? 'Stat description' }}</p>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No statistics available</p>
            </div>
        @endforelse
    </div>

    @if($sources)
        <div class="mt-4 mb-4">
            <p class="small text-muted">{!! $sources !!}</p>
        </div>
    @endif
</div>