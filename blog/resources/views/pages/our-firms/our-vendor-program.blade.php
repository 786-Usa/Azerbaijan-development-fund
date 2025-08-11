@extends('app')

@section('content')
    <x-website.hero backgroundImage="/images/main-picture.jpg" title="Our Vendor Program" />

<div class="container p-5 ">
   <div class="container w-75">

       
       <p class="fs-5 text-secondary ">
           At Goldman Sachs, we partner with a variety of organizations to deliver creative and innovative solutions for our clients and global business.
        </p>
        
        <span class="pt-3 fs-5 text-secondary">
            
            We work with thousands of vendors to provide goods and services in over 160 cities around the world.
        </span>
        
    </div>

        
    </div>


<div class="container py-5 pb-5">
    <div class="container py-5">
        <h1 class="fw-light">“


Our vendor program gives us the opportunity to partner with organizations to simultaneously drive business value, support economic growth, and promote sustainability.”   
<p class="text-secondary pt-3 fs-5">

    <strong>David Solomon</strong>, CEO

</p>
    </div>
</div>

<div class="container p-5 ">
   <div class="container w-75">

       
       <p class="fs-5 text-secondary ">
Our firm’s core values - Partnership, Client Service, Integrity and Excellence - are at the heart of all that we do. We have high expectations of ourselves and our extended community of vendor partners as we work together to achieve our objectives.        </p>
        
        
    </div>

        
    </div>

</div>


{{-- our FAQs: --}}


<div class="container-fluid py-5">
    <!-- FAQ Header -->
    <div class="px-3 mb-5">
        <h1 class="display-5 fw-bold mb-3 ">Partner With Us</h1>
        <div class="w-30  border-bottom border-3 border-dark"></div>
    </div>

    <!-- FAQ Accordion -->
    <div class="accordion" id="faqAccordion">
        <!-- FAQ Item 1 -->
        <div class="accordion-item mb-3 border-0 border-bottom rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed bg-light bg-opacity-10 hover-bg-opacity-25 py-3" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseOne" 
                        aria-expanded="false" 
                        aria-controls="collapseOne">
                    <span class="fw-semibold me-2">I am a former Goldman Sachs employee, how do I obtain information regarding my Goldman Sachs award stock?</span>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" 
                 aria-labelledby="headingOne" 
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body bg-light bg-opacity-10">
                    <!-- Content would go here when available -->
                    <p class="text-muted">Please contact our HR department at <a href="mailto:hr-stock@gs.com">hr-stock@gs.com</a> for assistance with your award stock.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="accordion-item mb-3 border-0 rounded-3 border-bottom overflow-hidden">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-light bg-opacity-10 hover-bg-opacity-25 py-3" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseTwo" 
                        aria-expanded="false" 
                        aria-controls="collapseTwo">
                    <span class="fw-semibold me-2">Can I participate in an IPO (initial public offering) that is being underwritten by Goldman Sachs?</span>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" 
                 aria-labelledby="headingTwo" 
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body bg-light bg-opacity-10">
                    <p>Participation in IPOs is typically limited to institutional investors and select clients. Please contact your Goldman Sachs representative for specific eligibility requirements.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="accordion-item mb-3 border-0 rounded-3 border-bottom overflow-hidden">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-light bg-opacity-10 hover-bg-opacity-25 py-3" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseThree" 
                        aria-expanded="false" 
                        aria-controls="collapseThree">
                    <span class="fw-semibold me-2">How do I get information on a stock that Goldman Sachs & Co. LLC is underwriting?</span>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" 
                 aria-labelledby="headingThree" 
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body bg-light bg-opacity-10">
                    <p>You can find information on our underwriting activities through our <a href="#">Investor Relations</a> page or by contacting our Equity Capital Markets team.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="accordion-item mb-3 border-0 rounded-3 border-bottom overflow-hidden">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed bg-light bg-opacity-10 hover-bg-opacity-25 py-3" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseFour" 
                        aria-expanded="false" 
                        aria-controls="collapseFour">
                    <span class="fw-semibold me-2">When did Goldman Sachs become a public company?</span>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" 
                 aria-labelledby="headingFour" 
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body bg-light bg-opacity-10">
                    <p>The Goldman Sachs Group, Inc. began trading on the New York Stock Exchange on May 4, 1999.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom hover effects */
    .hover-bg-opacity-25:hover {
        background-color: rgba(248, 249, 250, 0.25) !important;
    }
    
    /* Smooth transitions */
    .accordion-button {
        transition: all 0.3s ease;
    }
    
    /* Remove default accordion borders */
    .accordion {
        --bs-accordion-border-color: none;
    }
    
    /* Custom styling for expanded items */
    .accordion-button:not(.collapsed) {
        background-color: rgba(13, 110, 253, 0.1);
      
        color: #c5b800;
    }

    li a{
        text-decoration: none;
        color: #000;
        text-decoration: underline;
        font-size: 20px;
    }
</style>


<div class="container p-5 ">
   <div class="container w-75">
       <p class="fs-5 text-secondary ">
              Resources
    </p>
    <ul class="text-dark 
    ">
        <li><a href="#">Vendor Registration</a></li>
        <li><a href="#">Program Benefits</a></li>
        <li><a href="#">Success Stories</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>

    <p class="fs-5 text-secondary ">
Explore our initiatives that support entrepreneurs and small businesses:</p>
    <ul>
        <li><a href="#">Initiative 1</a></li>
        <li><a href="#">Initiative 2</a></li>
        <li><a href="#">Initiative 3</a></li>
        <li><a href="#">Initiative 4</a></li>
    </ul>
    <p class="fs-5 text-secondary ">
Contacts</p>
    <ul>
        <li><a href="#">Contact1</a></li>
        <li><a href="#">Contact2</a></li>
        <li><a href="#">Contact3</a></li>
        <li><a href="#">Contact4</a></li>
    </ul>
        
        
        
    </div>

        
    </div>




    @endsection