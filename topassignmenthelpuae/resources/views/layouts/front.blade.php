<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('seo_title', config('app.name', 'Laravel'))</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('seo_description', 'Professional assignment writing services by top UAE writers. Get high-quality essays, dissertations, and academic help with guaranteed grades.')" />
    
    <!-- Open Graph data -->
    <meta property="og:title" content="@yield('og_title', config('app.name', 'Laravel'))" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('template/img/feature-1.webp'))" />
    <meta property="og:description" content="@yield('og_description', 'Professional assignment writing services by top UAE writers')" />
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}" />
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yield('twitter_site', '@laravel')" />
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name', 'Laravel'))">
    
    <link rel="canonical" href="{{ url()->current() }}" />
    
    @yield('structured_data')
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('template/apple-touch-icon-120x120-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('template/apple-touch-icon-152x152-precomposed.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/img/favicon.png') }}">
    <style>
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.2rem;
        }
        .login-area{
            padding:50px; 
            margin-bottom:50px;
        }
        .form-group{
            margin-bottom:20px;
        }
        .form-control{
            background-color:#fff;
            border-radius:0px 10px;
        }
        .btn-primary, .topbar-btn, button, .step-number, .main-btn{
            background-color:#F17D00 !important;
            border-color:#F17D00 !important;
        }
        .btn-outline-primary{
            color:#000;
            border-color:#F17D00 !important;
        }
        .service-title h4{
            color:#F17D00 !important;
        }
        
        .service-icon i{
            color:#F17D00 !important;
        }
        
        .service-link a{
            color:#F17D00 !important;
        }
        
        
            
        
    </style>
    
    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T4X5JNKB4R"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-T4X5JNKB4R');
        </script>
        
        
    @yield('additional_head')
</head>

<body>
    <!-- TOPBAR START -->
    <div class="topbar py-2 d-lg-block bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 col-lg-12">
                    <ul class="list-unstyled d-flex align-items-center ul-design">
                        <li class="top-header-home-phone">
                            <a href="tel:+971-123456789" class="topbar-call d-flex align-items-center top-header-home">
                                <i class="fa-solid fa-phone"></i>
                                +971 -123456789
                            </a>
                        </li>
                        <li class="header-contact-p">
                            <p class="mb-0">
                                <span style="font-size:14px;color:#fff">
                                    <a href="https://api.whatsapp.com/send?phone=971123456789&text=Hi%20we%20need%20help%20regarding%20something" target="_blank" rel='noreferrer'>
                                        <i style="margin-left: 15px; background: #F17D00 ; width: 31px; height: 31px; text-align: center; line-height: 31px; border-radius: 32px;" class="fab fa-whatsapp me-2"></i>
                                    </a> 
                                    <strong>
                                        <span class="top-header-home">Connect On</span> 
                                        <a href="https://api.whatsapp.com/send?phone=971123456789&text=Hi%20we%20need%20help%20regarding%20something" target="_blank" rel='noreferrer'>WHATSAPP : +971 123456789</a>
                                    </strong>
                                    <span class="top-header-home">, Uninterrupted Access 24x7, 100% Confidential. </span>
                                    <span class="crs_btn" style="background: #F17D00 ; padding: 6px; border-radius: 5px; position: relative; overflow: hidden; display: inline-flex;">
                                        <a href="https://api.whatsapp.com/send?phone=971123456789&text=Hi%20we%20need%20help%20regarding%20something" target="_blank" rel='noreferrer'> 
                                            <span></span> Connect Now
                                        </a>
                                    </span>
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-1 col-lg-12">
                    <div class="topbar-icons float-end top-header-home">
                        <ul class="list-unstyled d-flex top-icon-center">
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TOPBAR END -->

    <!-- HEADER START -->
    <div class="header sticky-top" id="myHeader">
        <nav class="navbar navbar-expand-xl navbar-light bg-light bg-transparent">
            <div class="container">
                <a class="navbar-brand img-logos" href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="" style="max-height: 50px; width: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars-staggered"></i></span>
                </button>
                <div class="collapse navbar-collapse submenu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('academic-writing-services') }}" class="nav-link item-menu-click {{ request()->routeIs('academic-writing-services') ? 'active' : '' }}">Writing</a>
                            <span class="toggle"><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu submenu">
                                <li><a class="dropdown-item" href="{{ route('essay-writing') }}">Essay Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('report-writing') }}">Report Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('course-work') }}">Coursework Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('assignment-writing') }}">Assignment Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('literature-review-writing') }}">Literature Review</a></li>
                                <li><a class="dropdown-item" href="{{ route('cv-writing') }}">CV Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('academic-writing-services') }}">Writing Consultant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('services') }}" class="nav-link item-menu-click {{ request()->routeIs('services') ? 'active' : '' }}">Dissertation</a>
                            <span class="toggle"><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('dissertation-topic-outline') }}">Dissertation Topic and Outline</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-proposal-writing') }}">Dissertation Proposal</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-thesis-writing') }}">Dissertation (Full)</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-part-chapter-writing') }}">Dissertation Part or Chapter</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-editing-improvement-proofreading') }}">Dissertation Editing and Improvement</a></li>
                                <li><a class="dropdown-item" href="{{ route('dissertation-statistical-services') }}">Statistical Services for Dissertations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('other-services') }}" class="nav-link item-menu-click {{ request()->routeIs('other-services') ? 'active' : '' }}">Other Services</a>
                            <span class="toggle"><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('editing-proofreading-improvement-service') }}">Editing, Improvement and Proofreading</a></li>
                                <li><a class="dropdown-item" href="{{ route('accounting-subject') }}">Accounting Subject</a></li>
                                <li><a class="dropdown-item" href="{{ route('finance-subject') }}">Finance Subject</a></li>
                                <li><a class="dropdown-item" href="{{ route('model-answer-writing') }}">Model Answer</a></li>
                                <li><a class="dropdown-item" href="{{ route('exam-notes') }}">Exam Notes</a></li>
                                <li><a class="dropdown-item" href="{{ route('assignment-help') }}">Economics Assignment Help</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('about') }}" class="nav-link item-menu-click {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                            <span class="toggle"><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('whyus') }}">Why Us</a></li>
                                <li><a class="dropdown-item" href="{{ route('guarantees') }}">Guarantees</a></li>
                                <li><a class="dropdown-item" href="{{ route('testimonial') }}">Testimonial</a></li>
                                <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                                <li><a class="dropdown-item" href="{{ route('contactus')}}">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link item-menu-click {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">All Services</a>
                            <span class="toggle"><i class="fa-solid fa-angle-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('basic-subjects') }}">Basic Subjects</a></li>
                                <li><a class="dropdown-item" href="{{ route('management-subjects') }}">Management Subjects</a></li>
                                <li><a class="dropdown-item" href="{{ route('editing-and-proofreading') }}">Editing and Proofreading</a></li>
                                <li><a class="dropdown-item" href="{{ route('other-subjects') }}">Other Subjects</a></li>
                                <li><a class="dropdown-item" href="{{ route('spss-help') }}">SPSS Assignment Help</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('free-samples') ? 'active' : '' }}" href="{{ route('free-samples') }}">Samples</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <!-- Authentication Links -->
                        @guest
                            <div class="me-3">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">
                                    <i class="fa-solid fa-sign-in-alt"></i> Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm me-2">
                                        <i class="fa-solid fa-user-plus"></i> Register
                                    </a>
                                @endif
                            </div>
                        @else
                            <div class="dropdown me-3">
                                <a class="btn btn-outline-success btn-sm dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-sign-out-alt"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                        <a href="{{ route('order-now') }}" class="topbar-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- HEADER END -->

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER START -->
    <section class="footer-cta">
        <div class="container">
            <div class="row">
                <div class="lg-cta-banner d-flex justify-content-between align-items-center footer-cta-padding">
                    <div class="cta-banner-title">
                        <h2 style="font-size: 24px;">Searching For High-Quality Assignment help?</h2>
                    </div>
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="pt-5">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-6 col-xl-4 footer-content col-12">
                    <h2 style="font-size: 24px; color: white;" class="f-service">Services</h2>
                    <div class="footer-ul-style d-flex">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('academic-writing-services') }}">Essay Writing</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('academic-writing-services') }}">Report Writing</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Poster Service</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('academic-writing-services') }}">Assignment Writing</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('academic-writing-services') }}">CV Writing</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Thesis Help</a></li>
                        </ul>
                        <ul class="list-unstyled side-ul-space">
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('other-services') }}">Finance Assignment</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('other-services') }}">Economics Assignment</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('other-services') }}">Accounting Assignment</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Presentations Service</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Dissertation Writing</a></li>
                            <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Nursing Dissertation Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 footer-content col-6">
                    <h2 style="font-size: 24px; color: white;">Others</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('terms-services') }}">Terms & Conditions</a></li>
                        <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                        <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Testimonial</a></li>
                        <li><i class="fa-solid fa-caret-right"></i><a href="{{ route('services') }}">Discounts</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xl-3 col-6">
                    <h2 style="font-size: 24px; color: white;">Follow Us</h2>
                    <ul class="footer-icons list-unstyled">
                        <li><a target="_blank" href="https://www.facebook.com/" aria-label="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/" aria-label="linkedin"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/" aria-label="pinterest"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/" aria-label="youtube"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xl-3 footer-content col-12">
                    <h2 style="font-size: 24px; color: white;" class="text-center-home">Subscribe Us</h2>
                    <div class="mb-3 col">
                        <!-- Display flash messages -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                        <form action="{{ route('subscribe-newsletter') }}" method="post" class="newsletter-form">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email Address *</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-0">
            <div class="col-12">
                <hr class="hr-border-bottom">
                <p class="text-center text-white hr-p">
                    DISCLAIMER: The work we provide is for reference purposes. We strictly follow the rule of not providing assignments as finalised work. But you can take help from our work.
                </p>
            </div>
        </div>
    </section>
    <!-- FOOTER END -->

    <!-- COPYRIGHT START -->
    <div class="copyright bg-blue py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center text-white copyright-content m-auto">
                    <p class="m-0">© {{ date('Y') }} {{ config('app.name', 'Laravel') }} | All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT END -->

    <!-- Back to top button -->
    <div class="top-button">
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script>
        // Back to top functionality
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        
        // Show/hide back to top button
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        };
        
        // Owl Carousel initialization
        (function($) {
            $(document).ready(function() {
                if (typeof $.fn.owlCarousel === 'undefined') {
                    console.error('Owl Carousel plugin is not loaded.');
                } else {
                    $('.owl-carousel').owlCarousel({
                        loop: true,
                        margin: 10,
                        responsiveClass: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,
                        responsive: {
                            0: { items: 1, nav: false },
                            600: { items: 2, nav: false },
                            1000: { items: 3, nav: false }
                        }
                    });
                }
            });
        })(jQuery);
    </script>
    
    @yield('additional_scripts')
</body>
</html>