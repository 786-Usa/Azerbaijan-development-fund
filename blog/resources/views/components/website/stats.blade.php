@props([
    'stats' => [],
    'backgroundColor' => '#f8f8fa',
    'minHeight' => '300px',
    'footnotes' => null,
    'columns' => '3', // 2, 3, 4, or 6
    'valueSize' => 'display-3',
    'labelSize' => 'h5'
])

@php
    $columnClass = match($columns) {
        '2' => 'col-md-6',
        '4' => 'col-md-3',
        '6' => 'col-md-2',
        default => 'col-md-4'
    };
@endphp

<div class="container-fluid mx-0 my-5 d-flex align-items-center" 
     style="background-color: {{ $backgroundColor }}; min-height: {{ $minHeight }};">
    <div class="row text-center w-100">
        @foreach($stats as $stat)
        <div class="{{ $columnClass }}">
            <h1 class="fw-bold {{ $valueSize }}">{{ $stat['value'] ?? '' }}</h1>
            <h5 class="fw-bold {{ $labelSize }}">
                {{ $stat['label'] ?? '' }}
                @isset($stat['sup'])<sup>{{ $stat['sup'] }}</sup>@endisset
            </h5>
        </div>
        @endforeach
    </div>
</div>

@if($footnotes)
<div class="container mb-4">
    <p class="small text-muted">
        {{ $footnotes }}
    </p>
</div>
@endif