<x-hero backgroundImage="/images/main-picture.jpg"
    title="Investment Banking"
    description="
 Enduring partnership. Tenacious dedication. Superior results."
    buttonLink="/your-link"
    buttonText="Explore Our Impact" />

<div class="container my-4">
    <div class="d-flex flex-wrap align-items-center gap-3 ">
        <div class="date-box">
            <h6>Jan</h6>
            <h2>13</h2>
        </div>
        <div class="text-block">
            <h5>Goldman Sachs Announces Creation of Capital Solutions Group</h5>
            <a href="{{ route('blog.index') }}">View Press Release</a>
        </div>
    </div>
</div>


<!-- Stats Section -->
<div class="container-fluid mx-0 my-5 d-flex align-items-center" style="background-color: #f8f8fa; min-height: 300px;">
    <div class="row text-center w-100">
        <div class="col-md-4">
            <h1 class="fw-bold display-3">#1</h1>
            <h5 class="fw-bold">Global Investment Bank<sup>1</sup></h5>
        </div>
        <div class="col-md-4">
            <h1 class="fw-bold display-3">#1</h1>
            <h5 class="fw-bold">Mergers & Acquisitions Advisor<sup>2</sup></h5>
        </div>
        <div class="col-md-4">
            <h1 class="fw-bold display-3">#1</h1>
            <h5 class="fw-bold">Equities Franchise<sup>3</sup></h5>
        </div>
    </div>
</div>


<!-- Sources Text -->
<div class="container mb-4">
    <p class="small text-muted">
        1 Based on Dealogic reporting of cumulative announced M&A deal volume, the number of deals over $500 million in
        value, and associated market share from January 1, 2000, through March 31, 2025. 2 Dealogic – January 1, 2024
        through December 31, 2024. M&A refers to both announced and completed M&A. 3 Equities ranking based on
        cumulative publicly-disclosed net revenues (2020-2024). Applicable peers include MS, JPM, BAC, C, BARC, DB, UBS,
        CS (through FY22).
    </p>
</div>


<!-- Heading Section -->
<div class="container-fluid py-5" style="min-height: 300px;">
    <div class="row align-items-center mx-3">
        <!-- Left Column: Title -->
        <div class="col-md-6 mb-4 mb-md-0">
            <h1 class="fw-bold" style="font-size: 3.5rem; font-family: 'Georgia', serif;">
                Our Approach
            </h1>
        </div>

        <!-- Right Column: Paragraph -->
        <div class="col-md-6">
            <p class="mb-4" style="font-size: 1.25rem; color: #333;">
                Our preeminent global Investment Banking business is built on a culture of enduring partnerships and a
                commitment to delivering exceptional execution and unmatched client service. Drawing on our market
                understanding and deep expertise, we help clients seize new opportunities to unlock growth and
                transformation.
            </p>
            <a href="#" class="btn btn-dark px-4 py-2 fw-bold" style="transition: all 0.3s;">
                Explore Our Offerings
            </a>
        </div>
    </div>
</div>

{{-- import from Opportunity --}}

<div class="container my-5">
    <div class="row g-0 align-items-stretch border internship-section">
        <!-- Left: Image -->
        <div class="col-md-6">
            <img src="https://www.goldmansachs.com/images/careers/GS_VM_Photo_SH_NYC4_00337_1x1.jpg"
                alt="Internship Image" class="w-100 h-100 object-fit-cover">
        </div>

        <!-- Right: Content -->
        <div class="col-md-6 d-flex bg-light">
            <div class="my-auto px-5 py-4">
                <h6 class="text-uppercase text-muted mb-2">Investment Banking Careers</h6>
                <h3 class="fw-bold mb-3">Discover Careers at Goldman Sachs</h3>
                <p class="mb-4">
                    Learn more about working in Investment Banking and explore open positions.
                </p>
                <a href="#" class="btn btn-dark px-4 py-2">
                    Explore
                </a>
            </div>
        </div>
    </div>
