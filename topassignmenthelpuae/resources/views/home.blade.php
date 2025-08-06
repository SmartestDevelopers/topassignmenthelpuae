@extends('layouts.front')

@section('seo_title', 'Best Assignment Writing Services in UAE | ' . config('app.name'))
@section('seo_description', 'Get top-quality assignment help in UAE from TopAssignmentHelpUAE. Our expert writers deliver plagiarism-free, high-quality assignments to boost your academic success.')

@section('og_title', 'Best Assignment Writing Services in UAE')
@section('og_description', 'Professional assignment writing services in UAE with qualified writers to help you score top grades with affordable, original content.')
@section('og_image', asset('template/img/feature-1.webp'))

@section('twitter_title', 'Best Assignment Writing Services in UAE')
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
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ config('app.name') }}",
    "image": "{{ asset('template/img/feature-1.webp') }}",
    "description": "Top-quality assignment writing services in UAE providing high-quality, plagiarism-free essays, dissertations, and research papers to ensure academic success.",
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
<!-- BANNER START -->
<div class="banner section">
    <div class="container">
        <div class="row center">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h1 class="banner-title">Top-Quality Assignment Writing Help in Dubai to Boost Your Academic Success</h1>
                    <p class="mb-0">Looking for the best assignment helper in the UAE? You’ve come to the right place. Get our expert assignment writing services in Dubai to secure top grades. We deliver high-quality, plagiarism-free work according to your academic needs.</p>
                    <div class="button-design">
                        <a href="{{ route('about') }}" class="main-btn btn-res">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-form bg-white p-md-4 p-4">
                    <h2 class="mb-lg-4 mb-2" style="color: #011e4e;">Order Now</h2>
                    <form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-sm-12 col-12">
                                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Name *" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-6 col-12">
                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email address" required />
                            </div>
                            <div class="mb-3 col-sm-6 col-12">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-6 col-12">
                                <input type="date" class="form-control" name="deadline" id="deadline" placeholder="Deadline" required />
                            </div>
                            <div class="mb-3 col-sm-6 col-12">
                                <select name="noword" id="noword" class="form-select" required>
                                    <option value="1000 Words (Estimated 2-3 pages)">1000 Words (Estimated 2-3 pages)</option>
                                    <option value="1500 Words (Estimated 3-4 pages)">1500 Words (Estimated 3-4 pages)</option>
                                    <option value="2000 Words (Estimated 5 pages)">2000 Words (Estimated 5 pages)</option>
                                    <option value="2500 Words (Estimated over 6 pages)">2500 Words (Estimated over 6 pages)</option>
                                    <option value="3000 Words (Estimated 7-8 pages)">3000 Words (Estimated 7-8 pages)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-12 mt-3">
                                <input class="form-control" type="file" name="file" id="file" required />
                            </div>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                            <label class="form-check-label" for="flexCheckChecked">
                                I accept the T&C and other policies of the website and agree to receive offers and updates.
                            </label>
                        </div>
                        <div class="button-design mt-2">
                            <input type="submit" name="order-new" id="order-new" class="main-btn d-block text-center" value="Order Assignment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<!-- SERVICES INTRO START -->
<section class="section-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="simple">
                    <h2 class="heading-title">TopAssignmentHelpUAE <span style="color: #F17D00;">Services</span></h2>
                    <p class="content-simple-p">Welcome to TopAssignmentHelpUAE — A reliable partner in your academic success. Our professionals provide certified coursework from high school essays to PhD research; visit our services section to see the offers and get expert assistance for all academic levels.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES INTRO END -->

<!-- WHAT WE DO START -->
<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="simple">
                    <h2 class="heading-title">Best Assignment Help UAE—Equitable <span style="color: #F17D00;">Student Support</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <p align="justify" class="content-simple-p">At TopAssignmentHelpUAE, we believe in a client-centered approach. Our experts write assignments from scratch according to the client’s instructions. Furthermore, we offer professional proofreading and editing services for documents provided by students.</p>
                <p align="justify">By choosing our services, you will surely get multiple benefits. To make your academic path smooth and more consistent, we deliver 100% guaranteed plagiarism-free content, ensuring originality and academic integrity. Our team also provides personalised consultancy and 24/7 support for a better user experience.</p>
                <p align="justify">We provide individual attention to every student from a dedicated assignment helper, who supports them throughout their academic journey. We're committed to delivering affordable, original, and professional assignment writing services in UAE guided by the core values of honesty, trust, and integrity.</p>
                <p align="justify" class="mb-0">We deliver a wide range of top-quality work in all subjects at budget-friendly rates. Our main focus is to achieve the best outcomes for our students through a customer-centric pricing model.</p>
            </div>
            <div class="col-lg-5">
                <div class="feature-img">
                    <div class="researchvideo">
                        <img src="{{ asset('template/img/vv1.jpg') }}" alt="assignment writing services" loading="lazy" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WHAT WE DO END -->

