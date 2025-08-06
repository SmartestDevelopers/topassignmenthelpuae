@extends('layouts.front')

@section('seo_title', 'Best Assignment Writing Services by UK Top Writers - ' . config('app.name'))
@section('seo_description', 'Get high-quality assignment help, essay writing and proofreading services from qualified UK writers. We help students achieve better grades with 100% plagiarism-free content.')

@section('og_title', 'Best Assignment Writing Services by UK Top Writers')
@section('og_description', 'Professional assignment writing services with qualified writers who will help you score good grades. Get affordable assignment services with guaranteed quality.')
@section('og_image', asset('template/img/feature-1.webp'))

@section('twitter_title', 'Best Assignment Writing Services by UK Top Writers')
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
<!-- BANNER START -->
<div class="banner section section-1">
    <div class="container">
        <div class="row center">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h1 class="banner-title">Assisting students with professional assignment help services</h1>
                    <p class="mb-0">Achieve your dream grades and academic goals with the help of our professional assignment services.</p>
                    <div class="button-design mt-4">
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

<section class="section-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="simple">
                    <h2 class="heading-title">{{ config('app.name') }} <span>Services</span></h2>
                    <p class="content-simple-p mb">The inspirational team of professionals welcomes you to the world of knowledge and certified course work academy. Initiating from the simple essays of high school and driven towards the PhD research, we have detailed our list in the services section.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO START -->
