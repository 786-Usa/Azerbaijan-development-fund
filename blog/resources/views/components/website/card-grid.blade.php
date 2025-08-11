@props([
    'cards' => [],
    'title' => null,
    'cardClass' => '',
    'gridClass' => 'g-4',
    'imagePosition' => 'top', // 'top' or 'background'
    'columns' => '3', // Default to 3-column layout
    'defaultLinkText' => 'Learn more'
])

<div class="container mb-5">
    @if($title)
        <h3 class="text-center mb-4">{{ $title }}</h3>
    @endif
    
    <div class="row {{ $gridClass }}">
        @foreach($cards as $card)
            <div class="col-lg-4 col-md-6 border">
                <div class="card h-100 {{ $cardClass }} @if(isset($card['image']) && $imagePosition === 'background') text-white @endif">
                    @if(isset($card['image']) && $imagePosition === 'top')
                        <img src="{{ $card['image'] }}" class="card-img-top" alt="{{ $card['imageAlt'] ?? '' }}">
                    @endif
                    
                    @if(isset($card['image']) && $imagePosition === 'background')
                        <div class="card-img-overlay-overlay"></div>
                        <img src="{{ $card['image'] }}" class="card-img" alt="{{ $card['imageAlt'] ?? '' }}">
                    @endif
                    
                    <div class="card-body position-relative">
                        @if(isset($card['title']))
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                        @endif
                        
                        @if(isset($card['text']))
                            <p class="card-text">{{ $card['text'] }}</p>
                        @endif
                        
                        @if(isset($card['link']))
                            <a href="{{ $card['link'] }}" 
                               class="card-link @if(isset($card['image']) && $imagePosition === 'background') text-white @endif">
                                {{ $card['linkText'] ?? $defaultLinkText }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@once
<style>
    .card-img-overlay-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .card-img {
        height: 100%;
        object-fit: cover;
    }
    .position-relative {
        position: relative;
        z-index: 2;
    }
    /* Responsive behavior */
    @media (max-width: 767.98px) {
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
@endonce