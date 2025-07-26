@extends('layouts.front')
<style>
    .insect-box{
        width:100%;
        text-align:left;
    }
    </style>
@section('seo_title', 'Professional Academic Editing and Consulting Services | ' . config('app.name'))
@section('seo_description', 'Get expert help you need to make your academic writing stand out. Our custom editing and consulting services provide personalised feedback to help you reach your goals.')
@section('og_title', 'Getting Best Custom Academic Editing and Consulting Services')
@section('og_description', 'An academic writing service is the best solution when you want to prepare a custom paper for academics. We make plagiarised free content with minimal charges')
@section('og_image', asset('template/img/writing-service.webp'))
@section('twitter_title', 'Getting Best Custom Academic Editing and Consulting Services')
@section('twitter_site', '@assignmenthelp')
@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ route('home') }}"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "Academic Writing Services",
        "item": "{{ route('academic-writing-services') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }}",
    "image": "{{ asset('template/img/ab.webp') }}",
    "description": "Professional assignment writing services providing high quality essay writing, assignment writing & proofreading services to students. We have a team of qualified writers who will help you to score good grades.",
    "brand": {
        "@type": "Brand",
        "name": "{{ config('app.name') }}"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "ratingCount": "181",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>
@endsection
@section('content')
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="">Academic Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Academic Writing Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Custom Academic Editing and <span>Consulting Services</span></h2>
                    <p class="content-simple-p mb-0">Want to excel in your career and get a degree with good grades? Well, our experts will help you by providing custom academic and consulting services.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>If you're looking for a reliable and experienced academic research company to help with your assignments, look no further than us. We're the leading provider of student essay editing and consulting services and have been helping students like you for many years. We're committed to providing the best possible service to our customers, so you can rest assured that you'll get top quality work from us.</p>
                    
                    <p>We're proud to be one of the most popular choices for students worldwide, and we only employ the best authors and consultants in the market. Our <b>academic writing services</b> and consulting team include specialists in most subjects. We offer help at all levels - from subject creation and editing to proofreading and consultancy for fully-written papers.</p>
                    
                    <p>Our consultants are experienced editors with degrees (minimum 2:1 up to master and PhD). We will provide you with guidance from a properly experienced and qualified author who meets the required assessment criteria.</p>
                    
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="main-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/writing-service.webp') }}" class="img-fluid w-100" alt="Academic Writing Services">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Academic Subjects Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Academic <span>Subjects</span></h2>
                    <p class="content-simple-p mb">Get expert assistance across a wide range of academic disciplines. Our specialized writers cover all major subjects to help you excel in your studies.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Business Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional business essay writing services for all business-related subjects and topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="business-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Economics Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert economics essay assistance covering all aspects of economic theory and application.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="economics-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Finance Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive finance essay writing services for all finance-related academic topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="finance-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Marketing Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Specialized marketing essay writing services for all marketing concepts and strategies.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="marketing-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Management Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional management essay writing assistance for all management disciplines.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="management-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Engineering Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert engineering essay writing services covering all engineering disciplines.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="engineering-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-heartbeat"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Medicine Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional medicine essay writing services for all medical and healthcare topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="medicine-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-balance-scale"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Law Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert law essay writing services covering all legal disciplines and topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="law-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Psychology Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive psychology essay writing services for all psychological topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="psychology-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Sociology Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional sociology essay writing services for all sociological topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="sociology-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Literature Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert literature essay writing services for all literary analysis and criticism.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="literature-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>History Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive history essay writing services for all historical periods and topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="history-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-landmark-flag"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Political Science Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional political science essay writing services for all political topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="political-science-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Environmental Science Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert environmental science essay writing services for all ecological topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="environmental-science-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Computer Science Essay Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive computer science essay writing services for all CS topics.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="computer-science-essay-help">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span>Academic Writing Services?</span></h2>
                    <p class="content-simple-p mb">Our academic writing services are designed to help you achieve excellence in your studies with professional support and guidance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our team consists of qualified academic writers with advanced degrees in their respective fields.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We understand the importance of deadlines and ensure all work is completed on time.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>100% Original</h4>
                    <p>All our work is completely original and plagiarism-free, guaranteed to meet academic standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Writing Services Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Writing <span>Services</span></h2>
                    <p class="content-simple-p mb">Achieve your academic and career goals by taking affordable and high-quality services from well-educated and experienced experts. Excel in your career through our following services.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Essay Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional essay writing services that meet academic standards and help you achieve better grades with well-researched content.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('essay-writing') }}" aria-label="essay-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Report Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive report writing services with proper structure, analysis, and professional presentation for all academic levels.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('report-writing') }}" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Coursework Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert coursework writing assistance that covers all aspects of your curriculum with detailed research and analysis.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('course-work') }}" aria-label="coursework-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Assignment Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional assignment writing services that help you complete your academic tasks with excellence and precision.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('assignment-writing') }}" aria-label="assignment-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-receipt"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Literature Review Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive literature review writing that synthesizes existing research and provides critical analysis for your academic work.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('literature-review-writing') }}" aria-label="literature-review">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>CV Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional CV writing services that highlight your skills and experience to help you stand out in the job market.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('cv-writing') }}" aria-label="cv-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Writing <span>Process</span></h2>
                    <p class="content-simple-p mb">We follow a systematic approach to ensure high-quality academic writing that meets your requirements.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Order Placement</h5>
                    <p>Submit your requirements and provide all necessary details about your assignment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign the most suitable expert writer based on your subject and requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Writing & Research</h5>
                    <p>Our expert conducts thorough research and writes your assignment following academic standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We review, edit, and proofread your work to ensure it meets the highest quality standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section -->
