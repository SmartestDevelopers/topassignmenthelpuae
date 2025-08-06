@extends('layouts.front')

@section('seo_title', 'Expert PhD Assignment Help in UAE | ' . config('app.name'))
@section('seo_description', 'Get professional PhD assignment help in UAE from TopAssignmentHelpUAE. We provide specialized assistance with in-depth research and high academic standards.')

@section('og_title', 'Expert PhD Assignment Help in UAE')
@section('og_description', 'Professional PhD assignment help in UAE with in-depth research and rigorous academic standards for complex assignments.')
@section('og_image', asset('template/img/phd-assignment.webp'))

@section('twitter_title', 'Expert PhD Assignment Help in UAE')
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
        "name": "PhD Assignment Help",
        "item": "{{ route('phd-assignment') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }} PhD Assignment Help",
    "image": "{{ asset('template/img/phd-assignment.webp') }}",
    "description": "Professional PhD assignment help in UAE delivering specialized assistance with in-depth research and high academic standards.",
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
                    <h1 class="text-white">PhD Assignment Help in UAE</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">PhD Assignment Help</li>
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
                    <h2 class="heading-title">Expert PhD Assignment <span style="color: #F17D00;">Help in Dubai</span></h2>
                    <p class="content-simple-p mb-0">Hire us for specialized PhD assignment help in UAE from expert scholars. We ensure in-depth research and high academic standards for complex assignments.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Struggling with complex PhD assignments? TopAssignmentHelpUAE offers expert PhD assignment help in Dubai, designed to meet the rigorous demands of doctoral-level work.</p>
                    <p>Our PhD-qualified scholars provide specialized assistance, conducting thorough research and crafting well-structured assignments that adhere to academic standards. We cover all disciplines, ensuring 100% original content with precise citations in APA, MLA, or other formats.</p>
                    <p>With our client-centered approach, we assign dedicated experts to guide you, helping you achieve academic excellence while managing your doctoral workload.</p>
                    <div class="button-design text-nowrap">
                        <a href="{{ route('order-now') }}" class="topbar-btn mt-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/phd-assignment.webp') }}" class="img-fluid w-100" alt="PhD Assignment Help in UAE">
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
                    <h4 style="line-height: 35px;">We provide expert PhD assignment help in UAE, delivering in-depth research and high-quality, plagiarism-free content for doctoral success.</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose Our <span style="color: #F17D00;">PhD Assignment Help?</span></h2>
                    <p class="content-simple-p mb-0">Choose TopAssignmentHelpUAE for specialized support that meets the demands of PhD-level assignments.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-graduate" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>PhD-Qualified Experts</h4>
                    <p>Our doctoral scholars are skilled in delivering complex, research-driven assignments.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-search" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>In-Depth Research</h4>
                    <p>We conduct rigorous research to ensure your assignments meet scholarly standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Plagiarism-Free Content</h4>
                    <p>We deliver 100% original assignments using advanced plagiarism detection tools.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-headset" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Our team provides round-the-clock assistance for all your PhD assignment needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Types of PhD Assignments Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Types of <span style="color: #F17D00;">PhD Assignments</span> We Offer</h2>
                    <p class="content-simple-p mb-0">We provide specialized PhD assignment services tailored to meet your doctoral requirements.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Research Proposals</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We craft compelling research proposals with clear objectives and methodologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book-open" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Literature Reviews</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We synthesize extensive sources into rigorous, doctoral-level literature reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-chart-bar" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Data Analysis Reports</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We provide in-depth data analysis with advanced statistical methods and tools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-text" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Research Papers</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We deliver analytical, well-cited research papers meeting PhD standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-flask" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Experimental Reports</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We assist with detailed experimental reports, ensuring precise methodologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-clipboard-list" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Critical Analysis Papers</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We provide critical analysis papers with robust arguments and insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How Our PhD Assignment <span style="color: #F17D00;">Process Works</span></h2>
                    <p class="content-simple-p mb-0">We follow a meticulous process to deliver high-quality PhD assignments tailored to your needs.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Submit Your Order</h5>
                    <p>Share your PhD assignment details, including topic, scope, and guidelines.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Expert Scholar Assigned</h5>
                    <p>We assign a PhD-qualified scholar specializing in your research area.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Research & Writing</h5>
                    <p>Our expert conducts rigorous research and crafts your assignment with precision.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Quality Check</h5>
                    <p>We edit, proofread, and verify originality to meet doctoral standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section py-5" style="background: #f1f1f1;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">What our Clients have to Say <span style="color: #F17D00;">About Us</span></h2>
                </div>
            </div>
        </div>
        <div class="slideshow-container mt-4">
            <div class="mySlides">
                <q>The research proposal was perfectly structured and met all PhD requirements. Exceptional service!</q>
                <div class="img"><img src="{{ asset('template/img/fatima.jpg') }}" class="testi-img-size" alt="Fatima"></div>
                <p class="author">- Fatima</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>
            <div class="mySlides">
                <q>Their literature review was comprehensive and saved me weeks of work. Highly recommend!</q>
                <div class="img"><img src="{{ asset('template/img/khalid.jpg') }}" class="testi-img-size" alt="Khalid"></div>
                <p class="author">- Khalid</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>
            <div class="mySlides">
                <q>The data analysis report was thorough and well-presented. It impressed my supervisor!</q>
                <div class="img"><img src="{{ asset('template/img/laila.jpg') }}" class="testi-img-size" alt="Laila"></div>
                <p class="author">- Laila</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <div class="container text-center mt-4">
            <a href="#" class="topbar-btn">Read More</a>
        </div>
    </div>
