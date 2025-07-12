@extends('layouts.front')

@section('seo_title', 'About Us - Professional Assignment Writing Services | ' . config('app.name'))
@section('seo_description', 'Learn about our professional assignment writing services. We offer high-quality academic writing, dissertations, editing, and proofreading services to help students achieve their academic goals.')

@section('og_title', 'About Us - Professional Assignment Writing Services')
@section('og_description', 'We offer writing services that help you fulfill your best quality and research work as per your requirements. Our satisfaction of clients with academic research is our main priority.')
@section('og_image', asset('template/img/about-img.webp'))

@section('twitter_title', 'About Us - Professional Assignment Writing Services')
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
        "name": "About Us",
        "item": "{{ route('about') }}"
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
<!-- BANNER START -->
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<div class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">About <span>Us</span></h2>
                    <p class="content-simple-p mb-0">Education is the most powerful tool you can use to change the world. If you want to be successful in your educational journey, you need <b>assignment writer</b> help from the best assignment writers in the world.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <div class="col-xl-6">
                <div class="about-content">
                    <p>Our research consulting services help you to fulfill your best quality and researched work as per your requirements as the satisfaction of clients with our academic research is our main priority. For your convenience, our well experienced research team strives hard to present the high quality essay consulting and guidance service in affordable price for the academics, higher studies, career and business.</p>
                    
                    <p>Simultaneously, our research consultants are completely dedicated in providing guidance and support to students by editing academic work, improvement and proofreading and assisting students to provide proper referencing style in his work which ensures they fulfill every need and requirements to complete the academic work as per university guidelines.</p>
                    
                    <p class="">Our team is committed in delivering well researched and affordable consulting services within deadline for business and academics. With a good combination of consulting and editing skills, our team of essay consultants focuses on the complete satisfaction of customers due to cut throat competition in the market.</p>
                    
                    <p>Every dissertation, essay, presentation, article consulting assistance service is original and of high quality with specific instructions which makes it an amazing value to money service from our side to the client. Just your trust and confidence in our <b>essay consulting service</b> while makes us prove ourselves as outstanding in every service demanded by you to get from us within determined time.</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="{{ asset('template/img/about-img.webp') }}" class="img-fluid w-100" alt="About our assignment writing services">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How does our coursework consulting <span>services work?</span></h2>
                    <p class="content-simple-p">Our main ambition and motto is to keep the entire order and delivering method in a stream and in a simple way and based on it, we provide every research consulting task as per the expectations of the client and try to present more than expected in every project, coursework, exam notes and other test papers.</p>
                    
                    <p>Till date, we have achieved very high conversion rate of clients who had provided good response to our dissertation consultation services and desires to use our services for essays and projects every time due to the quality and outstanding services.</p>
                    
                    <p>In case of service rates, our pricing is affordable and is reflective based on the project length, level of reading and the time allotted to complete the service. You can <a href="#" class="inner-links">click here</a> and book your services with us by entering your requirements and details which makes us easy to work for you every time.</p>
                    
                    <div class="button-design mt-5">
                        <a href="#" class="main-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="about-sm-content">
                    <h4 style="line-height: 35px;">We help students in delivering quality assignments by providing in depth consultation for their assignments under guidance of our expert researchers</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR MISSION & VISION -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Our Mission & <span>Vision</span></h2>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="mission-vision-box">
                    <div class="mv-icon">
                        <i class="fa-solid fa-bullseye" style="font-size: 3rem; color: var(--primary-color);"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide exceptional academic writing services that empower students to achieve their educational goals while maintaining the highest standards of quality, originality, and academic integrity. We strive to bridge the gap between student needs and academic excellence through personalized support and expert guidance.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-vision-box">
                    <div class="mv-icon">
                        <i class="fa-solid fa-eye" style="font-size: 3rem; color: var(--primary-color);"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To become the leading global platform for academic assistance, recognized for our commitment to student success, innovative approaches to learning support, and unwavering dedication to academic excellence. We envision a world where every student has access to quality educational support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Choose <span>Us?</span></h2>
                    <p class="content-simple-p mb">Here are the key reasons why students trust us with their academic success</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Expert Writers</h4>
                    <p>Our team consists of qualified PhD and Masters degree holders with extensive experience in academic writing across various disciplines.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Timely Delivery</h4>
                    <p>We understand the importance of deadlines and guarantee on-time delivery of all assignments without compromising on quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>100% Original</h4>
                    <p>All our work is completely original and plagiarism-free, backed by comprehensive plagiarism reports and quality assurance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-headset" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Our customer support team is available round the clock to assist you with any queries or concerns you may have.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-dollar-sign" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Affordable Pricing</h4>
                    <p>We offer competitive and transparent pricing with no hidden costs, making quality academic help accessible to all students.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-box text-center">
                    <div class="wc-icon">
                        <i class="fa-solid fa-redo" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Free Revisions</h4>
                    <p>We offer unlimited free revisions until you are completely satisfied with the quality and content of your assignment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR TEAM -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Meet Our <span>Team</span></h2>
                    <p class="content-simple-p mb">Our dedicated team of professionals is committed to helping you achieve academic excellence</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('template/img/team-1.jpg') }}" alt="Dr. Sarah Johnson" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h4>Dr. Sarah Johnson</h4>
                    <p class="team-designation">Head of Academic Writing</p>
                    <p>PhD in English Literature with 10+ years of experience in academic writing and research methodology.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('template/img/team-2.jpg') }}" alt="Prof. Michael Brown" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h4>Prof. Michael Brown</h4>
                    <p class="team-designation">Research Director</p>
                    <p>Masters in Business Administration with expertise in management studies and business research.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('template/img/team-3.jpg') }}" alt="Dr. Emily Davis" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h4>Dr. Emily Davis</h4>
                    <p class="team-designation">Quality Assurance Manager</p>
                    <p>PhD in Education with specialization in academic standards and quality control processes.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('additional_head')
<style>
.mission-vision-box, .why-choose-box, .team-member {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.mission-vision-box:hover, .why-choose-box:hover, .team-member:hover {
    transform: translateY(-5px);
}

.mv-icon, .wc-icon {
    margin-bottom: 1rem;
}

.team-img {
    margin-bottom: 1rem;
}

.team-designation {
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.about-sm-content h4 {
    color: #333;
    font-weight: 600;
}
</style>
@endsection
