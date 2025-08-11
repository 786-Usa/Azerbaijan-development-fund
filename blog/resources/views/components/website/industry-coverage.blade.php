@props([
    'backgroundImage' => '/images/corporate-Dubai-42-scaled.jpg',
    'title' => 'Industry Coverage',
    'content' => 'We serve clients across a wide range of industries, providing sector-specific expertise, advice and solutions.',
    'linkText' => 'Learn More',
    'linkUrl' => '#',
    'reverse' => false,
    'minHeight' => '100vh',
    'contentBoxWidth' => '400px',
    'contentBoxPadding' => '40px',
    'titleFontSize' => '2.5rem',
    'titleColor' => '#333',
    'contentFontSize' => '1rem',
    'contentLineHeight' => '1.6',
    'linkColor' => 'text-dark'
])

<div class="container-fluid special py-5 d-flex align-items-center @if($reverse) justify-content-end @endif" 
     style="background-image: url('{{ $backgroundImage }}'); min-height: {{ $minHeight }};">
    <div class="content-box mx-3" 
         style="max-width: {{ $contentBoxWidth }}; padding: {{ $contentBoxPadding }}; background-color: white;">
        <h2 class="mb-4 fw-normal" style="font-size: {{ $titleFontSize }}; color: {{ $titleColor }};">
            {{ $title }}
        </h2>
        <p class="mb-4 text-muted" style="font-size: {{ $contentFontSize }}; line-height: {{ $contentLineHeight }};">
            {{ $content }}
        </p>
        <a href="{{ $linkUrl }}" class="{{ $linkColor }} text-decoration-underline">
            {{ $linkText }}
        </a>
    </div>
</div>

@once
<style>
    .special {
        background-size: cover;
        background-position: center;
        width: 100%;
    }
    
    @media (max-width: 768px) {
        .special {
            min-height: 80vh !important;
            text-align: center;
        }
        .content-box {
            margin: 0 auto !important;
            padding: 30px !important;
        }
    }
</style>
@endonce