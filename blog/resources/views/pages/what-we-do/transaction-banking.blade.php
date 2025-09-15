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
<x-website.two-cards 
    headingSize="2.5rem"
    sectionTitle=""
    heading="Our Work with Clients"
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Apollo Global Management',
            'text' => 'Apollo Global Management embarked on a multi-year journey to fully centralize their treasury and payments operations. TxB provided robust support by offering innovative solutions that helped drive treasury automation, leading to operational efficiency.',
            'link' => '#'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Alegeus Technologies',
            'text' => 'Alegeus needed to operate its COBRA business from a single physical account with sub-ledgering to make their reconciliation easier. Alegeus used TxB’s Virtual Integrated Accounts (VIAs) to help streamline their account structure. ',
            'link' => '#'
        ]
    ]"
/>

    <x-website.updated-card
    sectionSubheading=""
    sectionHeading="Explore Our Insights"
    titleSize="2vw"
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Beyond the Rate: How Integrated FX Payments Make Treasury Teams',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Virtual Accounts: From Consideration to Action',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Virtual Accounts: Nimble Tool Unlocks Opportunities',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ]
    ]"
    :mobileFullWidth="true"
/>
 <x-website.updated-card
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Foundations for a New Horizon',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'The Case for a Modern Transaction Banking Platform',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Treasury Transformation',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ]
    ]"
    :mobileFullWidth="true"
/>

 <x-website.updated-card
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Understanding Global FX Payments',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Virtual Accounts and In-House Banks',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ]
    ]"
    :mobileFullWidth="true"
/>

 


<x-website.centered-image imageSrc="/images/chinese-march.jpeg" imageAlt="Transaction Banking">
    The above is shown for illustrative purposes and the availability of products referenced within is subject to change. 
    Product use cases remain subject to Bank review and approval prior to implementation.
    
    <span class="d-block mt-3">
        Transaction Banking services are offered by Goldman Sachs Bank USA ("GS Bank") and its affiliates...
    </span>
</x-website.centered-image>





@endsection