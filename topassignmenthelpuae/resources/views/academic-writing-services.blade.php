@extends('layouts.front')

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

<section class="section bg-gray">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="about-sm-content">
                    <h4 style="line-height: 35px;">We provide a comprehensive range of custom academic essay editing and consulting services including professional writing, editing, and proofreading assistance.</h4>
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
                        <a href="#" aria-label="essay-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="#" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="#" aria-label="coursework-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="#" aria-label="assignment-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="#" aria-label="literature-review">Read More <i class="fas fa-angle-double-right"></i></a>
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
                        <a href="#" aria-label="cv-writing">Read More <i class="fas fa-angle-double-right"></i></a>
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

.feature-icon {
    margin-bottom: 1rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem auto;
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

.service-icon {
    text-align: center;
    margin-bottom: 1rem;
}

.service-icon i {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.service-title h4 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.service-link a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
}

.service-link a:hover {
    color: var(--secondary-color);
}

/* Testimonial Styles */
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

.testi-img-size {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
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
