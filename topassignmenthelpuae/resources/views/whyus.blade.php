@extends('layouts.front')

@section('seo_title', 'Why Choose Top Assignment Help UAE | ' . config('app.name'))
@section('seo_description', 'Discover why Top Assignment Help UAE is the best choice for your academic writing needs with expert support and quality services.')

@section('og_title', 'Why Choose Top Assignment Help UAE')
@section('og_description', 'Discover why Top Assignment Help UAE is the best choice for your academic writing needs with expert support and quality services.')
@section('og_image', asset('template/img/why-us.webp'))

@section('twitter_title', 'Why Choose Top Assignment Help UAE')
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
        "name": "Why Us",
        "item": "{{ route('whyus') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "{{ config('app.name') }}",
    "url": "{{ route('home') }}",
    "description": "TopAssignmentHelpUAE provides expert academic writing services to students in the UAE and worldwide.",
    "brand": {
        "@type": "Brand",
        "name": "{{ config('app.name') }}"
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
                    <h1 class="text-white">Why Choose Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Why Us</li>
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
                    <h2 class="heading-title">Why Choose <span style="color: #F17D00;">Top Assignment Help UAE</span></h2>
                    <p class="content-simple-p mb-0">Discover the reasons why Top Assignment Help UAE is your trusted partner for academic success.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>At Top Assignment Help UAE, we are committed to delivering exceptional academic support to students in the UAE and worldwide. Our team of expert writers, holding advanced degrees (minimum 2:1 up to Master and PhD), ensures high-quality, tailored solutions for all your academic needs.</p>
                    
                    <p>With years of experience, we specialize in a wide range of subjects, offering accurate, well-researched, and timely solutions. Choose us for our dedication to quality, reliability, and student success.</p>
                    
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/why-us.webp') }}" class="img-fluid w-100" alt="Why Choose Top Assignment Help UAE">
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
                    <h4 style="line-height: 35px;">Top Assignment Help UAE is your go-to solution for academic excellence, offering expert support and reliable services.</h4>
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
                    <h2 class="heading-title">Our <span style="color: #F17D00;">Key Strengths</span></h2>
                    <p class="content-simple-p mb-0">Explore what makes Top Assignment Help UAE stand out in academic support services.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our team consists of highly qualified professionals with advanced degrees.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Quality Assurance</h4>
                    <p>We ensure accurate, well-researched, and plagiarism-free solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We prioritize your deadlines to deliver solutions on time, every time.</p>
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

.feature-box {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-box:hover {
    transform: translateY(-5px);
}

.feature-icon i {
    font-size: 2.5rem;
    color: #F17D00;
    margin-bottom: 1rem;
}

.bg-gray {
    background: #f1f1f1;
}
</style>
@endsection

@section('additional_scripts')
<!-- No scripts needed as Testimonials section is excluded -->
@endsection