@extends('app')

@section('content')

<div class="container py-5">
  <div class="row">
    <div class="col-12 col-lg-10 col-xl-8">
      <span class="text-secondary">What We Do</span>
      <h1 class="fw-bold fs-1">Global Investment Research</h1>
      <p class="fw-light fs-4 text-secondary">
        Providing original, fundamental insights and analysis for clients in the equity, fixed income,
        currency, and commodities markets.
      </p>
    </div>
  </div>
</div>

<x-website.centered-image imageSrc="/images/chinese-march.jpeg" imageAlt="Transaction Banking">
    The above is shown for illustrative purposes and the availability of products referenced within is subject to change. 
    Product use cases remain subject to Bank review and approval prior to implementation.
    
    <span class="d-block mt-3">
        Transaction Banking services are offered by Goldman Sachs Bank USA ("GS Bank") and its affiliates...
    </span>
</x-website.centered-image>

<div class="container py-3 py-md-5">
    <figure class="text-center mb-0">
        <img 
            src="https://www.goldmansachs.com/images/what-we-do/global-institute/Global%20Institute%20Circular%20Graphic.jpg" 
            alt="Global Markets Visualization"
            class="img-fluid rounded-3 shadow-sm"
            style="max-width: min(100%, 800px); height: auto;"
            loading="lazy"
        >
        <figcaption class="mt-2 small text-muted">
            Global markets overview visualization
        </figcaption>
    </figure>
</div>


<x-website.card-grid 
    title="Our Approach"
    :cards="[
        [
            'title' => 'Prime Services',
            'text' => 'Within Prime Services, our Prime Brokerage group works with hedge funds to manage risk, monitor their portfolios, access liquidity, and build their businesses.',
        ],
        [
            'title' => 'Cash Equities and Execution Services',
            'text' => 'Exchange-based market-making activities include stocks and ETFs, futures and options.',
            
        ],
        [
            'title' => 'Derivatives',
            'text' => 'Our market-leading global franchise offers institutional and corporate clients a suite of listed and OTC option strategies.',
        ]
    ]"
/>


<div class="container py-5 pb-5">
    <div class="container py-5">
        <h1 class="fw-light">"Technology, capital markets, geopolitics – few institutions understand all three. When our clients need a strategy for navigating the swift currents of world affairs, they turn to the Goldman Sachs Global Institute.”</h1>
        <p class="text-secondary pt-3"> David Solomon, Chairman and CEO</p>
    </div>
</div>


  <x-website.heading-approach
    title="Positioned to Lead"
    content="We draw on Goldman Sachs’s global network, unrivaled expertise, and best-in-class services in the critical areas facing our clients and the world."
    titleSize="display-4" 
    contentSize="fs-5"    
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

<x-website.four-card-grid 
    title="Latest Insights"
    :cards="[
        [
            'title' => 'Enterprise Suite',
            'text' => 'Earn enhanced yield on deposits with daily liquidity and term deposits and streamline account structure utilizing TxB’s VIAs',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Stock market trends',
        ],
        [
            'title' => 'E-Commerce',
            'text' => 'Send domestic and global payments using a single workflow with real-time tracking',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Stock market trends',
        ],
        [
            'title' => 'AI Solutions',
            'text' => 'Safeguard cash in a secure account with customizable terms and rapid execution',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Stock market trends',
        ],
        [
            'title' => 'Security',
            'text' => 'Interact with Accounts and Payments through our Digital Omnichannel Banking platform',
            'image' => '/images/pexels-kampus.jpg',
            'imageAlt' => 'Stock market trends',
        ]
    ]"
    gridGap="g-4"
    cardClass="shadow-sm"
/>

<div class="container">
    <div class="container py-5">
        <h1 class="pb-3">Commentary</h1>
        <button class="btn btn-dark ">
            Explore all Commentary
        </button>
    </div>
    <div>
        <p class="">
            By clicking or tapping on these third-party links, you are about to leave our website. You are selecting a link to an external site. Goldman Sachs is not responsible for the third-party website's availability, content, products or services. Please refer to the external website's terms, privacy and security policies for details and applicability.
        </p>
    </div>
</div>


    <div class="container py-4">
        <!-- Article 1 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">SPECIAL COMPETITIVE STUDIES PROJECT</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        Innovation and American Power: A Conversation with Sec. Condoleezza Rice, Moderated by George Lee
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">FOREIGN POLICY</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        AI in the Age of Great-Power Competition
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">CNBC</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        Using AI techniques to advance AI: Goldman Sachs' George Lee on the AI revolution
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Article 4 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">FOREIGN POLICY</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        Safeguarding AI's Vulnerabilities
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Article 5 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">FORTUNE</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        When AI builds AI: The next great inventors might not be human
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Article 6 -->
        <div class="article-item py-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <div class="mb-2">
                        <span class="badge bg-secondary text-uppercase small fw-normal px-2 py-1">BLOOMBERG</span>
                    </div>
                    <h4 class="fw-normal text-dark mb-0 lh-base">
                        Jared Cohen and George Lee on the Unprecedented Shocks in Geopolitics
                    </h4>
                </div>
                <div class="col-12 col-md-2 text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-decoration-none text-dark d-inline-flex align-items-center">
                        <span class="me-2">View</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection