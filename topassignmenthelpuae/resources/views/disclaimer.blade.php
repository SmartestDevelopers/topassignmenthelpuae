@extends('layouts.front')

@section('seo_title', 'Disclaimer | ' . config('app.name'))
@section('seo_description', 'A Disclaimer on your website is usually the best way to address specific points of accountability that would fall a privacy policy agreement.')

@section('og_title', 'Disclaimer - ' . config('app.name'))
@section('og_description', 'We Have a Professional Team of Writers, Who can write your assignment effectively with quality content, so you can get affordable assignment services')
@section('og_image', asset('template/img/RMA-logo.webp'))

@section('twitter_title', 'Disclaimer')
@section('twitter_site', '@assignmenthelp')

@section('structured_data')
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
        "ratingCount": "100",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>
@endsection

@section('content')
<section class="section">
    <div class="container">
        <nav aria-label="breadcrumb" class="p-3 ps-4" style="background: #f5f5f5;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item icon-color active" aria-current="page">Disclaimer</li>
            </ol>
        </nav>
    </div>
</section>

<div class="basic-content mb-5">
    <div class="container">
        <div class="heading-content">
            <h1>Disclaimer</h1>
            <h2 style="font-size: 1rem;">© Copyright {{ config('app.name') }} All rights reserved.</h2>
            <p>You may not copy, modify, publish, transmit, transfer or sell, reproduce, create derivative works from, distribute, perform, display, or in any way exploit any of the content of this report, in whole or in part, save as hereinafter provided. You may download or copy one copy of the report you have purchased only for your own personal use for academic study purposes only, however, you may not submit this document under your own name for academic assessment.</p>
            <p>This also applies to any sections we add to the work that you have completed however; it does not apply to sections completed solely by you.</p>
            <p>The statements contained herein are statements of opinion of the writer only and not the statements of {{ config('app.name') }}, its officers, employees or agents. To the fullest extent permissible by law, {{ config('app.name') }} hereby excludes liability for the truth or accuracy of any information provided herein, your statutory rights as a customer are not affected.</p>
        </div>
    </div>
</div>

<div class="slideshow-container section bg-gray">
    <div class="container">
        <div class="simple">
            <br>
            <h2 class="heading-title">What our Clients have to Say <span>About Us</span></h2>
        </div>
        
        <div class="testimonial-slider">
            <div class="mySlides active">
                <q>I am lucky to find awesome assignment writers like these. It was a blessing in disguise.</q>
                <div class="img"><img src="{{ asset('template/img/benjamin.jpg') }}" class="testi-img-size" alt="Benjamin"></div>
                <p class="author">- Benjamin</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>

            <div class="mySlides">
                <q>Team {{ config('app.name') }} provides such a satisfactory and transparent service and I'm flattered after seeing their dedication and quality. I would recommend this to others.</q>
                <div class="img"><img src="{{ asset('template/img/samuel.jpg') }}" class="testi-img-size" alt="Samuel"></div>
                <p class="author">- Samuel</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>

            <div class="mySlides">
                <q>Thanks to team {{ config('app.name') }} for helping me to clear my doubts regarding the topic and delivering a mindblowing assignment. I passed with flying colours in my history undergrad degree.</q>
                <div class="img"><img src="{{ asset('template/img/gregory.jpg') }}" class="testi-img-size" alt="Gregory"></div>
                <p class="author">- Gregory</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>

            <div class="mySlides">
                <q>They explained neuroscience concepts with proficiency, left no stones unturned and my report card looked so good after several years. Thanks to team {{ config('app.name') }}.</q>
                <div class="img"><img src="{{ asset('template/img/katherine.jpg') }}" class="testi-img-size" alt="Katherine"></div>
                <p class="author">- Katherine</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>

            <div class="mySlides">
                <q>I worked with {{ config('app.name') }} and the experience was out of the world. I've seen quality in their work and improvement in grades and it's worth taking their service.</q>
                <div class="img"><img src="{{ asset('template/img/samantha.jpg') }}" class="testi-img-size" alt="Samantha"></div>
                <p class="author">- Samantha</p>
                <div class="star-ratting home-star-ratting">
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                    <i class="fa fa-star yellow" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        
        <div class="container text-center mt-4">
            <a href="{{ route('services') }}" class="main-btn">Read More</a>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
</div>
@endsection

@section('additional_head')
<style>
.basic-content {
    padding: 2rem 0;
}

.heading-content h1 {
    color: var(--primary-color);
    margin-bottom: 2rem;
    font-size: 2.5rem;
    font-weight: 700;
}

.heading-content h2 {
    color: var(--primary-color);
    margin: 2rem 0 1rem 0;
    font-size: 1.8rem;
    font-weight: 600;
}

.heading-content p {
    margin-bottom: 1rem;
    line-height: 1.6;
    color: #333;
}

.breadcrumb {
    margin-bottom: 0;
}

.breadcrumb-item a {
    color: var(--primary-color);
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: var(--secondary-color);
}

.breadcrumb-item.active {
    color: #6c757d;
}

/* Testimonial Slider Styles */
.slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    padding: 2rem 0;
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
    font-size: 1.2rem;
    font-style: italic;
    color: #333;
    display: block;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.mySlides .img {
    margin: 1rem 0;
}

.testi-img-size {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.mySlides .author {
    font-weight: 600;
    color: var(--primary-color);
    margin: 1rem 0;
}

.star-ratting {
    margin: 1rem 0;
}

.star-ratting .fa-star.yellow {
    color: #ffc107;
    margin: 0 2px;
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
    color: white;
    text-decoration: none;
}

.main-btn {
    background-color: var(--primary-color);
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.main-btn:hover {
    background-color: var(--secondary-color);
    color: white;
    text-decoration: none;
}
</style>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
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

// Auto slide every 5 seconds
setInterval(function() {
    plusSlides(1);
}, 5000);
</script>
@endsection
