@extends('layouts.front')

@section('seo_title', 'Professional CV Writing Services | ' . config('app.name'))
@section('seo_description', 'Get a professionally crafted CV tailored to your career goals. Our expert CV writing services help you stand out to employers and recruiters.')

@section('og_title', 'Professional CV Writing Services')
@section('og_description', 'Get a professionally crafted CV tailored to your career goals. Our expert CV writing services help you stand out to employers and recruiters.')
@section('og_image', asset('template/img/cv-writing.webp'))

@section('twitter_title', 'Professional CV Writing Services')
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
        "name": "CV Writing",
        "item": "{{ route('cv-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} CV Writing Service",
    "image": "{{ asset('template/img/cv-writing.webp') }}",
    "description": "Professional CV writing services to create tailored, impactful CVs that highlight your skills and experience for job applications.",
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
                    <h1 class="">CV Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">CV Writing</li>
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
                    <h2 class="heading-title">Expert CV Writing Services In Dubai <span>to Land Your Dream Job</span></h2>
                    <p class="content-simple-p mb-0">Elevate your career with our expert CV writing service and professional resume writing services in the UAE. We are trusted, top-rated CV writers who help job seekers to land interviews fast. We also offer personalised resume writing services according to your occupation and interests.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Want to get noticed by UAE employers? Our UAE CV Experts are just one click away to assist you in making a powerful first impression. Our resume writing services are designed to boost your career profile by showing your strengths and capabilities.</p>
                    <p>Whether you're targeting government jobs, private sector positions, or international roles, we tailor your CV to meet employer expectations. Our experienced resume writers have a deep understanding of the UAE job market and personalise every resume to suit your targeted industry standards and employer expectations.</p>
                    <p>We ensure to highlight your skills, experience, and career goals with precision. From fresh graduates to C-level executives that align with your career aspirations.</p>
                    <p>Choose our <strong>resume writing services</strong> today and stand out with a professional CV that opens doors to new opportunities.</p>
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="main-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/cv-writing.webp') }}" class="img-fluid w-100" alt="CV Writing Services">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Why Choose Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span>CV Writing Services?</span></h2>
                    <p class="content-simple-p mb">Choosing our service means choosing excellence, professionalism, and results.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-globe" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Local Expertise with Global Standards</h4>
                    <p>Our services are led by professionals who have a deep knowledge of the UAE job market. We align your CV with employer expectations while following international resume standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-check" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Certified Resume Writers in Dubai</h4>
                    <p>Our team includes highly experienced resume writers in Dubai skilled in crafting resumes that pass applicant tracking systems (ATS) and impress recruiters across all industries.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-file-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Tailored, Keyword-Optimized Documents</h4>
                    <p>We don’t use templates. Every CV and resume is uniquely written based on your goals. Our team ensures your documents are fully customised and ATS-friendly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Types of Resumes Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Types of Resumes <span>We Offer</span></h2>
                    <p class="content-simple-p mb">We offer a wide range of resume writing services to fit every career stage.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Entry-Level Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our CV writing service in UAE highlights your strengths, skills, and education, which are essential for fresh graduates to impress employers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-briefcase" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Professional Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We craft tailored resumes, ideal for experienced professionals, that reflect your expertise, achievements, and career growth for top-tier job roles.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Executive Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Designed for senior-level executives. Our expert resume writers in Dubai create compelling resumes that showcase leadership, strategic impact, and measurable business accomplishments.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-exchange-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Career Change Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Switching careers? Our CV writing service in Dubai helps reframe your experience to match your new industry, emphasizing transferable skills and future potential.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-building" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Government Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Need a federal role in UAE? Our resume writing services meet strict application requirements and present your qualifications in compliance with UAE government job standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Academic/Research Resume Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">For scholars, researchers, or academic positions. Our resume writing services in UAE highlight your publications, research projects, and academic achievements with precision and clarity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CV Writing Process Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our CV Writing <span>Process</span></h2>
                    <p class="content-simple-p mb">We follow a structured process to ensure top-quality results.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Consultation & Brief Collection</h5>
                    <p>We collect your career details, goals, and preferences through a brief or direct consultation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Writing & Keyword Optimization</h5>
                    <p>Our expert resume writers in Dubai craft your CV with relevant keywords for ATS systems.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Review & Revisions</h5>
                    <p>We share the draft for feedback. We offer unlimited revisions to ensure your satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Final Delivery</h5>
                    <p>The final resume is delivered in Word and PDF formats—ready to impress recruiters.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@section('additional_head')
<style>
.feature-box, .process-step, .service-boxes {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-box:hover, .process-step:hover, .service-boxes:hover {
    transform: translateY(-5px);
}

.feature-icon, .service-icon {
    margin-bottom: 1rem;
}

.feature-icon i, .service-icon i {
    font-size: 2.5rem;
    color: var(--primary-color);
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