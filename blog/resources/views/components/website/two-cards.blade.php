@props([
    'sectionTitle' => null,
    'heading' => null,
    'headingSize' => '2rem', // default size if not provided
    'cards' => [],
    'sectionTitleSize' => '1.5rem' // default size if not provided
])

<div class="container-fluid px-5 mt-5">
    
    {{-- Section Title --}}
    @if($sectionTitle)
        <h6 class="text-uppercase" style="font-size: {{ $sectionTitleSize }};">{{ $sectionTitle }}</h6>
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



{{-- <x-website.two-cards 
    sectionTitle="Our Firm"
    heading="We aspire to be the world’s most exceptional financial institution."
    headingSize="7vw"
    :cards="[
        [
            'image' => 'https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg',
            'title' => 'Sale of Informatica to Salesforce for ~$8B',
            'text' => 'Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.',
            'link' => '#'
        ],
        [
            'image' => 'https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg',
            'title' => 'World\'s Best Investment Bank for M&A by Euromoney',
            'text' => 'Euromoney has named Goldman Sachs as the World\'s Best Investment Bank for M&A in the annual Awards for Excellence.',
            'link' => '#'
        ]
    ]"
/>--}}