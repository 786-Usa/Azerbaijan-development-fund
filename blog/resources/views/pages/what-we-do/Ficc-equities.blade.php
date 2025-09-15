@extends('app')

@section('content')
    <x-website.hero backgroundImage="/images/main-picture.jpg" title="FICC and Equities" />

<div class="container-fluid" style="background-color: #f8f8fa;">

    <x-website.stats-updated :stats="[
        [
            'number' => '#1',
            'description' => 'in Equities',
        ],
        [
            'number' => '#1',
            'description' => 'FICC Institutional Client Franchise',
        ],
        [
            'number' => '#2',
            'description' => 'Global Rates and Commodities',
        ],
        ]" :sources="'Sources: Per publicly disclosed FICC and Equities revenues for 2023. Peers include MS, JPM, BAC, C, BARC, DB, UBS; Based on FY23 Coalition Institutional Client wallet share results; Ranks represent 2023 Coalition product revenue ranks'" />
    
</div>
    
    
        <x-website.heading-approach 
        title="Our Approach"
        subtitle="FICC and Equities"
        titleSize="display-5"
       content="Our FICC and Equities business brings the comprehensive reach and diverse capabilities of a global firm to bear for the world’s leading asset managers, hedge funds, banks and brokerages, pensions, endowments and foundations, and corporations and governments. Operating at the center of global financial markets, we combine out-of-consensus market insights, relentless proactivity, and a commitment to deliver unmatched execution with superior products and solutions built to drive performance and withstand volatility." />
     
   <x-website.updated-card
    sectionSubheading=""
    sectionHeading="The Breaks of the Game"
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

{{-- <div class="container py-5 ">
    <div class="row text-gray-700 ">
        <h1>Our Services</h1>
    </div>
</div> --}}






  <!-- First Card Grid -->
{{-- <x-website.card-grid 
    title="Equities"
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Cash Equities and Execution Services',
            'text' => 'Exchange-based market-making activities include stocks and ETFs, futures and options.',
            
        ],
        [
            'title' => 'Derivatives',
            'text' => 'Our market-leading global franchise offers institutional and corporate clients a suite of listed and OTC option strategies.',
            'link' => '/services/analytics',
        ]
    ]"
/> --}}

<x-website.updated-card 
     sectionSubheading="Our Services"
    sectionHeading="Equities"
    titleSize="2vw"
    sectionSubheadingSize="display-4"
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses. Our Advisor Solutions group provides investment advisors and their clients with access to a range of clearing, lending and custody solutions. Our global clearing service offers access to global equities and listed derivatives exchanges and to all major over-the-counter (OTC) central clearing counterparties (CCPs).',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Cash Equities and Execution Services',
            'text' => 'Exchange-based market-making activities include stocks and ETFs, futures and options.',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Derivatives',
            'text' => 'Our market-leading global franchise offers institutional and corporate clients a suite of listed and OTC option strategies.',
            'link' => '/services/analytics',
            'linkText' => 'Learn more'
        ]
    ]"
/>

<!-- Second Card Grid -->
<x-website.updated-card 
    sectionHeading="Commodities"
    titleSize="2vw"
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses. Our Advisor Solutions group provides investment advisors and their clients with access to a range of clearing, lending and custody solutions. Our global clearing service offers access to global equities and listed derivatives exchanges and to all major over-the-counter (OTC) central clearing counterparties (CCPs).',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Cash Equities and Execution Services',
            'text' => 'Provide insights and services to institutional clients investing in a wide range of credit products, including bank loans, investment grade, high-yield, and municipal debt, across cash and derivative forms.',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Derivatives',
            'text' => 'Our market-leading global franchise offers institutional and corporate clients a suite of listed and OTC option strategies.',
            'link' => '/services/analytics',
            'linkText' => 'Learn more'
        ]
    ]"
/>

<x-website.updated-card 
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses. Our Advisor Solutions group provides investment advisors and their clients with access to a range of clearing, lending and custody solutions. Our global clearing service offers access to global equities and listed derivatives exchanges and to all major over-the-counter (OTC) central clearing counterparties (CCPs).',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Mortgages & Structured Products',
            'text' => 'Offer flow market making, loan trading and origination, and asset-secured financing across a number of asset classes including residential mortgages, agency mortgage-backed securities, commercial real estate, and private credit.',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Derivatives',
            'text' => 'Provide insights and services to institutional clients investing in a wide range of credit products, including bank loans, investment grade, high-yield, and municipal debt, across cash and derivative forms.',
            'link' => '/services/analytics',
            'linkText' => 'Learn more'
        ]
    ]"
/>
<x-website.updated-card 
    sectionHeading="Digital Platform"
    titleSize="2vw"
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses. Our Advisor Solutions group provides investment advisors and their clients with access to a range of clearing, lending and custody solutions. Our global clearing service offers access to global equities and listed derivatives exchanges and to all major over-the-counter (OTC) central clearing counterparties (CCPs).',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Cash Equities and Execution Services',
            'text' => 'Provide insights and services to institutional clients investing in a wide range of credit products, including bank loans, investment grade, high-yield, and municipal debt, across cash and derivative forms.',
            'link' => '/services/strategy',
            'linkText' => 'Learn more'
        ],
    ]"
/>

        @endsection
