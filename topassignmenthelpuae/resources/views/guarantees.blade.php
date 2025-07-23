@extends('layouts.front')

@section('seo_title', 'Our Guarantees | ' . config('app.name'))
@section('seo_description', 'Learn about the guarantees TopAssignmentHelpUAE offers, including quality, originality, and timely delivery.')

@section('og_title', 'Our Guarantees - TopAssignmentHelpUAE')
@section('og_description', 'Learn about the guarantees TopAssignmentHelpUAE offers, including quality, originality, and timely delivery.')
@section('og_image', asset('template/img/guarantees.webp'))

@section('twitter_title', 'Our Guarantees - TopAssignmentHelpUAE')
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
        "name": "Guarantees",
        "item": "{{ route('guarantees') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "{{ config('app.name') }}",
    "url": "{{ route('home') }}",
    "description": "TopAssignmentHelpUAE guarantees high-quality, original, and timely academic writing services."
}
</script>
@endsection

@section('content')
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="text-white">Our Guarantees</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Guarantees</li>
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
                    <h2 class="heading-title">Our <span style="color: #F17D00;">Guarantees</span></h2>
                    <p class="content-simple-p mb-0">At TopAssignmentHelpUAE, we stand by our commitment to quality and reliability.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-check-circle" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>100% Originality</h4>
                    <p>All assignments are crafted from scratch, ensuring plagiarism-free content.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Quality Assurance</h4>
                    <p>Every assignment undergoes rigorous quality checks for accuracy and clarity.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We guarantee on-time delivery to meet your academic deadlines.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-shield" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Confidentiality</h4>
                    <p>Your personal and academic information is kept secure and confidential.</p>
                </div>
            </div>
        </div>
    </div>
</div>
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
</style>
@endsection

@section('additional_scripts')
<!-- No scripts needed as no carousel or dynamic content -->
@endsection