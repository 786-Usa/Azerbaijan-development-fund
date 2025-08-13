{{-- <!-- Heading Section -->
<div class="container-fluid" style="background-color: #f8f8fa; padding: 4rem 0;">
    <div class="row align-items-center px-4 flex-md-row flex-column" style="margin: 0;">
        <div class="col-md-6 mb-4 mb-md-0">
            <span class="text-uppercase text-muted small" style="letter-spacing: 1px;">Careers</span>
            <div class="fw-bold heading-title" style="font-size: 3.5rem; font-family: 'Georgia', serif; margin-top: 0.5rem;">
                Where the Best Get Better
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 heading-paragraph" style="font-size: 1.5rem; color: #333;">
                Our apprenticeship culture accelerates careers through unbeatable exposure
                to the most capable leaders and consequential challenges in finance.
            </p>
        </div>
    </div>
</div> --}}





<div class="container-fluid py-5" style="background-color:#eff7ff">

    <x-website.heading-approach title="Where the Best Get Better"
        content="Our apprenticeship culture accelerates careers through unbeatable exposure to the most capable leaders and consequential challenges in finance."
        {{-- titleSize="display-5"  --}} titleFontSize="2.5rem" subtitle="Careers" contentSize="fs-5" />


    <!-- Full-width Image Section -->
    <div class="container-fluid px-0">
        <img src="https://www.goldmansachs.com/images/homepage/Hompage%20-%20Figma%20Composite%20.jpg" alt="Careers Image"
            class="img-fluid w-100" style="object-fit: cover; height: auto;">
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


    <div class="px-5">

        <div class="d-flex flex-wrap">
            <div>
                <button class=" btn-light text-dark border-2 px-4 py-2 fs-6">
                    Explore Life at Goldman Sachs
                </button>
            </div>
            <div>
                <a href="#" class="btn btn-outline-light border-0 text-dark px-4 py-2 nav-link">Our People</a>
            </div>
            <div>
                <a href="#" class="btn btn-outline-light border-0 text-dark px-4 py-2 nav-link">Careers</a>
            </div>
        </div>
    </div>
</div>
