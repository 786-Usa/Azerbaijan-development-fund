@extends('app')

@section('content')
    <x-website.hero backgroundImage="/images/main-picture.jpg" title="FICC and Equities" />
    <x-website.stats backgroundColor="#f8f8fa" columns="3" :stats="[
        ['value' => '#1', 'label' => 'in Equities'],
        ['value' => '#2', 'label' => 'FICC Institutional Client Franchise'],
        ['value' => '#1', 'label' => 'Global Rates and Commodities'],
    ]"
        footnotes="Sources: Per publicly disclosed FICC and Equities revenues for 2023. Peers include MS, JPM, BAC, C, BARC, DB, UBS; Based on FY23 Coalition Institutional Client wallet share results; Ranks represent 2023 Coalition product revenue ranks" />

    <x-website.heading-approach title="Our Approach"
       content="Our FICC and Equities business brings the comprehensive reach and diverse capabilities of a global firm to bear for the world’s leading asset managers, hedge funds, banks and brokerages, pensions, endowments and foundations, and corporations and governments. Operating at the center of global financial markets, we combine out-of-consensus market insights, relentless proactivity, and a commitment to deliver unmatched execution with superior products and solutions built to drive performance and withstand volatility." />
     
       <x-website.card-grid 

       
    title="The Breaks of the Game"
    :cards="[
        [
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform'
        ],
         [
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform'
        ],
         [
            'title' => 'Repricing risks post tariff',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
            'link' => '/products/enterprise',
            'linkText' => 'View demo',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Enterprise Platform'
        ]
    ]"
/>

<div class="container py-5 ">
    <div class="row text-gray-700 ">
        <h1>Our Services</h1>
    </div>
</div>






  <!-- First Card Grid -->
<x-website.card-grid 
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
/>

<!-- Second Card Grid -->
<x-website.card-grid 
    title="Commodities"
    :cards="[
        [
            'title' => 'Energy & Power',
            'text' => 'Manage commodities execution, risk management, and financing services for sectors including oil, natural gas, power, metals, and agricultural products',
            'link' => '/services/energy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Metals & Mining',
            'text' => 'Comprehensive services for precious and industrial metals markets worldwide.',
            'link' => '/services/metals',
            'linkText' => 'Explore'
        ],
        [
            'title' => 'Agricultural Products',
            'text' => 'Global solutions for agricultural commodity markets and supply chains.',
            'link' => '/services/agriculture',
            'linkText' => 'Details'
        ]
    ]"
/>

<x-website.card-grid 
    title=""
    :cards="[
        [
            'title' => 'Interest Rate Products',
            'text' => 'Provide clients with liquidity, manage their global interest rate exposures, and hedge macroeconomic risks such as inflation and growth. ',
            'link' => '/services/energy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Mortgages & Structured Products',
            'text' => 'Offer flow market making, loan trading and origination, and asset-secured financing across a number of asset classes including residential mortgages, agency mortgage-backed securities, commercial real estate, and private credit.',
        ],
        [
            'title' => 'Repo',
            'text' => 'Provide clients with short term collateralized financing and make markets in repo and reverse repo',
        ]
    ]"
/>
<x-website.card-grid 
    title="Digital Platform"
    :cards="[
        [
            'title' => 'Marquee',
            'text' => 'Our unified digital marketplace delivers leading market intelligence and analytics to empower clients to refine their market views, hedge risk, and execute trading strategies.',
            'link' => '/services/energy',
            'linkText' => 'Learn more'
        ],
        [
            'title' => 'Systematic Trading Strategies',
            'text' => 'Our team is responsible for building indices and strategies for all products traded within FICC and Equities globally.',
            'link' => '/services/metals',
            'linkText' => 'Explore'
        ],
    ]"
/>

        @endsection