<div class="slideshow-container section" style="background: #f1f1f1;">
    <div class="simple">
        <br>
        <h2 class="heading-title">What our Clients have to Say <span>About Us</span></h2>
    </div>
    <div class="mySlides" style="display: block;">
        <q>I am lucky to find awesome assignment writers like these. It was a blessing in disguise.</q>
        <div class="img"><img src="{{ asset('template/img/benjamin.jpg') }}" class="testi-img-size" alt="Benjamin"></div>
        <p class="author">- Benjamin</p>
        <div class="star-ratting home-star-ratting">
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
        </div>
    </div>
    <div class="mySlides" style="display: none;">
        <q>The team provides such a satisfactory and transparent service and I'm flattered after seeing their dedication and quality. I would recommend this to others.</q>
        <div class="img"><img src="{{ asset('template/img/samuel.jpg') }}" class="testi-img-size" alt="Samuel"></div>
        <p class="author">- Samuel</p>
        <div class="star-ratting home-star-ratting">
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
        </div>
    </div>
    <div class="mySlides" style="display: none;">
        <q>Thanks to the team for helping me to clear my doubts regarding the topic and delivering a mindblowing assignment. I passed with flying colours in my degree.</q>
        <div class="img"><img src="{{ asset('template/img/gregory.jpg') }}" class="testi-img-size" alt="Gregory"></div>
        <p class="author">- Gregory</p>
        <div class="star-ratting home-star-ratting">
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
            <i class="fa fa-star yellow" aria-hidden="true"></i>
        </div>
    </div>
    <div class="conatainer" align="center">
        <a href="#" class="main-btn">Read More</a>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
</div>
@endsection
@section('additional_head')
<style>
/* Insect-like boxes styling - 0px height with book icon */
.insect-box {
    background: #fff;
    padding: 0.75rem 0.5rem;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid #eaeaea;
    display: flex;
    align-items: center;
}

.insect-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

/* Book icon */
.insect-box .service-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: rgba(0,0,0,0.05);
    margin: 0 auto;
}

.insect-box .service-icon i {
    font-size: 1.2rem;
    color: var(--primary-color);
}

.service-title h4 {
    font-size: 0.9rem;
    font-weight: 600;
    text-align: center;
    margin-top: 0.5rem;
    color: #333;
}

.order-box {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
}

.order-box .service-icon {
    background-color: rgba(255,255,255,0.2);
}

.order-box .service-icon i {
    color: white;
}

.order-box .service-title h4 {
    color: white;
}
</style>
<script>
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}
// Auto slide
setInterval(function() {
    plusSlides(1);
}, 5000);
</script>
</style>

@endsection