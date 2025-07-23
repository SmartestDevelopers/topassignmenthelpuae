@extends('layouts.front')

@section('seo_title', 'Basic Subjects Assignment Help | ' . config('app.name'))
@section('seo_description', 'Explore our expert assignment help for basic subjects like Accounting, Biology, Chemistry, and more at TopAssignmentHelpUAE.')

@section('og_title', 'Basic Subjects Assignment Help - TopAssignmentHelpUAE')
@section('og_description', 'Explore our expert assignment help for basic subjects like Accounting, Biology, Chemistry, and more at TopAssignmentHelpUAE.')
@section('og_image', asset('template/img/basic-subjects.webp'))

@section('twitter_title', 'Basic Subjects Assignment Help - TopAssignmentHelpUAE')
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
        "name": "Basic Subjects",
        "item": "{{ route('basic-subjects') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Basic Subjects Assignment Help",
    "image": "{{ asset('template/img/basic-subjects.webp') }}",
    "description": "Professional assignment help for basic subjects like Accounting, Biology, Chemistry, and more, provided by TopAssignmentHelpUAE.",
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
                    <h1 class="text-white">Basic Subjects Assignment Help</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Basic Subjects</li>
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
                    <h2 class="heading-title">Basic Subjects <span>Assignment Help</span></h2>
                    <p class="content-simple-p mb-0">Explore our expert assignment help for core academic subjects like Accounting, Biology, Chemistry, and more, tailored to your academic needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-details-section">
    <div class="tab-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>A</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Accounting <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Anthropology <span>02</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>B</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Biology <span>06</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>C</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Chemistry <span>04</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>E</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Economics <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">English <span>05</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>H</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">History <span>04</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>M</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Mathematics <span>05</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>P</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Physics <span>04</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span>Basic Subjects Help?</span></h2>
                    <p class="content-simple-p mb">Our expert assistance in basic subjects ensures high-quality, accurate solutions to boost your academic performance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-eye" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Guidance</h4>
                    <p>Receive support from qualified experts in core academic subjects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Accurate Solutions</h4>
                    <p>Get precise, well-structured assignments tailored to your needs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-lightbulb" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Academic Success</h4>
                    <p>Boost your grades with our reliable and professional assistance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our <span>Assignment Help Process</span></h2>
                    <p class="content-simple-p mb">Follow our streamlined process to get top-quality assignment help for basic subjects.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Requirements</h5>
                    <p>Provide your assignment details and specific guidelines.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Expert Assignment</h5>
                    <p>We assign a subject expert to handle your task.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Solution Development</h5>
                    <p>Our expert crafts a high-quality, accurate solution.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We review the solution to ensure it meets academic standards.</p>
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

.section {
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

.tab-design {
    padding: 3rem 0;
}

.tab-subject {
    margin-bottom: 2rem;
}

.tab-category {
    background: #F17D00;
    color: white;
    padding: 0.5rem 1rem;
    font-weight: bold;
    font-size: 1.2rem;
}

.tab-category-content {
    border: 1px solid #ddd;
    border-top: none;
}

.tab-list-d {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 1rem;
    border-bottom: 1px solid #eee;
    transition: all 0.3s ease;
}

.tab-list-d:hover {
    background-color: #f8f9fa;
    color: #F17D00;
}

.tab-list-d span {
    background: #F17D00;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    min-width: 25px;
    text-align: center;
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

.feature-icon {
    margin-bottom: 1rem;
}

.feature-icon i {
    font-size: 2.5rem;
    color: #F17D00;
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
    margin: 0 auto 1rem auto;
}

.bg-gray {
    background: #f1f1f1;
}
</style>
@endsection

@section('additional_scripts')
<!-- No scripts needed as no carousel or dynamic content -->
@endsection