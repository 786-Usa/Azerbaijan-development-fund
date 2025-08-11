@props([
    'title' => 'Explore More',
    'description' => '',
    'items' => [] // array of ['text' => '', 'link' => '']
])

<div class="container py-5">
    <div class="row align-items-start lh-base py-5">
        
        <!-- Left Column -->
        <div class="col-md-6">
            <h1 class="fs-1">{{ $title }}</h1>
            <p>{{ $description }}</p>
        </div>

        <!-- Right Column -->
        <div class="col-md-6 d-flex flex-column align-items-md-end gap-2 mt-4 mt-md-0 lh-base">
            @foreach($items as $item)
                <a href="{{ $item['link'] ?? '#' }}" 
                   class="d-flex justify-content-between align-items-center w-100 border-bottom border-secondary pb-2 text-decoration-none text-dark right-item-hover">
                    <span>{{ $item['text'] }}</span>
                    <svg class="bi flex-shrink-0" width="16" height="16" fill="currentColor">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Bootstrap Icons Sprite -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 
            0 0 1 .708-.708l4 4a.5.5 0 0 1 
            0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 
            8.5H1.5A.5.5 0 0 1 1 8z"/>
    </symbol>
</svg>

@push('styles')
<style>
    .right-item-hover:hover {
        background-color: #ffcdcdfd; /* Light gray background */
        color: #000;
        transition: background-color 0.3s ease;
    }
</style>
@endpush




{{-- original code:
<div class="container py-5">
  <div class="row align-items-start lh-base py-5">
    <!-- Left Column -->
    <div class="col-md-6">
      <h1 class="fs-1">Explore More</h1>
      <p>
       Learn more about life at Goldman Sachs and our impact on the communities in which we live and work.
      </p>
    </div>

    <!-- Right Column -->
    <div class="col-md-6 d-flex flex-column align-items-md-end gap-2 mt-4 mt-md-0 lh-base">
      <div class="container-fluid border-bottom">
    

<p class="mb-0 border-bottom border-secondary pb-2">
        Our Proposal and Purpose
        <a href="#" class="icon-link icon-link-hover ">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
      </div>
      <div class="container-fluid border-bottom">
    

<p class="mb-0 border-bottom border-secondary pb-2">
        Azerbaijan Research Portal
        <a href="#" class="icon-link icon-link-hover">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
      </div>
       <div class="container-fluid border-bottom">
    

<p class="mb-0 border-bottom border-secondary pb-2">
        Career in Global Research Investment
        <a href="#" class="icon-link icon-link-hover">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
      </div>
       <div class="container-fluid border-bottom">
    

<p class="mb-0 border-bottom border-secondary pb-2">
        Investor Relations
        <a href="#" class="icon-link icon-link-hover">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Icons Sprite -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 
      0 0 1 .708-.708l4 4a.5.5 0 0 1 
      0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 
      8.5H1.5A.5.5 0 0 1 1 8z"/>
  </symbol>
</svg> --}}