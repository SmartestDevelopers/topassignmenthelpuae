@extends('layouts.front')

@section('seo_title', 'Coursework Writing Services | ' . config('app.name'))
@section('seo_description', 'Professional coursework writing services to help you excel in your academic journey. Get customized coursework tailored to your requirements.')

@section('og_title', 'Coursework Writing Services')
@section('og_description', 'Professional coursework writing services to help you excel in your academic journey. Get customized coursework tailored to your requirements.')
@section('og_image', asset('template/img/coursework.webp'))

@section('twitter_title', 'Coursework Writing Services')
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
        "name": "Coursework Writing",
        "item": "{{ route('course-work') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Coursework Writing Service",
    "image": "{{ asset('template/img/coursework.webp') }}",
    "description": "High-quality coursework writing services for students across all academic levels and subjects, ensuring timely delivery and academic excellence.",
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
                    <h1 class="">Coursework Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Coursework Writing</li>
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
                    <h2 class="heading-title">Expert Coursework <span>Writing Services</span></h2>
                    <p class="content-simple-p mb-0">Excel in your academic journey with our professional coursework writing services, tailored to your curriculum.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Struggling with complex coursework assignments? Our coursework writing services provide customized, high-quality solutions to help you succeed academically. We are a trusted provider with years of experience supporting students worldwide.</p>
                    
                    <p>Our team of expert writers specializes in various subjects, delivering well-researched and structured coursework that meets your academic requirements. From sciences to humanities, we ensure adherence to guidelines and citation styles.</p>
                    
                    <p>Our writers hold advanced degrees (minimum 2:1 up to Master and PhD) and are experienced in crafting coursework that meets rigorous academic standards.</p>
                    
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="main-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/coursework.webp') }}" class="img-fluid w-100" alt="Coursework Writing Services">
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
                    <h4 style="line-height: 35px;">We provide expert coursework writing services, including research, writing, and formatting for all academic levels and subjects.</h4>
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
                    <h2 class="heading-title">Why Choose Our <span>Coursework Writing Services?</span></h2>
                    <p class="content-simple-p mb">Our coursework writing services ensure high-quality, customized assignments to boost your academic performance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-book" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Subject Expertise</h4>
                    <p>Our writers specialize in a wide range of subjects to deliver accurate coursework.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Original Content</h4>
                    <p>All coursework is written from scratch, ensuring originality and academic integrity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We prioritize your deadlines to ensure you receive your coursework on time.</p>
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
                    <p class="content-simple-p mb">Explore our range of academic and professional writing services to support your career and academic goals.</p>
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
                    <h2 class="heading-title">Our Coursework Writing <span>Process</span></h2>
                    <p class="content-simple-p mb">We follow a systematic approach to ensure high-quality coursework that meets your academic requirements.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Order Placement</h5>
                    <p>Submit your coursework requirements, including subject and guidelines.</p>
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
                    <p>Our expert conducts thorough research and writes your coursework.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We review, edit, and proofread your coursework to ensure high quality.</p>
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
        <q>The coursework writing service was outstanding. My assignment was well-researched and delivered on time!</q>
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
        <q>The team provided a detailed and professional coursework that helped me score high grades. Highly recommend!</q>
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
        <q>Thanks to their coursework writing service, I submitted a top-quality assignment that impressed my professor.</q>
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
    <div class="container" align="center">
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