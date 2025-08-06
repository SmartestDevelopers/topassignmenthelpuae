@extends('layouts.front')

@section('seo_title', 'Professional CIPD Assignment Writing Services | ' . config('app.name'))
@section('seo_description', 'Get expert CIPD assignment writing services for Levels 3, 5, and 7. Our professional writers deliver high-quality, tailored assignments to meet CIPD standards.')

@section('og_title', 'Professional CIPD Assignment Writing Services')
@section('og_description', 'Get expert CIPD assignment writing services for Levels 3, 5, and 7. Our professional writers deliver high-quality, tailored assignments to meet CIPD standards.')
@section('og_image', asset('template/img/cipd-assignment-writing.webp'))

@section('twitter_title', 'Professional CIPD Assignment Writing Services')
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
        "name": "CIPD Assignment Writing",
        "item": "{{ route('assignment-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} CIPD Assignment Writing Service",
    "image": "{{ asset('template/img/cipd-assignment-writing.webp') }}",
    "description": "Professional CIPD assignment writing services delivering tailored, high-quality assignments for Levels 3, 5, and 7 to meet academic and CIPD standards.",
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
                    <h1 class="text-white">CIPD Assignment Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">CIPD Assignment Writing</li>
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
                    <h2 class="heading-title">Professional CIPD Writers <span style="color: #F17D00;">in UAE for Level 3, 5, & 7</span></h2>
                    <p class="content-simple-p mb-0">Having trouble with your CIPD assignments? We provide specific support at Levels 3, 5, and 7. Our skilled HR and L&D writers guarantee that your work satisfies CIPD requirements and is delivered on schedule while maintaining complete confidentiality.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Looking for the best CIPD assignment writing service in UAE? Our expert team delivers tailored support for all CIPD levels—Foundation, Intermediate, and Advanced. Whether it's short tasks or complex modules, our CIPD writers in the UAE guarantee excellent, unique solutions that are in line with your course requirements.</p>
                    <p>Our team understands the academic expectations of local and international institutes. With our timely assistance, you’ll meet deadlines confidently while boosting your chances of academic success across all modules.</p>
                    <p>Trust our dedicated professionals for affordable, accurate, and efficient CIPD assignment help in UAE.</p>
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/assignment-writing.webp') }}" class="img-fluid w-100" alt="CIPD Assignment Writing Services">
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
                    <h4 style="line-height: 35px;">Score A+ with Expert CIPD Level 3, 5, 7 Assignment Help UAE</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span style="color: #F17D00;">CIPD Assignment Help?</span></h2>
                    <p class="content-simple-p mb-0">Our CIPD assignment writing services are designed to deliver high-quality, tailored assignments to boost your academic performance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Level-Specific Expertise</h4>
                    <p>Our writers are well-versed with the CIPD curriculum at all levels—Level 3, 5, and 7—ensuring precision in every submission.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>On-Time & Plagiarism-Free</h4>
                    <p>We guarantee original content with proper referencing and always deliver your assignments before the deadline.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Support from HR & L&D Professionals</h4>
                    <p>Get help from qualified CIPD writers with hands-on experience in HR and Learning & Development practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CIPD Levels Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Score A+ with Expert CIPD <span style="color: #F17D00;">Level 3, 5, 7 Assignment Help UAE</span></h2>
                    <p class="content-simple-p mb-0">Whether you're pursuing CIPD Level 3, Level 5, or Level 7, our experienced team is here to support your academic journey.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>CIPD Level 3 Assignment Answers</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our CIPD Level 3 Assignment answers in UAE provide fundamental support and are completely in line with academic requirements, making them ideal for anyone just starting out in HR or L&D. We make difficult ideas simple and provide thoughtful solutions so you may easily achieve outstanding outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-briefcase" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>CIPD Level 5 Assignment Answers</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Advance your HR career with our professionally written CIPD Level 5 assignment answers. We provide in-depth academic support for mid-level professionals seeking growth in HR and L&D. Get high-quality assignments delivered on time by industry experts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>CIPD Level 7 Assignment Answers</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Trying to get a senior HR position? Our authors provide top-notch CIPD Level 7 assignment answers that are suited to strategic subjects like organisational development and talent management. Obtain thorough, original responses that will make you stand out.</p>
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
                    <h2 class="heading-title">Order Your CIPD <span style="color: #F17D00;">Assignment</span></h2>
                    <p class="content-simple-p mb-0">We follow a systematic approach to ensure high-quality CIPD assignments that meet your academic requirements.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Submit Your Requirements</h5>
                    <p>Send us your CIPD level (3, 5, or 7), module details, and assignment guidelines.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Get Matched with a Professional Writer</h5>
                    <p>We assign your work to a qualified CIPD expert who understands UAE academic standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Writing, Research & Formatting</h5>
                    <p>Our writer conducts in-depth research and prepares a fully customized, plagiarism-free assignment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check & Final Delivery</h5>
                    <p>Every assignment undergoes proofreading, plagiarism checks, and formatting review.</p>
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

.feature-icon i, .service-icon i {
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
<!-- No additional scripts needed as slideshow logic is in additional_head -->
@endsection