@extends('layouts.front')

@section('seo_title', 'Getting Best Development and Annotated Bibliographies Service | ' . config('app.name'))
@section('seo_description', 'Get online editing and proofreading, and copy editing services in a significant manner with the help of professionals.')

@section('og_title', 'Getting The Best Development and Annotated Bibliographies Services')
@section('og_description', 'We Have a Professional Team of Writers, Who can write your assignment effectively with quality content, so you can get affordable assignment services')
@section('og_image', asset('template/img/other-services.webp'))

@section('twitter_title', 'Getting Best Development and Annotated Bibliographies Service')
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
        "name": "More Services",
        "item": "{{ route('other-services') }}"
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "Other Services",
        "item": "{{ route('other-services') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }}",
    "image": "{{ asset('template/img/ab.webp') }}",
    "description": "Professional assignment writing services providing high quality essay writing, assignment writing & proofreading services to students. We have a team of qualified writers who will help you to score good grades.",
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
                    <h1 class="">Other Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Other Services</li>
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
                    <h2 class="heading-title">Editing, Improvement and Proofreading, Statistical Analysis, Computer Programming, Software <span>Development and Annotated Bibliographies</span></h2>
                    <p class="content-simple-p mb-0">
                        Ease the burden of writing assignments on difficult subjects like statistical analysis by hiring the best assignment writer from our professional team.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>These days, it is important for students to constantly keep their skills up-to-date as this will give us an edge over others. It shouldn't be a problem if you have an assignment on any subject at your school or college. With the help of these assignments students are able to aware about the different aspects so that they may not face any issues in future.</p>
                    
                    <p>Nowadays it is very important for us to have the knowledge of annotated bibliographies, editing, software development, improvement, computer programming, proofreading, and statistical analysis. Sometimes the students are not able to complete these things in a correct manner, so they are not able to secure good grades. But now you need not to be worried, as we are here to assist you in the most effective and possible way.</p>
                    
                    <p>Here we are offering all the services related to your assignment, which will help you to get good grades. We are having a very skilled and expert team of professionals who will show you the way to complete your assignment. The best thing with our professional team members is that they are very comfortable in their field.</p>
                    
                    <p>All the work which has been allotted to you will be completed by our expert writers, programmers, and statisticians. We have a team of experts who are having graduate degrees. If you will take our service then you need not to be worried, as this is our responsibility to complete it on time.</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/other-services.webp') }}" class="img-fluid w-100" alt="Other Services">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span>Other Services?</span></h2>
                    <p class="content-simple-p mb">We provide comprehensive support across various specialized academic and technical areas with expert guidance.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-users" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Team</h4>
                    <p>Our team consists of skilled professionals, programmers, and statisticians with advanced qualifications.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-cogs" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Specialized Skills</h4>
                    <p>We cover complex areas like statistical analysis, programming, and software development.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-award" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Quality Assurance</h4>
                    <p>All work is completed with attention to detail and meets the highest academic standards.</p>
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
                    <h2 class="heading-title">Our Specialized <span>Services</span></h2>
                    <p class="content-simple-p mb">Achieve your goals by giving us the burden of writing assignments for difficult subjects like Software Development. We provide wide range of services like.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3 justify-content-center">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-edit"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Editing, Improvement and Proofreading</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional editing and proofreading services to enhance the quality of your academic work with expert attention to detail and language improvement.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="editing-proofreading">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Statistical Analysis</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert statistical analysis services using advanced tools and methodologies to help you interpret data and draw meaningful conclusions.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="statistical-analysis">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Computer Programming</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional programming assistance across multiple languages and platforms to help you complete your coding assignments successfully.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="programming">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Software Development</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive software development services from concept to implementation, helping you build robust applications and systems.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="software-development">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Annotated Bibliographies</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Expert creation of annotated bibliographies with comprehensive summaries and critical evaluations of academic sources.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="annotated-bibliographies">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-chart-bar"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Data Analysis</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Professional data analysis services using industry-standard tools to help you make sense of complex datasets and research findings.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="data-analysis">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Additional Academic <span>Support Services</span></h2>
                    <p class="content-simple-p mb">We also provide specialized support in various academic subjects and areas.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3 justify-content-center">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Accounting Subject</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Accounting is said to be the backbone of any business activities. We provide comprehensive accounting assignment help with expert guidance.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="accounting">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Finance Subject</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Finance Assignment Writing Help deals with the allocation of liabilities and assets over time under various conditions of uncertainty.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="finance">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Model Answer</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Students generally require proficient answer writing services in their college life to complete various academic assignments effectively.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="model-answer">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-sticky-note"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Exam Notes</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Comprehensive exam preparation notes that help students understand complex topics and prepare effectively for their examinations.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="exam-notes">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-balance-scale"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Economics Assignment Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Economics is the social science which deals with production, distribution and consumption of goods and services with expert analysis.</p>
                    </div>
                    <div class="service-link">
                        <a href="#" aria-label="economics">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
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
                    <h2 class="heading-title">Our Service <span>Process</span></h2>
                    <p class="content-simple-p mb">We follow a systematic approach to deliver high-quality specialized services.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Requirement Analysis</h5>
                    <p>We carefully analyze your specific requirements and assign the most suitable expert.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Expert Assignment</h5>
                    <p>Our specialized team members work on your project with their expertise in the relevant field.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Quality Execution</h5>
                    <p>We execute the work with attention to detail and adherence to academic standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Final Review</h5>
                    <p>Comprehensive review and quality check before delivering the completed work to you.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

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

.service-icon {
    text-align: center;
    margin-bottom: 1rem;
}

.service-icon i {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.service-title h4 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.service-link a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
}

.service-link a:hover {
    color: var(--secondary-color);
}

.about-content p {
    margin-bottom: 1rem;
    line-height: 1.6;
}
</style>
@endsection
