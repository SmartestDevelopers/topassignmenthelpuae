@extends('layouts.front')

@section('seo_title', 'Full Dissertation Writing Services | ' . config('app.name'))
@section('seo_description', 'Get expert full dissertation writing services to deliver comprehensive, well-researched dissertations that meet academic standards and achieve success.')

@section('og_title', 'Full Dissertation Writing Services')
@section('og_description', 'Get expert full dissertation writing services to deliver comprehensive, well-researched dissertations that meet academic standards and achieve success.')
@section('og_image', asset('template/img/dissertation-thesis-writing.webp'))

@section('twitter_title', 'Full Dissertation Writing Services')
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
        "name": "Dissertation Writing",
        "item": "{{ route('dissertation-thesis-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Full Dissertation Writing Service",
    "image": "{{ asset('template/img/dissertation-thesis-writing.webp') }}",
    "description": "Professional full dissertation writing services to deliver comprehensive, high-quality dissertations for academic success.",
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
                    <h1 class="text-white">Full Dissertation Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Dissertation Writing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Professional Full <span style="color: #F17D00;">Dissertation Writing Services</span></h2>
                    <p class="content-simple-p mb-0">Complete your dissertation with our expert writing services tailored to your academic needs.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Overwhelmed by your dissertation? Our full dissertation writing services provide comprehensive, well-researched dissertations tailored to your academic requirements. We support students across the UAE and worldwide with years of experience in academic writing.</p>
                    
                    <p>Our team of expert writers specializes in crafting complete dissertations across various disciplines, ensuring thorough research, proper structure, and adherence to your guidelines and citation styles.</p>
                    
                    <p>Our writers hold advanced degrees (minimum 2:1 up to Master and PhD) and are experienced in creating dissertations that meet rigorous academic standards.</p>
                    
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/dissertation-thesis-writing.webp') }}" class="img-fluid w-100" alt="Full Dissertation Writing Services">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section bg-gray py-4">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="about-sm-content">
                    <h4 style="line-height: 35px;">We provide professional full dissertation writing services, including research, writing, and formatting for all academic levels and subjects.</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span style="color: #F17D00;">Dissertation Writing Services?</span></h2>
                    <p class="content-simple-p mb-0">Our services are designed to deliver high-quality, customized dissertations to boost your academic performance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-atom" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our writers are specialists in various disciplines, ensuring high-quality dissertations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>100% Original</h4>
                    <p>All dissertations are written from scratch, ensuring originality and academic integrity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We prioritize your deadlines to ensure you receive your dissertation on time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Writing <span style="color: #F17D00;">Services</span></h2>
                    <p class="content-simple-p mb-0">Explore our range of academic and professional writing services to support your career and academic goals.</p>
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
                        <a href="{{ route('academic-writing-services') }}" aria-label="essay-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="{{ route('academic-writing-services') }}" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="{{ route('academic-writing-services') }}" aria-label="coursework-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="{{ route('academic-writing-services') }}" aria-label="assignment-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="{{ route('academic-writing-services') }}" aria-label="literature-review">Read More <i class="fas fa-angle-double-right"></i></a>
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
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Dissertation Writing <span style="color: #F17D00;">Process</span></h2>
                    <p class="content-simple-p mb-0">We follow a systematic approach to ensure high-quality dissertations that meet your academic requirements.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Order Placement</h5>
                    <p>Submit your dissertation requirements, including topic and guidelines.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign an expert writer based on your subject and requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Writing & Research</h5>
                    <p>Our expert conducts thorough research and crafts your dissertation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We review, edit, and proofread your dissertation to ensure high quality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('additional_head')
<style>
.section-top-banner {
    background-size: cover;
    padding: 4rem 0;
    color: white;
}

.section-top-banner h1 {
    font-size: 2.5rem;
    font-weight: 700;
}

.breadcrumb-item.orange.active {
    color: #F17D00;
}

.about-us.section {
    padding: 4rem 0;
}

.heading-title {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.heading-title span {
    color: #F17D00;
}

.content-simple-p {
    font-size: 1.1rem;
    color: #333;
}

.feature-box, .process-step {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-box:hover, .process-step:hover {
    transform: translateY(-5px);
}

.feature-icon i {
    font-size: 2.5rem;
    color: #F17D00;
    margin-bottom: 1rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: #F17D00;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem;
}

.service-boxes {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.service-boxes:hover {
    transform: translateY(-5px);
}

.service-icon i {
    font-size: 2.5rem;
    color: #F17D00;
}

.service-title h4 {
    color: #F17D00;
    margin-bottom: 1rem;
}

.service-link a {
    color: #F17D00;
    text-decoration: none;
    font-weight: 600;
}

.service-link a:hover {
    color: #000;
}

.bg-gray {
    background: #f1f1f1;
}

.testi-img-size {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin: 1rem auto;
}

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    padding: 3rem 1rem;
}

.mySlides {
    display: none;
    text-align: center;
    padding: 2rem;
}

.mySlides.active {
    display: block;
}

.mySlides q {
    font-style: italic;
    font-size: 1.2rem;
    margin-bottom: 2rem;
    display: block;
}

.mySlides .img {
    margin: 1rem 0;
}

.author {
    font-weight: bold;
    margin: 1rem 0;
}

.star-ratting {
    margin: 1rem 0;
}

.star-ratting .fa-star.yellow {
    color: #ffc107;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.3s ease;
    border-radius: 0 3px 3px 0;
    background-color: rgba(0,0,0,0.5);
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
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
@endsection

@section('additional_scripts')
<!-- No scripts needed here as slideshow logic is in additional_head -->
@endsection