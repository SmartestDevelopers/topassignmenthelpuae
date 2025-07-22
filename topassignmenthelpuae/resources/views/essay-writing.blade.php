@extends('layouts.front')

@section('seo_title', 'Expert Essay Writing Services | ' . config('app.name'))
@section('seo_description', 'Get professional essay writing help from expert writers. Our custom essay writing services cover all subjects and academic levels to ensure top-quality results.')

@section('og_title', 'Expert Essay Writing Services')
@section('og_description', 'Get professional essay writing help from expert writers. Our custom essay writing services cover all subjects and academic levels to ensure top-quality results.')
@section('og_image', asset('template/img/essay-writing.webp'))

@section('twitter_title', 'Expert Essay Writing Services')
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
        "item": "{{ route('essay-assignment-help') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Essay Writing Service",
    "image": "{{ asset('template/img/essay-writing.webp') }}",
    "description": "Professional essay writing services providing high-quality, custom-written essays tailored to your academic needs across various subjects and levels.",
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
                    <h1 class="">Essay Writing Services</h1>
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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Professional Essay <span>Writing</span></h2>
                    <p class="content-simple-p mb-0">Our essay writing services provide custom, high-quality essays crafted by expert writers to meet your academic requirements. From argumentative to narrative essays, we cover all types and subjects.</p>
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
                    <h3 class="heading-title">Our Essay Writing <span>Services</span></h3>
                    <p class="content-simple-p mb-0">We offer comprehensive essay writing support, including:</p>
                    <ul>
                        <li>Argumentative, persuasive, narrative, and descriptive essays</li>
                        <li>Custom essays tailored to your specific requirements</li>
                        <li>Support for all academic levels: High School, Undergraduate, Postgraduate</li>
                        <li>Adherence to citation styles (APA, MLA, Harvard, Chicago, etc.)</li>
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
                    <h2 class="heading-title">Why Choose Our <span>Essay Writing Services?</span></h2>
                    <p class="content-simple-p mb">Our essay writing services are designed to help you achieve academic success with professionally crafted essays.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-pen" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our team consists of qualified writers with expertise in various subjects and essay types.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-check-circle" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Plagiarism-Free</h4>
                    <p>All essays are written from scratch, ensuring 100% originality and proper citations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We meet your deadlines, ensuring you have ample time to review your essay.</p>
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
                    <h2 class="heading-title">How Our Essay Writing <span>Service Works</span></h2>
                    <p class="content-simple-p mb">Follow these steps to get your custom essay:</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Place Your Order</h5>
                    <p>Submit your essay requirements, including topic, word count, and deadline.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign an expert writer who matches your subject and academic level.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Writing & Review</h5>
                    <p>Your essay is crafted, reviewed, and checked for plagiarism before delivery.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Receive Your Essay</h5>
                    <p>Download your completed essay and request revisions if needed.</p>
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