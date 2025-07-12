@extends('layouts.front')

@section('seo_title', 'Getting The Best Research My Assignment Services | ' . config('app.name'))
@section('seo_description', 'ResearchMyAssignment is the best resource to get valuable content for your academic career. Get outstanding blogs with our experts.')

@section('og_title', 'Getting The Best Research My Assignment Services')
@section('og_description', 'We have a professional team of writers who can write your assignment effectively with quality content, so you can get affordable assignment services at Research My Assignment.')
@section('og_image', asset('template/img/news-img-1.webp'))

@section('twitter_title', 'Getting The Best Research My Assignment Services')
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
        "name": "Blogs",
        "item": "{{ route('blogs') }}"
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
                    <h1 class="">Blogs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Blogs</li>
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
                    <h2 class="heading-title">Research My Assignment <span>Updated Blogs</span></h2>
                    <p class="content-simple-p mb-0">Learn about the process of writing a blog, our service and the benefits of our service by going through the blog section.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 g-4">
            <!-- Blog cards can be dynamically loaded here -->
            <div class="col-xl-4 col-md-6 d-flex">
                <div class="card card-space mb-4">
                    <img src="https://cms.researchmyassignment.com/pages/master/page/post/rma-img1 (1).webp" class="img-fluid card-img-top news-img" alt="Unravelling the Distinction: Professional Assignment Writers vs. Freelancers"/>
                    <div class="card-body body-card">
                        <div class="meta-box">
                            <i class="fa-regular fa-clock icons me-2"></i>
                            <span>04 Aug 2023</span>
                        </div>
                        <h5 class="card-title mb-3">
                            <a href="#">Unravelling the Distinction: Professional Assignment Writers vs. Freelancers</a>
                        </h5>
                        <p class="mb-0">Discover the superiority of Professional Assignment Writers over Freelancers - experts with experience and quality assurance.</p>
                        <div class="button-design mt-3">
                            <a href="#" class="service-link topbar-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more blog cards similarly -->
        </div>
    </div>
</section>
@endsection
