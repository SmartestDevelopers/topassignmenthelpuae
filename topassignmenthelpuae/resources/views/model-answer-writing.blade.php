@extends('layouts.front')

@section('seo_title', 'Model Answer Writing Services | ' . config('app.name'))
@section('seo_description', 'Get expert model answer writing services to provide high-quality, exemplary answers for your assignments and exams.')

@section('og_title', 'Model Answer Writing Services')
@section('og_description', 'Get expert model answer writing services to provide high-quality, exemplary answers for your assignments and exams.')
@section('og_image', asset('template/img/model-answer-writing.webp'))

@section('twitter_title', 'Model Answer Writing Services')
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
        "name": "Model Answer Writing",
        "item": "{{ route('model-answer-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Model Answer Writing Service",
    "image": "{{ asset('template/img/model-answer-writing.webp') }}",
    "description": "Professional model answer writing services to provide exemplary answers for assignments and exams.",
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
                    <h1 class="text-white">Model Answer Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Model Answer Writing</li>
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
                    <h2 class="heading-title">Professional <span style="color: #F17D00;">Model Answer Writing Services</span></h2>
                    <p class="content-simple-p mb-0">Get exemplary model answers to guide your academic assignments and exam preparation.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Need high-quality model answers for your assignments or exams? Our model answer writing services provide exemplary responses tailored to your academic requirements. We support students across the UAE and worldwide with years of experience in academic writing.</p>
                    
                    <p>Our team of expert writers specializes in crafting clear, concise, and well-structured model answers across various subjects, ensuring academic rigor and clarity.</p>
                    
                    <p>Our writers hold advanced degrees (minimum 2:1 up to Master and PhD) and are experienced in creating model answers that meet academic standards.</p>
                    
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/model-answer-writing.webp') }}" class="img-fluid w-100" alt="Model Answer Writing Services">
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
                    <h4 style="line-height: 35px;">We provide professional model answer writing services for all academic levels and subjects, ensuring exemplary responses.</h4>
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
                    <h2 class="heading-title">Why Choose Our <span style="color: #F17D00;">Model Answer Writing Services?</span></h2>
                    <p class="content-simple-p mb-0">Our services are designed to deliver exemplary model answers to enhance your academic performance.</p>
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
                    <p>Our writers are specialists in various disciplines, ensuring high-quality model answers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Accurate Responses</h4>
                    <p>We provide clear, concise, and well-structured model answers for all subjects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We prioritize your deadlines to ensure you receive your model answers on time.</p>
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
                    <h2 class="heading-title">Our Model Answer Writing <span style="color: #F17D00;">Process</span></h2>
                    <p class="content-simple-p mb-0">We follow a systematic approach to ensure high-quality model answers that meet academic standards.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Order Placement</h5>
                    <p>Submit your assignment or exam requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign an expert writer based on your subject and needs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Answer Development</h5>
                    <p>Our expert crafts clear, concise, and exemplary model answers.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We review the model answers to ensure academic rigor.</p>
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
</style>
@endsection

@section('additional_scripts')
<!-- No scripts needed as Testimonials section is excluded -->
@endsection