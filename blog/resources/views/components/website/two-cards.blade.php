@props([
    'sectionTitle' => null,
    'heading' => null,
    'headingSize' => '2rem', // default size if not provided
    'cards' => [],
])

<div class="container-fluid px-5 mt-5">
    
    {{-- Section Title --}}
    @if($sectionTitle)
        <h6 class="text-uppercase">{{ $sectionTitle }}</h6>
    @endif

    {{-- Heading --}}
    @if($heading)
        <h1 class="mt-3 fw-light" style="font-size: {{ $headingSize }};">
            {{ $heading }}
        </h1>
    @endif

    <div class="row mt-4 g-4">
        @foreach($cards as $card)
            <div class="col-lg-6">
                <div class="card h-100 border-0">
                    <img class="card-img-top rounded-0" src="{{ $card['image'] }}" alt="Card image">
                    <div class="card-body px-0">
                        <h5 class="card-title">{{ $card['title'] }}</h5>
                        <p class="card-text">{{ $card['text'] }}</p>
                        <a href="{{ $card['link'] }}" class="text-dark fs-6">Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Only for mobile styling --}}
<style>
@media (max-width: 768px) {
    .row { --bs-gutter-x: 0; }
    .container-fluid.px-5 { padding-left: 1rem !important; padding-right: 1rem !important; }
    .row > [class*='col-'] { flex: 0 0 100%; max-width: 100%; }
    .card-img-top { width: 100%; height: auto; }
}
</style>