</section>

<!-- Other Services Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Writing <span style="color: #F17D00;">Services</span></h2>
                    <p class="content-simple-p mb-0">Explore our range of academic and professional writing services to support your career and academic goals.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-pencil" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Essay Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Get professionally written essays according to your topic, academic level, and deadline.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('essay-writing') }}" aria-label="essay-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-book" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Dissertation Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our experts craft comprehensive, well-researched dissertations for all academic levels.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('dissertation-writing') }}" aria-label="dissertation-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Thesis Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We assist in developing strong, research-based theses customized to your requirements.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('dissertation-thesis-writing') }}" aria-label="thesis-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Academic Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Offering a full range of academic writing services, including essays and reports.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('academic-writing-services') }}" aria-label="academic-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Report Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We write clear, well-referenced reports for academic or professional use.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('report-writing') }}" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-search" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title mt-4">
                        <h4>Research Paper Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We deliver analytical, properly cited research papers for academic excellence.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('research-paper') }}" aria-label="research-paper">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer CTA Section -->
<section class="footer-cta">
    <div class="container">
        <div class="row">
            <div class="lg-cta-banner d-flex justify-content-between align-items-center footer-cta-padding">
                <div class="cta-banner-title">
                    <h2 style="font-size: 24px;">Need Expert PhD Assignment Help in UAE?</h2>
                </div>
                <div class="button-design text-nowrap">
                    <a href="{{ route('order-now') }}" class="topbar-btn">Order Now</a>
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

.feature-box, .process-step, .service-boxes {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-box:hover, .process-step:hover, .service-boxes:hover {
    transform: translateY(-5px);
}

.feature-icon i, .service-icon i {
    font-size: 2.5rem;
    color: #F17D00;
    margin-bottom: 1rem;
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
    margin: 0 auto 1rem;
}

.service-title h4 {
    color: #F17D00;
    margin-bottom: 1rem;
}

.service-link a {
    color: #F17D00;
    text-decoration: none;
    font-weight: 600;
}

.service-link a:hover {
    color: #000;
}

.bg-gray {
    background: #f1f1f1;
}

.testi-img-size {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin: 1rem auto;
}

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    padding: 3rem 1rem;
}

.mySlides {
    display: none;
    text-align: center;
    padding: 2rem;
}

.mySlides.active {
    display: block;
}

.mySlides q {
    font-style: italic;
    font-size: 1.2rem;
    margin-bottom: 2rem;
    display: block;
}

.mySlides .img {
    margin: 1rem 0;
}

.author {
    font-weight: bold;
    margin: 1rem 0;
}

.star-ratting {
    margin: 1rem 0;
}

.star-ratting .fa-star.yellow {
    color: #ffc107;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.3s ease;
    border-radius: 0 3px 3px 0;
    background-color: rgba(0,0,0,0.5);
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}
</style>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}

// Auto slide
setInterval(function() {
    plusSlides(1);
}, 5000);
</script>
@endsection

@section('additional_scripts')
<!-- No scripts needed here as slideshow logic is in additional_head -->
@endsection