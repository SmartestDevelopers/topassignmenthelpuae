@extends('layouts.front')

@section('seo_title', 'Professional Report Writing Services | ' . config('app.name'))
@section('seo_description', 'Get expert report writing services for academic and professional reports. Our writers deliver well-structured, research-based reports tailored to your needs.')

@section('og_title', 'Professional Report Writing Services')
@section('og_description', 'Get expert report writing services for academic and professional reports. Our writers deliver well-structured, research-based reports tailored to your needs.')
@section('og_image', asset('template/img/report-writing.webp'))

@section('twitter_title', 'Professional Report Writing Services')
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
        "name": "Report Writing",
        "item": "{{ route('report-writing') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Report Writing Service",
    "image": "{{ asset('template/img/report-writing.webp') }}",
    "description": "Expert report writing services delivering well-researched, structured, and professional reports for academic and business purposes.",
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
                    <h1 class="">Report Writing Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Report Writing</li>
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
                    <h2 class="heading-title">Expert Report <span>Writing</span></h2>
                    <p class="content-simple-p mb-0">Our report writing services provide professionally crafted reports that are well-researched, structured, and tailored to meet academic or business requirements.</p>
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
                    <h3 class="heading-title">Our Report Writing <span>Services</span></h3>
                    <p class="content-simple-p mb-0">We offer comprehensive report writing support, including:</p>
                    <ul>
                        <li>Academic reports, business reports, and technical reports</li>
                        <li>Research, data analysis, and structured formatting</li>
                        <li>Adherence to specific guidelines and citation styles</li>
                        <li>Clear and concise presentation of findings</li>
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
                    <h2 class="heading-title">Why Choose Our <span>Report Writing Services?</span></h2>
                    <p class="content-simple-p mb">Our report writing services ensure high-quality, professional reports that meet your specific needs.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-file-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Professional Quality</h4>
                    <p>Our reports are structured and written to meet professional and academic standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-search" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Research-Driven</h4>
                    <p>We conduct thorough research to ensure accurate and reliable content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We deliver your reports on time to meet your deadlines.</p>
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
                    <h2 class="heading-title">How Our Report Writing <span>Service Works</span></h2>
                    <p class="content-simple-p mb">Follow these steps to get your custom report:</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Requirements</h5>
                    <p>Provide details about your report, including purpose, scope, and guidelines.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Research & Writing</h5>
                    <p>Our experts conduct research and draft your report to meet your specifications.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Review & Editing</h5>
                    <p>Your report is reviewed and edited for clarity, structure, and accuracy.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Receive Your Report</h5>
                    <p>Download your completed report and request revisions if needed.</p>
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