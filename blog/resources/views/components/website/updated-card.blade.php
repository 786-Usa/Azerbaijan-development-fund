@props([
    'sectionHeading' => null,
    'sectionSubheading' => null,
    'cards' => [],
    'titleSize' => null, // Optional: custom heading size
    'mobileFullWidth' => false, // Optional: stack cards full width on mobile
    'sectionSubheadingSize' => null // Optional: custom subheading size
])

<div class="container-fluid px-5 mt-5 {{ $mobileFullWidth ? 'mobile-full' : '' }}">
    @if($sectionSubheading)
        <h6 class=" {{ $sectionSubheadingSize }}">{{ $sectionSubheading }}</h6>
    @endif

    @if($sectionHeading)
        <h1 
            class="mt-3 fw-light {{ $titleSize }}" 
            {{-- @if($titleSize) style="font-size: {{ $titleSize }};" @endif --}}
        >
            {{ $sectionHeading }}
        </h1>
    @endif

    <div class="row mt-4 g-4">
        @foreach($cards as $card)
            <div class="col-lg-4">
                <div class="card h-100 border-0">
                    @if(!empty($card['image']))
                        <img class="card-img-top rounded-0" src="{{ $card['image'] }}" alt="Card image">
                    @endif
                    <div class="card-body px-0">
                        @if(!empty($card['title']))
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                        @endif
                        @if(!empty($card['text']))
                            <p class="card-text">{{ $card['text'] }}</p>
                        @endif
                        @if(!empty($card['link']))
                            <a href="{{ $card['link'] }}" class="text-dark fs-6">
                                {{ $card['linkText'] ?? 'Learn More' }}
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
    /* Default heading size */
    .pixels {
        font-size: 7vw;
    }
    
    @media (max-width: 768px) {
        .container-fluid.px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        
        .card-img-top {
            width: 100%;
            height: auto;
        }
        
        /* Smaller heading for mobile */
        .pixels {
            font-size: 2.5rem;
        }
        
        /* If mobileFullWidth is enabled, stack cards */
        .mobile-full .row > [class*='col-'] {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
@endonce
