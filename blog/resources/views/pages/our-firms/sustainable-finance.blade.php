@extends('app')

@section('content')

<x-website.hero title="Sustainable Finance."
        description="We’re deploying $750 billion across investing, financing and advisory activities by 2030 and bringing our commercial expertise to help our clients accelerate climate transition and advance inclusive growth."
        backgroundImage="/images/meeting.jpg" />




<div class="container-fluid py-5">
    <div class="container-fluid">
        <div class="container-fluid">
            {{-- <span class="text-secondary">About Us</span> --}}
                  <h1 class="fw-light fs-1">We see unprecedented opportunity for our clients to apply sustainable finance to make a global impact.</h1>
        </div>
    </div>
</div>

<x-website.card-grid 
    title=""
    :cards="[
        [
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            
        ],
        [
            
            'text' => 'Exchange-based market-making activities include stocks and ETFs, futures and options.',
            
        ],
        [
            'text' => 'Our market-leading global franchise offers institutional and corporate clients a suite of listed and OTC option strategies.',
        ]
    ]"
/>

<div class="container-fluid px-5 py-5 lh-baseline">
    <h1 class="fw-light fs-1 mb-4">
        Our Approach
    </h1>
    <p>
        Sustainability is a firmwide mandate with a focus on two interconnected themes.
    </p>
</div>

<x-website.card-grid title=""
 :cards="[
        [
            'title' => 'Repricing risks post tariff',
            'text' =>
                'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform',
        ],
        [
            'title' => 'Repricing risks post tariff',
            'text' =>
                'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform',
        ],
        [
            'title' => 'Repricing risks post tariff',
            'text' =>
                'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform',
        ],
    ]" />


<div class="container py-5 pb-5">
    <div class="container py-5">
        <h1 class="fw-light">"“
“
At the center of our efforts, we’re partnering with our global businesses to harness markets, deepen capabilities and drive innovation to support the transition to an inclusive, low-carbon economy.”</h1>
        <p class="text-secondary pt-3"> Sustainable Finance Group
</p>
    </div>
</div>

  <x-website.stats backgroundColor="#f8f8fa" columns="3" :stats="[
        ['value' => '53K', 'label' => 'in Equities'],
        ['value' => '33', 'label' => 'FICC Institutional Client Franchise'],
        ['value' => '$1.45B', 'label' => 'Global Rates and Commodities'],
    ]"
 />

 <div class="container py-5 pb-5">
    <div class="container py-5">
        <h1 class="fw-light">"“
“
Looking ahead, the needs of our clients will increasingly be defined by sustainable growth. Our firm’s long-term financial success, the stability of the global economy and society’s overall wellbeing all depend on it.”</h1>
        <p class="text-secondary pt-3"> David M. Solomon
CEO
</p>
    </div>
</div>

<x-website.image-content imageUrl="https://www.goldmansachs.com/images/careers/GS_VM_Photo_SH_NYC4_00337_1x1.jpg"
        imageAlt="Internship Program"  subtitle="" title="Sustainable Future" content="We’re positioning clients for a future in which sustainability is core to all industries, by doing what we know best: investing, financing, advising, and innovating."
contentBgColor="#000000" contentColor="#fff" reverse=true
         />

         <div class="container-fluid bg-body-secondary">

             
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
</div>


@endsection