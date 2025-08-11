@extends('app')
@section('content')
    <x-website.hero title="The People of Goldman Sachs Are Goldman Sachs."
        description="Our people are our greatest asset – we say it often and with good reason. It is only with the determination and dedication of our people that we can serve our clients, generate long-term value for our shareholders, and contribute to our communities."
        backgroundImage="/images/meeting.jpg" />


    <div class="container py-5 pb-5">
        <div class="container py-5">
            <h1 class="fw-light">“
                Our culture is what defines us, it is our identity and it is at the heart of our commercial success.”</h1>
            <p class="text-secondary pt-3"> David Solomon, Chairman and CEO</p>
        </div>
    </div>

    <div class="container">
        <div class="container py-5">
            <p> Leadership</p>
            <h1 class="">Our Leadership</h1>
        </div>
        <div class="container pb-5">
            <p class="text-gray-700 fs-4">
                Goldman Sachs leaders are committed to ensuring the firm operates at the highest possible level – for our
                clients, our shareholders, and our people.
            </p>
        </div>
    </div>

    <x-website.card-grid title="" :cards="[
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

    <div class="container">
        <div class="container py-5">
            <p> Our People</p>
            <h1 class="">Voices of the Firm</h1>
        </div>
        <div class="container pb-5">
            <p class="text-gray-700 fs-4">
                Our people share their experiences, insights, and reflections on what it means to be a part of Goldman
                Sachs.
            </p>
            <button class="btn btn-dark">
                Meet our People
            </button>
        </div>
    </div>


    <x-website.image-content imageUrl="https://www.goldmansachs.com/images/careers/GS_VM_Photo_SH_NYC4_00337_1x1.jpg"
        imageAlt="Internship Program" subtitle="" title="Embedded financial products, powered by Goldman Sachs"
        content="Our people are our greatest asset. We believe that a major strength and principal reason for our success is the quality, dedication, determination and collaboration of our people, which enables us to serve our clients, generate long-term value for our shareholders and contribute to the broader community."
        buttonText="Learn More" />

    <div class="container">
        <div class="container py-5">
            <p> Alumni</p>
            <h1 class="">A Strong and Active Alumni Network</h1>
        </div>
        <div class="container pb-5">
            <p class="text-gray-700 fs-4">
                Our people become a part of the Goldman Sachs’ history, and the firm becomes a part of theirs. Our alumni
                network keeps former colleagues around the world connected to the firm and one another, creating
                opportunities for business collaboration, thought leadership, and lasting relationships.
            </p>
            <button class="btn btn-dark">
                Meet our Alumni
            </button>
        </div>
    </div>

    <x-website.stats backgroundColor="#f8f8fa" columns="3" :stats="[
        ['value' => '115K+', 'label' => 'Total Alumni Population'],
        ['value' => '115+', 'label' => 'Countries Represented'],
        ['value' => '600+', 'label' => 'Alumni C-Suite Execs at Leading Companies'],
    ]"
        footnotes="Sources: As of March 2025. Leading companies include organizations with a market cap/valuation of >$1B or with AUM of >$5B. Data sourced from Pitchbook, Equilar, LinkedIn and CapIQ." />

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
