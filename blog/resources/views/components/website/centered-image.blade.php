@props([
    'imageSrc' => '/images/default.jpg',
    'imageAlt' => '',
    'imageWidth' => null, // Don't set fixed width by default
    'imageMaxWidth' => '100%', // Responsive constraint
    'textSize' => 'base',
    'contentMaxWidth' => '800px', 
    'verticalPadding' => 'py-5'
])

<div class="container {{ $verticalPadding }}">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center" style="max-width: {{ $contentMaxWidth }};">
            <!-- Image container with responsive constraints -->
            <div class="d-flex justify-content-center mb-4 px-2">
                <img src="{{ $imageSrc }}" 
                     alt="{{ $imageAlt }}" 
                     class="img-fluid"
                     style="@if($imageWidth) width: {{ $imageWidth }}; @endif max-width: {{ $imageMaxWidth }}; height: auto;"
                     loading="lazy">
            </div>
            
            <!-- Text content -->
            <div class="px-3 px-md-0">
                <p class="text-center m-0 @if($textSize === 'sm') fs-6 @elseif($textSize === 'lg') fs-4 @else fs-5 @endif">
                    {{ $slot }}
                </p>
            </div>
        </div>
    </div>
</div>




{{-- When to Use Fixed Width vs Max-Width:
Use Fixed Width (imageWidth) ONLY when:

html
imageWidth="600px" imageMaxWidth="100%"
You need exact dimensions for special cases

Images are precisely cropped to that size

Use Max-Width (Recommended):

html
imageMaxWidth="600px"
For normal responsive behavior

When image should shrink on small screens

Most common use case --}}