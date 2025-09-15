<footer class="gs-footer">
    <div class="container">
        <div class="footer-top d-flex flex-wrap justify-content-between align-items-start">
            <div class="footer-logo mb-4">
                <!-- Your inline SVG logo -->
                <img src="/images/main-logo.png" class="footer-logo"
                    alt="Azerbaijan Investment Bank logo featuring stylized bank icon and bold text Azerbaijan Investment Bank set against a clean background, conveying professionalism and trust">

            </div>
            <div class="footer-links d-flex flex-wrap">
                <div class="footer-col">
                    <h6>OUR BUSINESSES</h6>
                    <ul>
                        <li><a href="{{ route('enterprise.partnerships') }} "
                                class="nav-link text-white other-nav-link">Enterprise
                                Partnerships</a></li>
                        <li><a href="{{ route('transaction.banking') }}"
                                class="nav-link text-white other-nav-link">Transaction Banking</a></li>
                        <li><a href="{{ route('investment.banking') }}"
                                class="nav-link text-white other-nav-link">Investment Banking</a></li>
                        <li><a href="{{ route('ficc.equities') }}" class="nav-link text-white other-nav-link">FICC and
                                Equities</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h6>RESOURCES</h6>
                    <ul>
                        <li><a class="nav-link text-white other-nav-link"
                                href="{{ route('investor.relation') }}">Investor
                                Relations</a></li>
                        <li><a class="nav-link text-white other-nav-link" href="{{ route('blog.index') }}">Pressroom</a>
                        </li>
                        <li><a href="#">Wealth Management</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h6>Insights</h6>
                    <ul>
                        <li><a href="#">Briefings</a></li>
                        <li><a href="#">Podcasts</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">News and Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
            <p class="mb-0">&copy; {{ date('Y') }} Goldman Sachs</p>
            <ul class="footer-policy list-inline mb-0">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Legal</a></li>
                <li class="list-inline-item"><a href="#">Accessibility</a></li>
                <li class="list-inline-item"><a href="#">Cookie Preferences</a></li>
            </ul>
        </div>
    </div>
</footer>


<style>
    .gs-footer {
        background-color: #1d1d1d;
        color: #fff;
        padding: 60px 0 30px;
        font-size: 14px;
        margin-top: 13vw
    }

    .gs-footer .footer-logo svg {
        max-height: 40px;
    }

    .gs-footer .footer-links {
        gap: 40px;
    }

    .footer-logo {
        max-height: 200px;
        width: auto;
    }

    .footer-col h6 {
        color: #ccc;
        margin-bottom: 12px;
        font-weight: bold;
    }

    .footer-col ul {
        list-style: none;
        padding-left: 0;
    }

    .footer-col ul li {
        margin-bottom: 8px;
    }

    .footer-col ul li a {
        color: #ccc;
        text-decoration: none;
    }

    .footer-col ul li a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        border-color: #444;
    }

    .footer-policy a {
        color: #999;
        text-decoration: none;
        margin-left: 16px;
    }

    .footer-policy a:hover {
        color: #fff;
    }
</style>
