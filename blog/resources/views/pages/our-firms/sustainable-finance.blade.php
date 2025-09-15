@extends('app')

@section('content')

<x-website.hero title="Sustainable Finance."
        description="We’re deploying $750 billion across investing, financing and advisory activities by 2030 and bringing our commercial expertise to help our clients accelerate climate transition and advance inclusive growth."
        backgroundImage="/images/meeting.jpg" />




<div class="container-fluid py-5">
    <div class="container-fluid">
        <div class="container-fluid">
            {{-- <span class="text-secondary">About Us</span> --}}
                  <h1 class="fw-dark display-4">We see unprecedented opportunity for our clients to apply sustainable finance to make a global impact.</h1>
        </div>
    </div>
</div>

<x-website.updated-card 
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


<x-website.two-cards 
    headingSize="1.5rem"
    sectionTitleSize="2rem"
    sectionTitle="Our Approach"
    heading="Sustainability is a firmwide mandate with a focus on two interconnected themes."
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Sale of Informatica to Salesforce',
            'text' => 'Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.',
            'link' => '#'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'World\'s Best Investment Bank for M&A by Euromoney',
            'text' => 'Euromoney has named Goldman Sachs as the World\'s Best Investment Bank for M&A in the annual Awards for Excellence.',
            'link' => '#'
        ]
    ]"
/>


<div class="container py-5 pb-5">
    <div class="container py-5">
        <h1 class="fw-light">"“
“
At the center of our efforts, we’re partnering with our global businesses to harness markets, deepen capabilities and drive innovation to support the transition to an inclusive, low-carbon economy.”</h1>
        <p class="text-secondary pt-3"> Sustainable Finance Group
</p>
    </div>
</div>

    <x-website.stats-updated :stats="[
        [
            'number' => '46K+',
            'description' => 'Goldman Sachs People Around the World',
        ],
        [
            'number' => '1M+',
            'description' => 'External Applications for Roles at the Firm',
        ],
        [
            'number' => '95%+',
            'description' => 'Clients Give the Firm Top Ratings of \'Best People\' and \'Expertise\'',
        ],
    ]" :sources="'Sources: Headcount and external applicants as of 2024; 2023 Biennial Client & Stakeholder Survey. <br> Data from a representative cross-section of clients across the firm.'" />


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