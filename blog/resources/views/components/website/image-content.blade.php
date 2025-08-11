@props([
    'imageUrl' => '',
    'imageAlt' => '',
    'subtitle' => '',
    'title' => '',
    'content' => '',
    'buttonText' => '',
    'buttonLink' => '#',
    'reverse' => false,
    'minHeight' => '450px',
    'contentBgColor' => '#f4f4f4',
    'contentColor' => '#000',
    'fontSize' => '1rem',
    'border' => true
])

<div class="container my-5">
    <div class="row g-0 align-items-stretch internship-section" style="min-height: {{ $minHeight }}; @if($border) border: 1px solid #ddd; @endif">
        <!-- Image Column -->
        <div class="col-md-6 {{ $reverse ? 'order-md-1' : '' }}">
            <div class="internship-image h-100">
                <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" class="h-100 w-100 object-fit-cover">
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-md-6 d-flex">
            <div class="internship-content my-auto px-5 py-4" style="background-color: {{ $contentBgColor }}; color:{{$contentColor}}; font-size:{{$fontSize}}; height: 100%;">
                @if($subtitle)
                    <h6 class="text-uppercase text-muted">{{ $subtitle }}</h6>
                @endif
                
                <h3 class="mb-3">{{ $title }}</h3>
                
                <p class="mb-3">{{ $content }}</p>
                
                @if($buttonText)
                    <a href="{{ $buttonLink }}" class="btn btn-dark mt-2">
                        {{ $buttonText }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>

@once
<style>
    .internship-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    body {
        font-family: "Ubuntu", sans-serif;
    }
    
    /* .container {
        padding-left: 10px !important;
    } */
</style>
@endonce