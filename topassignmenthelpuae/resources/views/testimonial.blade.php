@extends('layouts.front')

@section('seo_title', 'Testimonials | ' . config('app.name'))
@section('seo_description', 'Read what our students say about TopAssignmentHelpUAE’s academic writing services and their impact on academic success.')

@section('og_title', 'Testimonials - TopAssignmentHelpUAE')
@section('og_description', 'Read what our students say about TopAssignmentHelpUAE’s academic writing services and their impact on academic success.')
@section('og_image', asset('template/img/testimonials.webp'))

@section('twitter_title', 'Testimonials - TopAssignmentHelpUAE')
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
        "name": "Testimonials",
        "item": "{{ route('testimonial') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "{{ config('app.name') }}",
    "url": "{{ route('home') }}",
    "description": "TopAssignmentHelpUAE provides expert academic writing services with positive feedback from students worldwide."
}
</script>
@endsection

@section('content')
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="text-white">Testimonials</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Testimonials</li>
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
                    <h2 class="heading-title">What Our <span style="color: #F17D00;">Students Say</span></h2>
                    <p class="content-simple-p mb-0">Hear from students who have benefited from TopAssignmentHelpUAE’s academic services.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<section class="section bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="owl-carousel owl-theme testimonial-slider">
                    <div class="item">
                        <div class="testimonial-box text-center">
                            <div class="testimonial-content">
                                <p>"TopAssignmentHelpUAE delivered my economics assignment on time with excellent quality. Their experts made complex concepts easy to understand!"</p>
                            </div>
                            <div class="testimonial-author">
                                <h5>Aliyah K.</h5>
                                <p>Economics Student, UAE</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box text-center">
                            <div class="testimonial-content">
                                <p>"The SPSS assignment help was spot-on. The detailed analysis and clear explanations helped me score an A+!"</p>
                            </div>
                            <div class="testimonial-author">
                                <h5>Mohammed S.</h5>
                                <p>Statistics Student, Dubai</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box text-center">
                            <div class="testimonial-content">
                                <p>"Their proofreading service polished my dissertation to perfection. Highly recommend TopAssignmentHelpUAE!"</p>
                            </div>
                            <div class="testimonial-author">
                                <h5>Sarah M.</h5>
                                <p>PhD Candidate, Abu Dhabi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('additional_head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

.testimonial-box {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin: 0 15px;
}

.testimonial-content p {
    font-style: italic;
    color: #333;
    margin-bottom: 1rem;
}

.testimonial-author h5 {
    color: #F17D00;
    font-weight: 600;
}

.testimonial-author p {
    color: #666;
    font-size: 0.9rem;
}

.bg-gray {
    background: #f1f1f1;
}
</style>
@endsection

@section('additional_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function(){
    $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 2 }
        }
    });
});
</script>
@endsection