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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Expert Coursework <span>Writing</span></h2>
                    <p class="content-simple-p mb-0">Our coursework writing services provide tailored solutions to help you manage complex assignments and meet academic standards across various subjects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h3 class="heading-title">Our Coursework Writing <span>Services</span></h3>
                    <p class="content-simple-p mb-0">We offer comprehensive coursework support, including:</p>
                    <ul>
                        <li>Custom coursework for all academic levels</li>
                        <li>Research, writing, and formatting assistance</li>
                        <li>Support for subjects like Business, Sciences, Humanities, and more</li>
                        <li>Adherence to specific guidelines and citation styles</li>
                    </ul>
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
                    <p>Our writers specialize in a wide range of subjects to deliver accurate and insightful coursework.</p>
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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How Our Coursework Writing <span>Service Works</span></h2>
                    <p class="content-simple-p mb">Follow these steps to get your custom coursework:</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Requirements</h5>
                    <p>Provide details about your coursework, including subject, topic, and guidelines.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign a writer with expertise in your subject area.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Writing & Review</h5>
                    <p>Your coursework is written, reviewed, and checked for quality and originality.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Receive Your Work</h5>
                    <p>Download your completed coursework and request revisions if needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
</style>
@endsection