@props([
    'title' => '',
    'content' => '',
    'buttonText' => null,
    'buttonLink' => null,
    'minHeight' => '300px',
    'titleFontSize' => null, // Deprecated - use size classes instead
    'titleFontFamily' => "'Georgia', serif",
    'contentFontSize' => null, // Deprecated
    'contentColor' => '#333',
    'reverse' => false,
    'buttonClass' => 'btn-dark',
    // New responsive props
    'titleSize' => 'display-3', // display-1 through display-6
    'contentSize' => 'fs-5', // fs-1 through fs-6
    'mobileStack' => true // Whether to stack columns on mobile
])

<div class="container-fluid py-3 py-md-5" style="min-height: {{ $minHeight }};">
    <div class="row align-items-center mx-0 mx-md-3">
        <!-- Title Column -->
        <div class="{{ $mobileStack ? 'col-12 col-md-6' : 'col-md-6' }} mb-4 mb-md-0 {{ $reverse ? 'order-md-1' : '' }}">
            <h1 class="fw-bold {{ $titleSize }}" 
                style="@if($titleFontSize) font-size: {{ $titleFontSize }}; @endif font-family: {{ $titleFontFamily }};">
                {{ $title }}
            </h1>
        </div>

        <!-- Content Column -->
        <div class="{{ $mobileStack ? 'col-12 col-md-6' : 'col-md-6' }}">
            <p class="mb-4 {{ $contentSize }}" 
               style="@if($contentFontSize) font-size: {{ $contentFontSize }}; @endif color: {{ $contentColor }};">
                {{ $content }}
            </p>
            
            @if($buttonText && $buttonLink)
                <a href="{{ $buttonLink }}" 
                   class="btn {{ $buttonClass }} px-3 px-md-4 py-2 fw-bold">
                    {{ $buttonText }}
                </a>
            @endif
        </div>
    </div>
</div>

@once
<style>
    /* Responsive font size fallbacks */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem !important;
        }
        .fs-5 {
            font-size: 1rem !important;
        }
    }
</style>
@endonce






{{-- many useage ways this component!:
How to Use the Updated Component:
Basic Usage (Recommended New Way):
html
<x-website.split-content
    title="Our Approach"
    content="Innovative solutions for modern businesses..."
    titleSize="display-4" <!-- Responsive by default -->
    contentSize="fs-5"    <!-- Responsive by default -->
    buttonText="Learn More"
    buttonLink="/about"
/>
Legacy Usage (Still Works):
html
<x-website.split-content
    title="Our Approach"
    content="Innovative solutions..."
    titleFontSize="3.5rem" <!-- Will still work -->
    contentFontSize="1.25rem"
    buttonText="Learn More"
/>
Advanced Usage:
html
<x-website.split-content
    title="Global Reach"
    content="Our worldwide network..."
    titleSize="display-2"
    contentSize="fs-4"
    mobileStack="false" <!-- Side-by-side even on mobile -->
    reverse="true"
    minHeight="400px"
    buttonClass="btn-primary"
/>
Migration Guide:
For Existing Implementations:

No changes required (backward compatible)

Old font sizes will still work

For New Implementations:

Use titleSize instead of titleFontSize

Recommended sizes:

titleSize: display-2 to display-4

contentSize: fs-4 to fs-5

When Updating:

Test existing implementations

Gradually replace titleFontSize with titleSize

Consider adding mobileStack where needed

This update maintains all existing functionality while adding proper responsive behavior, especially for typography. The component will now:

Display correctly on all screen sizes

Maintain vertical rhythm

Keep existing implementations working

Provide better control over mobile layout --}}