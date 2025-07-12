@extends('layouts.front')

@section('seo_title', 'Professional Writing and Editing Services | ' . config('app.name'))
@section('seo_description', 'Get affordable assistance with all types of assignments, including writing, dissertations, editing, and proofreading. Our professional team is here to help you achieve academic success.')

@section('og_title', 'Professional Writing and Editing Services')
@section('og_description', 'Get affordable assistance with all types of assignments, including writing, dissertations, editing, and proofreading. Professional academic services for students.')
@section('og_image', asset('template/img/editing-proofreading-improvement.webp'))

@section('twitter_title', 'Professional Writing and Editing Services')
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
        "name": "Services",
        "item": "{{ route('services') }}"
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
<!-- BANNER START -->
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our <span>Services</span></h2>
                    <p class="content-simple-p mb">{{ config('app.name') }} provides various types of services to help you excel in your career. The following are some examples of it.</p>
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
                        <h4>Academic Assignment Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">When searching for students Assignment Consulting service, it is essential that you choose the best company which offers incomparable customer support and provides only high quality guaranteed services with experienced writers.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="academic-writing-services">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Dissertation Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Dissertation is playing a very important role in student's life if he/she is in research field. Nowadays many of the institutes whether of management or technical studies have made it compulsory to create comprehensive dissertations.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="dissertation-services">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-edit"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Editing & Proofreading</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our professional editing and proofreading services ensure your documents are error-free, well-structured, and meet the highest academic standards. We focus on grammar, style, and clarity.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="editing-proofreading">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Essay Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our expert writers craft compelling essays that meet your specific requirements. From argumentative to descriptive essays, we cover all types with thorough research and proper citations.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="essay-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Report Writing</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional report writing services for business, academic, and technical reports. Our writers ensure proper structure, data analysis, and clear presentation of findings and recommendations.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>CV Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Create a professional CV that stands out to employers. Our CV writing experts help you highlight your skills, experience, and achievements in a compelling format.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="cv-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SUBJECT AREAS -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Subject <span>Areas</span></h2>
                    <p class="content-simple-p mb">We provide expert assistance across a wide range of academic subjects and disciplines</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-calculator" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Mathematics</h5>
                    <p>Statistics, Calculus, Algebra, Geometry</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-flask" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Sciences</h5>
                    <p>Physics, Chemistry, Biology, Environmental Science</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-briefcase" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Business</h5>
                    <p>Management, Marketing, Finance, Economics</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-laptop-code" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Technology</h5>
                    <p>Computer Science, IT, Programming, Engineering</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-book-open" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Literature</h5>
                    <p>English, Creative Writing, Linguistics, Philosophy</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-landmark" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Social Sciences</h5>
                    <p>Psychology, Sociology, History, Political Science</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-balance-scale" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Law</h5>
                    <p>Constitutional Law, Criminal Law, Corporate Law</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subject-box text-center">
                    <div class="subject-icon">
                        <i class="fa-solid fa-heartbeat" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h5>Healthcare</h5>
                    <p>Nursing, Medicine, Public Health, Pharmacy</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE PROCESS -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Service <span>Process</span></h2>
                    <p class="content-simple-p mb">Simple and straightforward process to get your assignments completed</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Submit Requirements</h5>
                    <p>Share your assignment details, requirements, and deadline with us through our simple order form.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Expert Assignment</h5>
                    <p>We assign the most qualified expert in your subject area to work on your assignment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Quality Writing</h5>
                    <p>Our expert researches, writes, and crafts your assignment according to your specifications.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Delivery & Support</h5>
                    <p>Receive your completed assignment on time with free revisions and ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<div class="slideshow-container section" style="background: #f1f1f1;">
    <div class="container">
        <div class="simple">
            <br>
            <h2 class="heading-title">What our Clients have to Say <span>About Us</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
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
                    <q>Team provides such a satisfactory and transparent service and I'm flattered after seeing their dedication and quality. I would recommend this to others.</q>
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
        </div>
    </div>
</div>
@endsection

@section('additional_head')
<style>
.subject-box, .process-step {
    padding: 2rem 1rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.subject-box:hover, .process-step:hover {
    transform: translateY(-5px);
}

.subject-icon {
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

.mySlides {
    text-align: center;
    padding: 2rem;
}

.mySlides q {
    font-size: 1.2rem;
    font-style: italic;
    margin-bottom: 1rem;
    display: block;
}

.author {
    font-weight: bold;
    margin-top: 1rem;
}

.star-ratting {
    margin-top: 0.5rem;
}

.yellow {
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
    transition: 0.6s ease;
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

.slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
}
</style>
@endsection

@section('additional_scripts')
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
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
