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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Professional CV <span>Writing</span></h2>
                    <p class="content-simple-p mb-0">Our CV writing services create tailored, professional CVs to help you stand out in the job market and achieve your career goals.</p>
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
                    <h3 class="heading-title">Our CV Writing <span>Services</span></h3>
                    <p class="content-simple-p mb-0">We offer comprehensive CV writing support, including:</p>
                    <ul>
                        <li>Custom CVs tailored to your industry and career level</li>
                        <li>Highlighting your skills, experience, and achievements</li>
                        <li>ATS-optimized CVs to pass applicant tracking systems</li>
                        <li>Professional formatting and design</li>
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
                    <h2 class="heading-title">Why Choose Our <span>CV Writing Services?</span></h2>
                    <p class="content-simple-p mb">Our CV writing services help you make a strong first impression with employers and recruiters.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Industry Expertise</h4>
                    <p>Our writers understand industry-specific requirements to craft impactful CVs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-star" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Personalized Approach</h4>
                    <p>We tailor your CV to highlight your unique skills and achievements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We deliver your CV on time to meet your job application deadlines.</p>
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
                    <h2 class="heading-title">How Our CV Writing <span>Service Works</span></h2>
                    <p class="content-simple-p mb">Follow these steps to get your professional CV:</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Your Details</h5>
                    <p>Provide your career details, including experience, skills, and goals.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Writer Assignment</h5>
                    <p>We assign a writer with expertise in your industry.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Writing & Review</h5>
                    <p>Your CV is crafted, reviewed, and optimized for ATS and impact.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Receive Your CV</h5>
                    <p>Download your completed CV and request revisions if needed.</p>
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