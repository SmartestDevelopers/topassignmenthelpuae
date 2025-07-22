@extends('layouts.front')

@section('seo_title', 'Literature Review Writing Services | ' . config('app.name'))
@section('seo_description', 'Get expert literature review writing services to craft well-researched, structured reviews for your academic projects and dissertations.')

@section('og_title', 'Literature Review Writing Services')
@section('og_description', 'Get expert literature review writing services to craft well-researched, structured reviews for your academic projects and dissertations.')
@section('og_image', asset('template/img/literature-review.webp'))

@section('twitter_title', 'Literature Review Writing Services')
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
        "name": "Literature Review Writing",
        "item": "{{ route('literature-review-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Literature Review Writing Service",
    "image": "{{ asset('template/img/literature-review.webp') }}",
    "description": "Professional literature review writing services to create comprehensive, well-structured reviews for academic research and dissertations.",
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
                    <h1 class="">Literature Review Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Literature Review Writing</li>
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
                    <h2 class="heading-title">Expert Literature Review <span>Writing</span></h2>
                    <p class="content-simple-p mb-0">Our literature review writing services provide comprehensive, well-researched reviews to support your academic research and dissertations.</p>
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
                    <h3 class="heading-title">Our Literature Review Writing <span>Services</span></h3>
                    <p class="content-simple-p mb-0">We offer comprehensive literature review support, including:</p>
                    <ul>
                        <li>Thorough research and analysis of relevant literature</li>
                        <li>Structured reviews with clear synthesis of findings</li>
                        <li>Adherence to academic standards and citation styles</li>
                        <li>Support for dissertations, theses, and research papers</li>
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
                    <h2 class="heading-title">Why Choose Our <span>Literature Review Services?</span></h2>
                    <p class="content-simple-p mb">Our literature review services ensure high-quality, well-researched reviews to enhance your academic work.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-book-open" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Research</h4>
                    <p>Our writers conduct thorough research to identify and analyze relevant sources.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-check-circle" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Structured Synthesis</h4>
                    <p>We provide clear, organized reviews that synthesize key findings effectively.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We deliver your literature review on time to meet your academic deadlines.</p>
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
                    <h2 class="heading-title">How Our Literature Review <span>Service Works</span></h2>
                    <p class="content-simple-p mb">Follow these steps to get your custom literature review:</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Requirements</h5>
                    <p>Provide details about your literature review, including topic and scope.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Research & Analysis</h5>
                    <p>Our experts research and analyze relevant literature for your review.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Writing & Review</h5>
                    <p>Your review is written, synthesized, and checked for quality and accuracy.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Receive Your Review</h5>
                    <p>Download your completed literature review and request revisions if needed.</p>
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