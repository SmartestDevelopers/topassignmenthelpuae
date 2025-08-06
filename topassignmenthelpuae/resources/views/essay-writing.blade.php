@extends('layouts.front')

@section('seo_title', 'Best Essay Writing Service in UAE | ' . config('app.name'))
@section('seo_description', 'Get expert essay writing help in UAE from native Dubai writers. We deliver 100% original, high-quality essays tailored to your academic needs.')

@section('og_title', 'Best Essay Writing Service in UAE')
@section('og_description', 'Get expert essay writing help in UAE from native Dubai writers. We deliver 100% original, high-quality essays tailored to your academic needs.')
@section('og_image', asset('template/img/essay-writing.webp'))

@section('twitter_title', 'Best Essay Writing Service in UAE')
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
        "name": "Essay Writing",
        "item": "{{ route('essay-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Essay Writing Service",
    "image": "{{ asset('template/img/essay-writing.webp') }}",
    "description": "Professional essay writing services in UAE delivering 100% original, high-quality essays tailored to academic standards.",
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
                    <h1 class="text-white">Best Essay Writing Service in UAE</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Essay Writing</li>
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
                    <h2 class="heading-title">Expert Essay Writing <span style="color: #F17D00;">Help in Dubai</span></h2>
                    <p class="content-simple-p mb-0">Hire us! To get essay writing help in UAE from native Dubai writers. We guarantee on-time delivery of 100% original, secure, and high-quality essay writing. “No stress, just reliable academic support.”</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Do you desire to get higher grades in your career? Our experts use customised academic and consulting services to support your ongoing success journey.</p>
                    <p>Looking for reliable essay writing help in Dubai? UAE Assignment Help is your trusted partner, offering top-quality essay writing service UAE tailored to your academic needs. Our expert staff provides individual support, from brainstorming to the final version.</p>
                    <p>Simply buy an essay online and focus on other priorities while our experienced experts handle your assignments. With our reliable "write my essay" service, you receive exceptional assistance at every step of the way.</p>
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/essay-writing.webp') }}" class="img-fluid w-100" alt="Best Essay Writing Service in UAE">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hire an Essay Writer Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Hire an Essay Writer <span style="color: #F17D00;">Today!</span></h2>
                    <p class="content-simple-p mb-0">Our skilled writers can manage essays of any academic difficulty level and are proficient in a variety of academic subjects. When you choose our service, you get a top essay writer ready to complete your tasks efficiently, professionally, and on time.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-12 text-center">
                <div class="button-design text-nowrap">
                    <a href="{{ route('order-now') }}" class="topbar-btn">Hire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span style="color: #F17D00;">Essay Writing Service?</span></h2>
                    <p class="content-simple-p mb-0">Choosing us means selecting academic excellence and trusted support. We fulfil your academic requirements with precision and professionalism.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our native essay writers in the UAE are experienced across all subjects and highly qualified.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>Our streamlined process guarantees timely delivery, giving you time to review before submission.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Plagiarism-Free Content</h4>
                    <p>We deliver 100% unique and academically credible essays with strict anti-plagiarism protocols.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-headset" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>24/7 Customer Support</h4>
                    <p>We provide 24/7 support to assist you with anything related to our essay writing service UAE.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essay Types Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Explore the Types of <span style="color: #F17D00;">Essay Writing Services</span> We Offer</h2>
                    <p class="content-simple-p mb-0">We provide a wide range of essay writing services tailored to meet your academic needs.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-paint-brush" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Descriptive Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our essay writing service provides engaging, descriptive essays tailored to your academic needs with detailed and sensory-rich writing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book-open" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Narrative Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We craft compelling narrative essays with well-developed characters, ensuring clarity, flow, and emotional connection.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Expository Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We offer clear, fact-based expository essays based on logical and concise analysis for UAE students.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-gavel" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Persuasive Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our expert writers provide persuasive essays with effective argumentative techniques for clarity and impact.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-brain" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Analytical Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We deliver detailed analytical essays using critical thinking and structured research to showcase your analytical skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Admission Essay</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our admission essay writing service crafts strong, personalised essays to impress universities and graduate schools.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How Our Essay Writing <span style="color: #F17D00;">Process Works</span></h2>
                    <p class="content-simple-p mb-0">We follow a structured and efficient process to ensure quality work.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Submit Your Order</h5>
                    <p>Share your assignment details, including topic, deadline, and specific instructions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Expert Writer Assigned</h5>
                    <p>We match your project with a qualified writer who specialises in your subject area.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Research & Writing</h5>
                    <p>Your writer conducts in-depth research and crafts the content per your requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Final Quality Review</h5>
                    <p>We edit and proofread to ensure accuracy, clarity, and originality before delivery.</p>
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
<!-- No scripts needed here as slideshow logic is in additional_head -->
@endsection