</div>


{{-- Two cards  --}}

<section class="services-section">
    <h2 class="text-center mb-4">Our Services</h2>
        <p class="text-center mb-5 fw-light text-gray-700">We partner with business leaders to drive innovation, transformation, and enduring success that transcends individual transactions.</p>


    <div class="container container-custom">
        <div class="cards-grid">
            <!-- Mergers & Acquisitions Card -->
            <div class="service-card">
                <div class="row g-0 h-100">
                    <div class="col-md-6">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=1000&auto=format&fit=crop"
                                alt="Business meeting in modern office" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-content">
                            <h2 class="card-title">Mergers & Acquisitions</h2>
                            <p class="card-description">
                                Powering clients' strategic priorities with best-in-class advice, unmatched
                                experience, and access to our global network
                            </p>
                            <a href="#" class="learn-more-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Capital Solutions Card -->
            <div class="service-card">
                <div class="row g-0 h-100">
                    <div class="col-md-6">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1000&auto=format&fit=crop"
                                alt="Financial professionals collaborating" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-content">
                            <h2 class="card-title">Capital Solutions</h2>
                            <p class="card-description">
                                Partnering with clients to navigate the complexities of global capital markets
                                through unparalleled insights, proven judgement, and bespoke solutions
                            </p>
                            <a href="#" class="learn-more-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<x-website.industry-coverage
    title="Global Markets"
    content="Our expertise spans across all major global markets with localized solutions."
    linkText="Explore Markets"
    linkUrl="/markets"
/>

<style>

    .services-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .service-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
        height: 100%;
        border: none;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--hover-shadow);
    }

    .card-image {
        position: relative;
        height: 320px;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .service-card:hover .card-image img {
        transform: scale(1.05);
    }

    .card-content {
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 320px;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .card-description {
        color: var(--text-gray);
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        flex-grow: 1;
    }

    .learn-more-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        display: inline-flex;
        align-items: center;
        transition: all 0.2s ease;
        margin-top: auto;
    }

    .learn-more-link:hover {
        color: var(--primary-color);
        transform: translateX(3px);
    }

    .learn-more-link i {
        margin-left: 8px;
        transition: transform 0.2s ease;
    }

    .learn-more-link:hover i {
        transform: translateX(3px);
    }

    .container-custom {
        max-width: 1400px;
    }

    @media (max-width: 768px) {
        .services-section {
            padding: 60px 0;
        }

        .card-content {
            padding: 2rem;
            min-height: auto;
        }

        .card-image {
            height: 250px;
        }

        .card-title {
            font-size: 1.5rem;
        }
    }

    /* Custom grid for better card alignment */
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (max-width: 576px) {
        .cards-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .service-card .row {
            flex-direction: column;
        }
    }

    .card-img-height {
        height: 300px;
        object-fit: cover;
    }

    .card:hover {
        transform: translateY(-2px);
        transition: transform 0.2s ease;
    }


    .object-fit-cover {
        object-fit: cover;
    }

    .internship-section {
        min-height: 450px;
    }

    /* from carrers css: */
    /* Responsive heading font size */
    /* Optional Hover Effect for Button */
    .btn-dark:hover {
        background-color: #000 !important;
        transform: translateY(-2px);
    }


    .date-box {
        background-color: #8790eb;
        /* match your blue tone */
        color: #fff;
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
    }

    .date-box h6 {
        margin: 0;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .date-box h2 {
        margin: 0;
        font-size: 2rem;
        font-weight: 600;
    }

    .text-block h5 {
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .text-block a {
        font-size: 0.9rem;
        text-decoration: none;
        color: #000;
    }

    .text-block a:hover {
        text-decoration: underline;
    }

    /* Responsive tweak */
    @media (max-width: 576px) {
        .date-box {
            width: 80px;
            height: 80px;
        }

        .date-box h2 {
            font-size: 1.5rem;
        }
    }
</style>
