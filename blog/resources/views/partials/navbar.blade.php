<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Azerbaijan Development Fund City</title>


    <style>
        /* === Navbar Styles === */
        .custom-nav-items {
            padding: 30px 4px;
            border-bottom: 2px solid transparent;
        }

        .custom-nav-items:hover {
            border-color: skyblue;
        }

        .other-nav-link:hover {
            text-decoration: underline;
            text-decoration-color: gray;
            color: gray !important;
        }

        .mega-dropdown {
            position: static;
        }

        .mega-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            border-top: 1px solid #e5e5e5;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            padding: 2rem 0;
            display: none;
            z-index: 1000;
        }

        .mega-title {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .mega-menu a {
            text-decoration: none;
            color: #666;
            font-size: 13px;
        }

        .mega-menu a:hover {
            color: #0066cc;
        }

        @media (min-width: 1200px) {
            .mega-dropdown:hover .mega-menu {
                display: block;
            }
        }

        @media (max-width: 991.98px) {
            .mega-menu {
                position: static;
                width: 100%;
                box-shadow: none;
                border: none;
                padding: 1rem 0;
                display: none;
            }

            .mega-dropdown.show .mega-menu {
                display: block;
            }
        }

        /* === Search Bar Styles === */
        #searchBar {
            height: 200px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #fff;
            border-bottom: 1px solid #ddd;
            padding: 16px 30px;
            display: none;
            align-items: center;
            /* gap: 8px; */
            z-index: 99999;
        }

        #searchBar input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 16px;
            border-bottom: 2px solid black;
        }

        #searchBar.show {
            display: block;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="w-100 position-relative">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top shadow-sm p-0 z-index-1">
            <div class="container-fluid">
                <!-- Hamburger -->
                <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logo -->
                <a href="{{ route('home') }}" class="navbar-brand ms-2">
                    <img src="/images/main-logo.png" alt="Logo" style="width: 80px; height: 80px;"
                        class="img-fluid" />
                </a>

                <!-- Nav Items -->
                <div class="collapse navbar-collapse justify-content-between mx-5" id="navbarNav">
                    <!-- Left: Mega Menus (unchanged for brevity) -->
                    <ul class="navbar-nav">
                        <!-- What We Do -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link text-white custom-nav-items" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                What We Do
                            </a>
                            <div class="mega-menu dropdown-menu p-4 py-xl-4 border-0 show-on-mobile">
                                <div class="container">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-3">
                                            <h6 class="mega-title">GLOBAL BANKING & MARKETS</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('investment.banking') }}">Investment Banking</a>
                                                </li>
                                                <li><a href="{{ route('ficc.equities') }}">FICC and Equities</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="mega-title">PLATFORM SOLUTIONS</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('enterprise.partnerships') }}">Enterprise
                                                        Partnerships</a></li>
                                                <li><a href="{{ route('transaction.banking') }}">Transaction Banking</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="mega-title">RESEARCH & PERSPECTIVES</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('research') }}">Global Investment Research</a>
                                                </li>
                                                <li><a href="{{ route('institute') }}">Global Institute</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Insights -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link text-white custom-nav-items" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                Insights
                            </a>
                            <div class="mega-menu dropdown-menu  p-4 py-xl-4 border-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="mega-title">OUR SERIES</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Exchanges</a></li>
                                                <li><a href="#">The Markets</a></li>
                                                <li><a href="#">Talks at GS</a></li>
                                                <li><a href="#">Top of Mind</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="mega-title">TOPICS IN FOCUS</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Outlooks</a></li>
                                                <li><a href="#">Markets</a></li>
                                                <li><a href="#">Macroeconomics</a></li>
                                                <li><a href="#">Artificial Intelligence</a></li>
                                                <li><a href="#">Alternative and Private Markets</a></li>
                                                <li><a href="#">IPOs and M&A</a></li>
                                                <li><a href="#">Europe</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="mega-title">FORMATS</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Videos</a></li>
                                                <li><a href="#">Podcasts</a></li>
                                                <li><a href="#">Articles</a></li>
                                                <li><a href="#">Reports</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Our Firm -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link text-white custom-nav-items" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                Our Firm
                            </a>
                            <div class="mega-menu dropdown-menu p-4 py-xl-4 border-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="mega-title">About Us</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('our.people.and.leadership') }}">Our People and
                                                        Leadership</a></li>
                                                <li><a href="{{ route('our.firm.history') }}">156 Years of
                                                        Excellence</a></li>
                                                <li><a href="{{ route('our.firm.community.impact') }}">Community
                                                        Impact</a></li>
                                                <li><a href="{{ route('our.firm.sustainable.finance') }}">Our Focus on
                                                        Sustainability</a></li>
                                                <li><a href="{{ route('our.firm.our.vendor.program') }}">Our Vendor
                                                        Program</a></li>
                                                <li><a href="{{ route('our.firm.partnership') }}">Partnerships</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>

                    <!-- Right: Search + Links -->
                    <ul class="navbar-nav align-items-center gap-2">
                        <li class="nav-item"><a class="nav-link text-white other-nav-link"
                                href="{{ route('investor.relation') }}">Investor
                                Relations</a></li>
                        <li class="nav-item"><a class="nav-link text-white other-nav-link"
                                href="{{ route('blog.index') }}">Pressroom</a></li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)" onclick="toggleSearchBar()">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-light text-dark">Admin Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

       <div id="searchBar">
    <div style="width: 100%; height: auto;">
        <h1 class="text-h1">Search</h1>
    </div>

    <!-- Wrap in a form -->
    <form action="{{ route('search') }}" method="GET" style="width: 100%; height: auto; display: flex;">
        <i class="bi bi-search"></i>

        <!-- Add name="q" so query passes to controller -->
        <input type="text" name="q" placeholder="Search..." required />

        <button type="submit" class="btn btn-sm btn-outline-secondary ms-4">Search</button>
        <button type="button" class="btn btn-sm btn-outline-danger ms-2" onclick="toggleSearchBar()">Close</button>
    </form>
</div>

    </div>

    <script>
        const toggleSearchBar = () => {
            const searchBar = document.getElementById('searchBar');
            searchBar.classList.toggle('show');

            // Autofocus input when opening
            if (searchBar.classList.contains('show')) {
                searchBar.querySelector('input').focus();
            }
        };
    </script>
</body>

</html>
