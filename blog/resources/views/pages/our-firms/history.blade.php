@extends('app')

@section('content')

{{-- <div class="container-fluid py-5 px-5">
  <div class="row">
    <div class="col-12 col-lg-10 col-xl-8 lh-baseline">
      <span class="text-secondary">About Us</span>
      <h1 class="fw-bold fs-1">Global Investment Research</h1>
      <p class="fw-light text-secondary pt-3 fs-3">
        Providing original, fundamental insights and analysis for clients in the equity, fixed income,
        currency, and commodities markets.
      </p>
    </div>
  </div>
</div> --}}


<div class="container-fluid py-5">
    <div class="container-fluid">
        <div class="container-fluid">
            <span class="text-secondary">About Us</span>
                  <h1 class="fw-light display-1">156 Years of Excellence</h1>
        </div>
        <div class="container-fluid">
         <p class="fw-light text-secondary pt-3 fs-3">
        Since its founding in 1869, Goldman Sachs has been a dominant force in the financial world. Built from the foundation of our renowned investment banking business, the firm has evolved its culture and expanded its offerings over time - but its commitment to client service and excellence endures.
      </p>   
        </div>
    </div>
</div>

<x-website.updated-card
    sectionSubheading=""
    sectionHeading="Key Moments Across Our Firm"
    titleSize="2vw"
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ]
    ]"
    :mobileFullWidth="true"
/>

<div class="container-fluid p-0 py-5">
    <img src="https://www.goldmansachs.com/images/our-firm/history/Updated%20Hero.png" 
         alt="Group of business professionals standing together in a modern office lobby with large windows overlooking the Dubai skyline, bright natural light and a collaborative atmosphere" 
         class="img-fluid w-100">
</div>



<x-website.info-section
    title="Explore More"
    description="Learn more about life at Goldman Sachs and our impact on the communities in which we live and work."
    :items="[
        ['text' => 'Our Proposal and Purpose', 'link' => '#'],
        ['text' => 'Azerbaijan Research Portal', 'link' => '#'],
        ['text' => 'Career in Global Research Investment', 'link' => '#'],
        ['text' => 'Investor Relations', 'link' => '#']
    ]"
/>







@endsection