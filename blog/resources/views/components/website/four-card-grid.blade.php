@props([
    'cards' => [],
    'title' => null,
    'cardClass' => '',
    'gridGap' => 'g-3',
    'defaultLinkText' => 'Learn more',
    'columns' => [
        'xl' => 3, // 3 = 4 columns (12/3)
        'lg' => 6,
        'md' => 6
    ],
    'cardBodyClass' => '',
    'titleClass' => '',
    'textClass' => '',
    'linkClass' => ''
])

<div class="container mb-5">
    @if($title)
        <h3 class="text-center mb-4 {{ $titleClass }}">{{ $title }}</h3>
    @endif
    
    <div class="row {{ $gridGap }}">
        @foreach($cards as $index => $card)
            <div class="col-xl-{{ $columns['xl'] }} col-lg-{{ $columns['lg'] }} col-md-{{ $columns['md'] }}">
                <div class="card h-100 {{ $cardClass }} @if(isset($card['borderColor'])) border-{{ $card['borderColor'] }} @endif">
                    @if(isset($card['image']))
                        <img src="{{ $card['image'] }}" class="card-img-top" alt="{{ $card['imageAlt'] ?? 'Card image ' . ($index + 1) }}">
                    @endif
                    
                    <div class="card-body {{ $cardBodyClass }}">
                        @if(isset($card['icon']))
                            <div class="mb-3">
                                <i class="{{ $card['icon'] }} fa-2x"></i>
                            </div>
                        @endif
                        
                        @if(isset($card['title']))
                            <h5 class="card-title {{ $titleClass }}">{{ $card['title'] }}</h5>
                        @endif
                        
                        @if(isset($card['text']))
                            <p class="card-text {{ $textClass }}">
                                {{ $card['text'] }}
                                @if(isset($card['fullText']) && strlen($card['text']) < strlen($card['fullText']))
                                    <span class="d-block mt-2">
                                        <a href="#" class="read-more-link small" 
                                           data-fulltext="{{ $card['fullText'] }}">
                                            Read more
                                        </a>
                                    </span>
                                @endif
                            </p>
                        @endif
                        
                        @if(isset($card['link']))
                            <a href="{{ $card['link'] }}" class="card-link {{ $linkClass }}">
                                {{ $card['linkText'] ?? $defaultLinkText }}
                                @if(isset($card['linkIcon']))
                                    <i class="{{ $card['linkIcon'] }} ms-1"></i>
                                @endif
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
    .read-more-link {
        cursor: pointer;
        color: var(--bs-primary);
        text-decoration: none;
        transition: all 0.2s;
    }
    .read-more-link:hover {
        text-decoration: underline;
    }
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.read-more-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const fullText = this.getAttribute('data-fulltext');
                this.closest('.card-text').innerHTML = fullText;
            });
        });
    });
</script>
@endonce