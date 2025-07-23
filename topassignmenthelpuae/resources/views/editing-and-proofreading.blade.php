@extends('layouts.front')

@section('seo_title', 'Editing and Proofreading Services | ' . config('app.name'))
@section('seo_description', 'Enhance your academic work with TopAssignmentHelpUAE’s professional editing and proofreading services for essays, dissertations, and more.')

@section('og_title', 'Editing and Proofreading Services - TopAssignmentHelpUAE')
@section('og_description', 'Enhance your academic work with TopAssignmentHelpUAE’s professional editing and proofreading services for essays, dissertations, and more.')
@section('og_image', asset('template/img/editing-and-proofreading.webp'))

@section('twitter_title', 'Editing and Proofreading Services - TopAssignmentHelpUAE')
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
        "name": "Editing and Proofreading",
        "item": "{{ route('editing-and-proofreading') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} Editing and Proofreading Services",
    "image": "{{ asset('template/img/editing-and-proofreading.webp') }}",
    "description": "Professional editing and proofreading services to enhance your essays, dissertations, and academic papers, provided by TopAssignmentHelpUAE.",
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
                    <h1 class="text-white">Editing and Proofreading Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Editing and Proofreading</li>
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
                    <h2 class="heading-title">Editing and Proofreading <span>Services</span></h2>
                    <p class="content-simple-p mb-0">Polish your academic work with our professional editing and proofreading services, ensuring clarity, coherence, and academic excellence.</p>
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
                            <span>E</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Essay Editing <span>05</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Essay Proofreading <span>03</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>D</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Dissertation Editing <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Dissertation Proofreading <span>02</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>T</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Thesis Editing <span>03</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Thesis Proofreading <span>02</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>R</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Research Paper Editing <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Research Paper Proofreading <span>03</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>C</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Coursework Editing <span>02</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Coursework Proofreading <span>02</span></a>
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
                    <h2 class="heading-title">Why Choose Our <span>Editing and Proofreading?</span></h2>
                    <p class="content-simple-p mb">Our professional editing and proofreading services ensure your academic work is polished and error-free.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-eye" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Enhanced Clarity</h4>
                    <p>Improve the clarity and coherence of your academic papers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Error-Free Work</h4>
                    <p>Eliminate grammar, spelling, and formatting errors.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-lightbulb" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Elevate your work to meet university standards.</p>
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
                    <h2 class="heading-title">Our <span>Editing and Proofreading Process</span></h2>
                    <p class="content-simple-p mb">Follow our streamlined process to enhance your academic work.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Submit Your Document</h5>
                    <p>Provide your academic paper and specific requirements.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Expert Assignment</h5>
                    <p>We assign an experienced editor to review your work.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Editing and Proofreading</h5>
                    <p>Our editor enhances clarity, coherence, and correctness.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Quality Review</h5>
                    <p>We ensure the edited document meets academic standards.</p>
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