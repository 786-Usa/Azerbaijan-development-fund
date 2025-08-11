<div class="container-fluid px-5 mt-5">
    <h6 class="text-uppercase px-4">Stay Informed</h6>
    <h1 class="mt-3 px-4">The Firm in Action</h1>

    <div class="row mt-4 g-4 mobile-full-width-row">
        <div class="col-md-4">
            <div class="card h-100 border-0">
                <img class="card-img-top" src="https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg" alt="Card image">
                <div class="card-body px-0">
                    <span class="card-title">Sale of Informatica to Salesforce for ~$8B</span>
                    <p class="card-text">Goldman Sachs acted as exclusive financial advisor to Informatica—a leader in AI-powered enterprise cloud data management—in its sale to Salesforce for ~$8B.</p>
                    <a href="#" class="btn btn-outline-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <img class="card-img-top" src="https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg" alt="Card image">
                <div class="card-body px-0">
                    <span class="card-title">World's Best Investment Bank for M&A by Euromoney</span>
                    <p class="card-text">Euromoney has named Goldman Sachs as the World's Best Investment Bank for M&A in the annual Awards for Excellence. As the #1 M&A advisor in the world, we are proud to have been recognized.</p>
                    <a href="#" class="btn btn-outline-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <img class="card-img-top" src="https://www.goldmansachs.com/what-we-do/investment-banking/insights/articles/global-ma-in-2h-2025/2h16x9.jpg" alt="Card image">
                <div class="card-body px-0">
                    <span class="card-title">Projections for Strong M&A Market in 2H 2025</span>
                    <p class="card-text">We expect a robust M&A market for the second half of the year. Read our report, “Global M&A: A Bold Path for Strategic Growth,” which highlights record deals year-to-date.</p>
                    <a href="#" class="btn btn-outline-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
/* --- Default Styles --- */
/* Base Headings */
/* h1 {
    font-family: "GS Sans", "Trebuchet MS", sans-serif;
    font-size: 64px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: -0.5px;
    color: rgba(0, 0, 0, 0.95);
} */

span.card-title {
    font-family: "GS Sans Condensed", "Trebuchet MS", sans-serif;
    font-size: 30px;
    font-weight: 500;
    /* line-height: 1.1;
    letter-spacing: -0.5px;
    color: rgba(0, 0, 0, 0.95); */
}

.card-text {
    font-size: 18px;
    color: rgba(0, 0, 0, 0.8);
}

/* Full-width Image without Margins */
.card-img-top {
    width: 100%;
    display: block;
    margin: 0;
    padding: 0;
    object-fit: cover;
    border-radius: 0;
}

/* Adjust card body padding for larger screens */
/* .card-body {
    padding: 1.5rem;
} */

/* Tablet (≤ 991px) */
@media (max-width: 991.98px) {
    h1 {
        font-size: 40px;
        line-height: 1.2;
        letter-spacing: -0.2px;
    }

    h5.card-title {
        font-size: 34px;
        line-height: 1.2;
        letter-spacing: -0.2px;
    }

    /* .card-body {
        padding: 1.5rem;
    } */
}

/* Custom Media Query for Mobile (max-width: 767.98px) to go full-width with minimal spacing */
@media (max-width: 767.98px) {
    /* Apply minimal horizontal padding to the container */
    .container-fluid {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    /* Remove the default row gutter margins for this custom row */
    .mobile-full-width-row {
        margin-left: -1rem;
        margin-right: -1rem;
    }

    /* Make each card take up the full width of the padded container */
    .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
        /* The padding here is what creates the spacing on the left/right of the card container */
        /* padding-left: 1rem;
        padding-right: 1rem; */
    }

    /* Add space between the full-width cards */
    .mobile-full-width-row > .col-md-4 {
        margin-bottom: 2rem;
    }
    
    /* Ensure the card image itself goes edge-to-edge within its padded column */
    .card-img-top {
        border-radius: 0;
        width: 100%;
    }

    /* ****************************************************** */
    /* THE KEY CHANGE TO ALIGN CONTENT WITH IMAGE */
    /* ****************************************************** */
    .card-body {
        /* On mobile, we use a different padding to align the content with the images.
           The card content now extends to the edges of the card, while the parent
           column provides the spacing. */
        padding: 1rem 0 1.5rem 0; Example: 1rem top, 0 left/right, 1.5rem bottom
    }
    
    .card {
        /* Add a background color to the card body */
        background-color: #fff;
    }

    /* Add padding to the h5, p, and a elements inside the card-body to align them */
    .card-title, .card-text, .btn {
        /* padding-left: 1.5rem;
        padding-right: 1.5rem; */
    }
}

/* Mobile (≤ 575px) */
@media (max-width: 575.98px) {
    h1 {
        font-size: 32px;
        line-height: 1.3;
        letter-spacing: normal;
    }

    h5.card-title {
        font-size: 26px;
        line-height: 1.3;
        letter-spacing: normal;
    }

    .card-body {
        /* Adjusting for the smaller screen size */
        /* padding: 1rem 0 1rem 0; */
    }
}
</style>