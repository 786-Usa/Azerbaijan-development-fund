@extends('app')

@section('content')

<div class="container-fluid py-5">
    <div class="container-fluid">
        <div class="container-fluid">
            <span class="text-secondary">What We Do</span>
                  <h1 class="fw-light display-1">Global Investment Research</h1>
        </div>
        <div class="container-fluid">
         <p class="fw-light text-secondary pt-3 fs-3">
        Providing original, fundamental insights and analysis for clients in the equity, fixed income, currency, and commodities markets.      </p>   
        </div>
    </div>
</div>


   <x-website.centered-image 
    imageSrc="/images/main-picture.jpg"
    imageAlt="Financial Services"
    imageMaxWidth="100%" 
    textSize="sm"
    contentMaxWidth="700px"
    verticalPadding="py-8"
>
</x-website.centered-image>

<div class="pb-5">

  <x-website.updated-card
  sectionSubheading=""
    sectionHeading="Reach and Impact"
    titleSize="3vw"
    :cards="[
      [
        'title' => 'Breadth and Depth',
        'text' => 'Goldman Sachs Research provides cutting-edge thought leadership across over 3,000 securities, over 45 economies, and every major market under coverage. ',
        
      ],
      [
        'title' => 'Data Driven',
        'text' => 'We generate thousands of economic, market, and company forecasts and models. Plus we create and maintain Goldman Sachs proprietary indicators to help our clients see around corners.',
        
      ],
      [
        'title' => 'An Omnichannel Approach',
        'text' => 'We reach clients in formats that suit them, from webcasts and large multi-stream events to interactive data, email alerts, and our GS Now app.',
        
        ]
        ]"
    :mobileFullWidth="true"
    />
    
  </div>





<div class="container-fluid bg-dark text-white py-5">
    {{-- <!-- Hero Section with responsive padding -->
    <div class="container py-3 py-md-5">
        <h1 class="display-4 display-md-3 mb-3">Top Stories</h1>
        <p class="lead mb-4 mb-md-5">Stay updated with the latest insights and analyses from our research team.</p>
    </div> --}}

    <x-website.updated-card
    sectionSubheading="Top of Mind"
    sectionHeading="Allison Nathan of Goldman Sachs Research dives into macro developments that are top of mind for investors, executives and policymakers."
    titleSize="2vw"
    :cards="[
        [
            'image' => 'https://www.goldmansachs.com/images/insights/goldman-sachs-research/us-fiscal-worries-is-this-time-different/white-house-1x1.jpg',
            'title' => 'Top of Mind',
            'text' => 'Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => 'https://www.goldmansachs.com/images/insights/goldman-sachs-research/us-fiscal-worries-is-this-time-different/white-house-1x1.jpg',
            'title' => 'Top of Mind',
            'text' => 'Goldman Sachs served as the financial advisor to ABC Inc. in its acquisition of XYZ Corp., a leader in innovative tech solutions.',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => 'https://www.goldmansachs.com/images/insights/goldman-sachs-research/us-fiscal-worries-is-this-time-different/white-house-1x1.jpg',
            'title' => 'Top of Mind',
            'text' => 'We expect a robust M&A market for the second half of the year. Read our report, “Global M&A: A Bold Path for Strategic Growth,” which highlights record deals year-to-date.',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ]
    ]"
    :mobileFullWidth="true"
/>
</div>

</div>

{{-- <div class="container py-5">
  <div class="row align-items-start">
    <!-- Left Column -->
    <div class="col-md-6">
      <h1 class="fs-1">Explore More</h1>
      <p>
        Learn more about how we cultivate and harness world-class intellectual capital 
        and expertise to solve our clients' most complex challenges.
      </p>
    </div>

    <!-- Right Column -->
    <div class="col-md-6 d-flex flex-column align-items-md-end gap-2 mt-4 mt-md-0">
      <p class="mb-0 border-bottom-2 border-secondary pb-2">
        Azarbaijan Research Portal
        <a href="#" class="icon-link icon-link-hover">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
      <p class="mb-0">
        Career in Global Research Investment
        <a href="#" class="icon-link icon-link-hover">
          <svg class="bi" width="16" height="16" fill="currentColor">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </p>
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


<div class="bg-light-gray ">

  <x-website.info-section
  title="Explore More"
  description="Learn more about how we cultivate and harness world-class intellectual capital and expertise to solve our clients' most complex challenges."
  :items="[
    ['text' => 'Azerbaijan Research Portal', 'link' => '#'],
    ['text' => 'Career in Global Research Investment', 'link' => '#'],
    ]"
/>

</div>





@endsection