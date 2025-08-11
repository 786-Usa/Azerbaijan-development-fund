@extends('app')

@section('content')

<x-hero backgroundImage="/images/main-picture.jpg"
    title="Transaction Banking"
    description="
For Corporate Treasurers and Payments Executives, Transaction Banking (TxB™) is a tech-forward banking platform of choice to meet their electronic payment, foreign exchange, and liquidity needs."
/>
<div class="container py-5 ">
    <div class="row text-gray-700 ">
        <h1>Our Services</h1>
    </div>
</div>

  <!-- First Card Grid -->
<x-website.four-card-grid 
    title=""
    :cards="[
        [
            'title' => 'Enterprise Suite',
            'text' => 'Earn enhanced yield on deposits with daily liquidity and term deposits and streamline account structure utilizing TxB’s VIAs',
            'link' => '/products/enterprise',
            'linkIcon' => 'fas fa-arrow-right'
        ],
        [
            'title' => 'E-Commerce',
            'text' => 'Send domestic and global payments using a single workflow with real-time tracking',
            'icon' => 'fas fa-shopping-cart',
            'link' => '/products/ecommerce'
        ],
        [
            'title' => 'AI Solutions',
            'text' => 'Safeguard cash in a secure account with customizable terms and rapid execution',
            'icon' => 'fas fa-robot',
            'link' => '/products/ai'
        ],
        [
            'title' => 'Security',
            'text' => 'Interact with Accounts and Payments through our Digital Omnichannel Banking platform',
            'link' => '/products/security'
        ]
    ]"
    gridGap="g-4"
    cardClass="shadow-sm"
/>

<x-website.industry-coverage
    reverse="true"
    backgroundImage="/images/corporate-Dubai-42-scaled.jpg"
    contentBoxWidth="500px"
/>

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
        ]
    ]"
/>


    <x-website.card-grid 
    title="Explore Our Insights"
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

<x-website.card-grid 
    title=""
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

 <x-website.card-grid 
    title=""
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
        ]
    ]"
/>

<x-website.centered-image imageSrc="/images/chinese-march.jpeg" imageAlt="Transaction Banking">
    The above is shown for illustrative purposes and the availability of products referenced within is subject to change. 
    Product use cases remain subject to Bank review and approval prior to implementation.
    
    <span class="d-block mt-3">
        Transaction Banking services are offered by Goldman Sachs Bank USA ("GS Bank") and its affiliates...
    </span>
</x-website.centered-image>





@endsection