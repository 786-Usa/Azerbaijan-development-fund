@extends('app')
@section('content')

 <x-website.hero title="Office of Corporate Engagement"
        description="The Office of Corporate Engagement unlocks potential. We deploy catalytic capital that helps level the playing field, and sparks economic growth for people and communities around the world. That means approaching our work with the same rigor and innovation we commit to our everyday business."
        backgroundImage="/images/meeting.jpg" />

<div class="container-fluid bg-light-gray">

    <div class="container-fluid px-5 py-5">
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8">
                {{-- <span class="text-secondary">What We Do</span> --}}
                <h1 class="fw-light fs-1">We are guided by 5 principles</h1>
                <p class="fw-light fs-4 text-secondary">
                    Since 2008 we’ve deployed over $3.5 billion in our programs driving progress.
                </p>
            </div>
        </div>
    </div>
    
    
      <!-- First Card Grid -->
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
    
    
    
</div>

    <x-website.updated-card
    sectionSubheading="Our Programs"
    sectionHeading="Since 2008 we’ve deployed over $3.5 billion in our programs driving progress."
    titleSize="fs-3"
    sectionSubheadingSize="fs-1"
    :cards="[
        [
            'image' => 'https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg',
            'title' => 'Sale of Informatica to Salesforce for ~$8B',
            'text' => 'Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => 'https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg',
            'title' => 'Acquisition of XYZ Corp by ABC Inc.',
            'text' => 'Goldman Sachs served as the financial advisor to ABC Inc. in its acquisition of XYZ Corp., a leader in innovative tech solutions.',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => 'https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg',
            'title' => 'Projections for Strong M&A Market in 2H 2025',
            'text' => 'We expect a robust M&A market for the second half of the year. Read our report, “Global M&A: A Bold Path for Strategic Growth,” which highlights record deals year-to-date.',
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
            'title' => 'Sale of Informatica to Salesforce for ~$8B',
            'text' => 'Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.',
            'link' => '/link1',
            'linkText' => 'Read More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Acquisition of XYZ Corp by ABC Inc.',
            'text' => 'Goldman Sachs served as the financial advisor to ABC Inc. in its acquisition of XYZ Corp., a leader in innovative tech solutions.',
            'link' => '/link2',
            'linkText' => 'Discover More'
        ],
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Projections for Strong M&A Market in 2H 2025',
            'text' => 'We expect a robust M&A market for the second half of the year. Read our report, “Global M&A: A Bold Path for Strategic Growth,” which highlights record deals year-to-date.',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ]
    ]"
    :mobileFullWidth="true"
/>

    <x-website.updated-card

       
    title=""
    :cards="[
        [
            'image' => '/images/pexels-kampus.jpg',
            'title' => 'Projections for Strong M&A Market in 2H 2025',
            'text' => 'We expect a robust M&A market for the second half of the year. Read our report, “Global M&A: A Bold Path for Strategic Growth,” which highlights record deals year-to-date.',
            'link' => '/link3',
            'linkText' => 'Explore More'
        ],
         
    ]"
/>

<x-website.image-content imageUrl="https://www.goldmansachs.com/images/careers/GS_VM_Photo_SH_NYC4_00337_1x1.jpg"
        imageAlt="Internship Program"  subtitle="" title="”Goldman Sachs and its people are committed to helping communities where we work and live, and in places where opportunity can be multiplied, to make a difference.”"
contentBgColor="#000000" contentColor="#fff"
         />

         






@endsection