<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="simple">
                    <h2 class="heading-title">What <span>we do</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <p align="justify" class="content-simple-p mb">It is all about writing from scratch following the client's instructions. Adding to this lays the activity/service for proofreading and editing the papers the client provides. What are the benefits of getting <b>assignment help</b> from this platform? There are several benefits, and you can find some of them below.</p>
                <p align="justify">With our assurance of 100% plagiarism-free content by qualified writers, the customer gets a guarantee of the originality of the work. We also emphasise extra consultancy and support to make the overall experience enjoyable. Individual attention to each student supports them during the study phase.</p>
                <p align="justify">It is our commitment to deliver genuine, professional, and affordable services keeping our ethical principles, i.e., Honesty, Trust, and Integrity.</p>
                <p align="justify" class="mb-0">Our varied services in almost every niche have made it possible to deliver top-notch quality. Even the prices are affordable and comparatively cheaper than others. Here, our central prominence is how better we can do for students and customer-based pricing mechanisms.</p>
            </div>
            <div class="col-lg-5">
                <div class="feature-img">
                    <div class="researchvideo" style="margin-top: 32px;">
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
                    <h2 class="heading-title">Our <span>Services</span></h2>
                    <p class="content-simple-p mb">The following are a few examples of the wide range of assignment services that our well-qualified and experienced experts provide</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="item">
                    <div class="service-boxes ser-box">
                        <div class="service-icons">
                            <img src="{{ asset('template/img/12.webp') }}" class="img-fluid" style="width: 35px; height: 100px;" alt="Dissertation Services" loading="lazy" />
                        </div>
                        <div class="service-title mt-4">
                            <h2 style="font-size: 24px;">Dissertation Services</h2>
                        </div>
                        <div class="service-content">
                            <p class="mb-0">Dissertation is playing a very important role in student's life if he/she is in research field. Nowadays many of the institutes whether of management or technical studies have made it compulsory to create..</p>
                        </div>
                        <div class="service-link ser-btn">
                            <a href="#" aria-label="dissertation">Read More >></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-boxes ser-box">
                        <div class="service-icons">
                            <img src="{{ asset('template/img/13.webp') }}" class="img-fluid" style="width: 35px; height: 100px;" alt="Essay Writing Services" loading="lazy" />
                        </div>
                        <div class="service-title mt-4">
                            <h2 style="font-size: 24px;">Essay Writing Services</h2>
                        </div>
                        <div class="service-content">
                            <p class="mb-0">It is somehow easy to find one who writes essay. But when it comes to completion of essay assignment on time by meeting all the guidelines, it becomes somewhat tricky</p>
                        </div>
                        <div class="service-link ser-btn">
                            <a href="#" aria-label="essaywriting">Read More >></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-boxes ser-box">
                        <div class="service-icons">
                            <img src="{{ asset('template/img/17.webp') }}" class="img-fluid" style="width: 35px; height: 100px;" alt="Report Writing" loading="lazy" />
                        </div>
                        <div class="service-title mt-4">
                            <h2 style="font-size: 24px;">Report Writing</h2>
                        </div>
                        <div class="service-content">
                            <p class="mb-0">As a business, one of the most difficult challenges is finding qualified writers who will work efficiently and produce good quality content.</p>
                        </div>
                        <div class="service-link ser-btn">
                            <a href="#" aria-label="reportwriting">Read More >></a>
                        </div>
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
                    <h2 class="heading-title">Features of {{ config('app.name') }} <span>Services</span></h2>
                    <p class="content-simple-p mb">If you want to know what makes us different from other assignment writing service providers, read the following section</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3 mb-5">
            <div class="col-lg-6">
                <div class="assignment-service mb-3">
                    <div class="assignment-service-boxes d-flex align-items-start">
                        <div class="assignment-service-icon assignment-ser-icon">
                            <img src="{{ asset('template/img/111.webp') }}" class="img-fluid review-iconss" alt="assignment services" loading="lazy">
                        </div>
                        <div class="service-title ser-titi">
                            <h2 class="mt-0 assignment-service-title" style="font-size: 24px;">Highly Qualified & experienced PhDs</h2>
                            <p class="mb-0">We allocate the most experienced and qualified experts for your project and our team ensures that your assignment writer is a perfect fit for the field. Professionals go through a rigorous process to hire the best assignment writer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="assignment-service mb-3">
                    <div class="assignment-service-boxes d-flex align-items-start">
                        <div class="assignment-service-icon assignment-ser-icon">
                            <img src="{{ asset('template/img/112.webp') }}" class="img-fluid review-iconss" alt="assignment services" loading="lazy" />
                        </div>
                        <div class="service-title ser-titi">
                            <h2 style="font-size: 24px;" class="mt-0 assignment-service-title">Incomparable Quality Satisfaction</h2>
                            <p class="mb-0">Experts provide assignments of incomparable quality. Our team uses the latest tools, technology, methods and techniques to provide high-quality service and make assignments flawless through multiple editing and proofreading sessions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="assignment-service mb-3">
                    <div class="assignment-service-boxes d-flex align-items-start">
                        <div class="assignment-service-icon assignment-ser-icon">
                            <img src="{{ asset('template/img/113.webp') }}" class="img-fluid review-iconss" alt="assignment services" loading="lazy">
                        </div>
                        <div class="service-title ser-titi">
                            <h2 style="font-size: 24px;" class="mt-0 assignment-service-title">Guaranteed Delivery before deadline</h2>
                            <p class="mb-0">Our team understands that deadlines play a crucial role in grades. That is why our experts deliver your assignments before the submission date. They streamline the procedure and track the progress to deliver the assignments quickly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="assignment-service mb-3">
                    <div class="assignment-service-boxes d-flex align-items-start">
                        <div class="assignment-service-icon assignment-ser-icon">
                            <img src="{{ asset('template/img/114.webp') }}" class="img-fluid review-iconss" alt="assignment services" loading="lazy">
                        </div>
                        <div class="service-title ser-titi">
                            <h2 style="font-size: 24px;" class="mt-0 assignment-service-title">100% Confidential & Plagiarism Free</h2>
                            <p class="mb-0">We understand that the safe service and projects' originality are essential. That is why our team provides 100% original projects while maintaining confidentiality. They utilise the latest plagiarism tools and custom code to do so.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURES END -->

<!-- TESTIMONIALS START -->
<section class="section" style="background: #f1f1f1;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="slideshow-container section">
                    <div class="simple">
                        <br>
                        <h2 class="heading-title">What our Clients have to Say <span>About Us</span></h2>
                    </div>
                    <div class="mySlides">
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
                    <div class="conatainer" align="center">
                        <a href="#" aria-label="testimonial" class="main-btn">Read More >></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-img">
                    <div class="researchvideo mb-5">
                        <img src="{{ asset('template/img/vv3.jpg') }}" alt="student testimonial" loading="lazy" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIALS END -->
@endsection

@section('additional_scripts')
<script>
    // Set minimum date for deadline input
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("deadline")[0].setAttribute('min', today);
</script>
@endsection