<!-- SERVICES START -->
<section class="section-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our <span style="color: #F17D00;">Services</span></h2>
                    <p class="content-simple-p">The following are examples of a few services, tailored to your needs.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-pencil" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>Essay Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Get professionally written essays according to your topic, academic level, and deadline. To meet your expectations, we provide clear, concise, and plagiarism-free content.</p>
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
                    <div class="service-title">
                        <h4>Dissertation Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Our experts craft comprehensive, well-referenced dissertations with proper structure and referencing, ensuring academic excellence and originality for undergraduate, master’s, or PhD levels.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('dissertation-editing-improvement-proofreading') }}" aria-label="dissertation-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>Thesis Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We assist students in developing strong, research-based theses and help with selecting and analysing the topic and methodology, customised to meet your requirements.</p>
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
                    <div class="service-title">
                        <h4>Academic Writing Services</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Offering a full range of academic writing services, including essays, reports, research papers, and more, crafted by qualified writers with subject-specific expertise.</p>
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
                    <div class="service-title">
                        <h4>Report Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We write clear, well-referenced reports for academic or professional use. Each report is tailored, thoroughly researched, and delivered before your due date.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('report-writing') }}" aria-label="report-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>CIPD Assignment Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Specialised CIPD assignment help from HR and L&D experts. We support all levels, including Level 3, 5, and 7, with accurate, compliant content.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('assignment-writing') }}" aria-label="cipd-assignment">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-search" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>Research Assignment Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">Getting expert help with research assignments across disciplines is now easier with the topassignmenthelpuae. We ensure accurate and relevant sources and a structured presentation for strong academic success.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('research-assignment') }}" aria-label="research-assignment">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-text" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>Research Paper Assignment Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We assist with deeply analytical, properly cited, and academically sound research papers that are designed to meet scholarly standards and journal-style expectations.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('research-paper') }}" aria-label="research-paper">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-graduate" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>PhD Assignment Help</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">It is not easy to find academic support for PhD candidates, including research, writing, and editing. Our experts ensure academic safety, originality, and compliance with academic benchmarks.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('phd-assignment') }}" aria-label="phd-assignment">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="service-boxes">
                    <div class="service-icon">
                        <i class="fa-solid fa-file" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <div class="service-title">
                        <h4>CV Writing Service</h4>
                    </div>
                    <div class="service-content">
                        <p class="mb-0">We highlight your strengths, experience, and skills in your CV to make it more professional. We customise every CV according to your career goals and target industry.</p>
                    </div>
                    <div class="service-link">
                        <a href="{{ route('cv-writing') }}" aria-label="cv-writing">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES END -->

<!-- FEATURES START -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Traits of <span style="color: #F17D00;">TopAssignmentHelpUAE</span> Services</h2>
                    <p class="content-simple-p">Want to know what sets us apart from other assignment writing services? Explore the traits of TopAssignmentHelpUAE that make us your trusted academic partner.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-tie" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Expert Assignment Helpers</h4>
                    <p>Only the most skilled and knowledgeable PhD specialists are assigned to work on your projects. Each assignment helper is chosen after a diligent screening process.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-star" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>Unmatched Quality Assurance</h4>
                    <p>Our professionals use modern tools, proven techniques, and revised methodologies to deliver high-quality assignments with thorough editing and proofreading.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>On-Time Delivery, Always</h4>
                    <p>We deliver every project before the due date, with our staff actively monitoring progress to ensure timely submission.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: #F17D00;"></i>
                    </div>
                    <h4>100% Plagiarism-Free & Confidential</h4>
                    <p>We use advanced plagiarism detection tools and secure solutions to ensure originality and protect your data and identity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURES END -->

@endsection

@section('additional_head')
<style>
.banner {
    background-size: cover;
    padding: 0;
    color: white;
}

.banner-title {
    font-size: 2.5rem;
    font-weight: 700;
}

.banner-content p {
    font-size: 1.1rem;
    color: #fff;
}

.main-btn {
    background: #F17D00;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
}

.main-btn:hover {
    background: #d96b00;
}

.banner-form {
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.form-control, .form-select {
    border-radius: 5px;
}

.section, .section-1 {
    padding: 0;
}

.bg-gray {
    background: #f1f1f1;
}

.heading-title {
    font-size: 2rem;
    font-weight: 600;
}

.heading-title span {
    color: #F17D00;
}

.content-simple-p {
    font-size: 1.1rem;
    color: #333;
}

.feature-img img {
    border-radius: 10px;
}

.service-boxes {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.service-boxes:hover {
    transform: translateY(-5px);
}

.service-icon i {
    font-size: 2.5rem;
    color: #F17D00;
    margin-bottom: 1rem;
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
    padding: 0;
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
        slides[i].classList.remove("active");
    }
    slides[slideIndex-1].classList.add("active");
}

// Auto slide
setInterval(function() {
    plusSlides(1);
}, 5000);
</script>
@endsection

@section('additional_scripts')
<script>
    // Set minimum date for deadline input
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("deadline")[0].setAttribute('min', today);
</script>
@endsection
