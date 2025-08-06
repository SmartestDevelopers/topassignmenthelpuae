@extends('layouts.front')

@section('seo_title', 'Disclaimer | ' . config('app.name'))
@section('seo_description', 'Read the Disclaimer for TopAssignmentHelpUAE to understand the limitations of our academic support services, intended use, and liability policies.')

@section('og_title', 'Disclaimer - ' . config('app.name'))
@section('og_description', 'Learn about the Disclaimer for TopAssignmentHelpUAE’s academic support services in UAE, outlining usage policies, limitations of liability, and academic integrity guidelines.')
@section('og_image', asset('template/img/feature-1.webp'))

@section('twitter_title', 'Disclaimer')
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
    }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Disclaimer",
        "item": "{{ route('disclaimer') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Disclaimer - {{ config('app.name') }}",
    "description": "Disclaimer for TopAssignmentHelpUAE’s academic support services, outlining usage policies, limitations of liability, and academic integrity guidelines.",
    "publisher": {
        "@type": "Organization",
        "name": "{{ config('app.name') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('template/img/RMA-logo.webp') }}"
        }
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
            <p>Welcome to Top Assignment Help UAE. This Disclaimer outlines the limitations of our responsibility and the intended use of our services. By using our website (<a href="https://topassignmenthelpuae.com" class="inner-links">https://topassignmenthelpuae.com</a>) and purchasing our services, you agree to the terms stated below.</p>

            <h2>1. Academic Use Only</h2>
            <p>Top Assignment Help UAE provides academic support services for educational and learning purposes only. The content, assignments, essays, and other materials delivered through our platform are intended to serve as reference material, guidance, and study aids.</p>
            <p>Clients are strictly prohibited from submitting any material purchased from us as their original work in any academic institution. Doing so may violate the academic integrity policies of your school, college, or university.</p>

            <h2>2. No Guarantee of Grades</h2>
            <p>While we strive to deliver high-quality and well-researched academic support, we do not guarantee specific grades or academic outcomes. Academic performance depends on a variety of factors outside our control, including how you use the material and your institution’s evaluation criteria.</p>

            <h2>3. No Legal or Professional Advice</h2>
            <p>The content on our website, including blog articles, resources, and consultation advice, is provided for informational purposes only and should not be considered professional, legal, or academic advice. Always consult with a qualified academic advisor or faculty member regarding your assignments and academic responsibilities.</p>

            <h2>4. Third-Party Services and Content</h2>
            <p>Our website may contain links to third-party websites or services. We are not responsible for the content, accuracy, or reliability of any third-party information, services, or advertisements. Accessing third-party content is at your own risk.</p>

            <h2>5. Limitation of Liability</h2>
            <p>Top Assignment Help UAE is not liable for any direct, indirect, incidental, or consequential damages resulting from the misuse of our services, unauthorised use of content, or violations of academic policies. It is the sole responsibility of the user to ensure that the use of our services complies with their institution's guidelines.</p>

            <h2>6. Changes to This Disclaimer</h2>
            <p>We may update or change this Disclaimer at any time without prior notice. Any changes will be posted on this page. Continued use of our website implies your acceptance of the revised terms.</p>
        </div>
    </div>
</div>

<div class="slideshow-container section bg-gray">
    <div class="container">
        <div class="simple">
            <br>
            <h2 class="heading-title">What our Clients have to Say <span style="color: #F17D00;">About Us</span></h2>
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
    color: #F17D00;
    margin-bottom: 2rem;
    font-size: 2.5rem;
    font-weight: 700;
}

.heading-content h2 {
    color: #F17D00;
    margin: 2rem 0 1rem 0;
    font-size: 1.8rem;
    font-weight: 600;
}

.heading-content p {
    margin-bottom: 1rem;
    line-height: 1.6;
    color: #333;
}

.inner-links {
    color: #F17D00;
    text-decoration: none;
}

.inner-links:hover {
    color: #d96b00;
    text-decoration: underline;
}

.breadcrumb {
    margin-bottom: 0;
}

.breadcrumb-item a {
    color: #F17D00;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: #d96b00;
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

.bg-gray {
    background: #f1f1f1;
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
    color: #F17D00;
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
    background-color: #F17D00;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.main-btn:hover {
    background-color: #d96b00;
    color: white;
    text-decoration: none;
}

.heading-title {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.heading-title span {
    color: #F17D00;
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