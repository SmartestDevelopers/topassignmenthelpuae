@extends('layouts.front')

@section('seo_title', 'Explore Our Collection of Free Samples for Assignment Help | ' . config('app.name'))
@section('seo_description', 'Get instant assignment help with our collection of free samples. Our expertly crafted samples cover a variety of subjects and topics from essays to dissertations.')

@section('og_title', 'Explore Our Collection of Free Samples for Assignment Help')
@section('og_description', 'Get instant assignment help with our collection of free samples. Our expertly crafted samples cover a variety of subjects and topics from essays to dissertations.')
@section('og_image', asset('template/img/ab.webp'))

@section('twitter_title', 'Explore Our Collection of Free Samples for Assignment Help')
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
        "name": "Free Samples",
        "item": "{{ route('free-samples') }}"
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
                    <h1 class="">Free Samples</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Free Samples</li>
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
                    <h2 class="heading-title">Free Assignment <span>Samples</span></h2>
                    <p class="content-simple-p mb-0">Explore our comprehensive collection of free assignment samples across various subjects and academic levels. These expertly crafted samples will help you understand the quality and structure of professional academic writing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-details-section">
    <div class="tab-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>A</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Accounting <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Anthropology <span>02</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Art & Architecture <span>03</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>B</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Business Strategy<span>05</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Business Management<span>08</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Biology<span>06</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>C</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Corporate<span>03</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Corporate Strategy <span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Cross Cultural<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Consumer Behaviour<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Chemistry<span>04</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>D</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Digital Technology<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Data Management<span>01</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>E</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Economics<span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">English<span>05</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Engineering<span>07</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>F</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Finance <span>07</span></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>G</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Geography<span>03</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>H</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Human Resource <span>06</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">History <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Health <span>05</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>L</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Law<span>08</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Literature<span>06</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>M</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Management<span>09</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Marketing<span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Marketing Strategy <span>12</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Mathematics<span>05</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Medicine<span>07</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>N</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Nursing<span>06</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>O</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Operations Management<span>01</span></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>P</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Photography<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Project Management<span>03</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Psychology<span>05</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Physics<span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Philosophy<span>03</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>R</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Research Development<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Research Methodology<span>03</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>S</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Strategic Management <span>07</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Statistics <span>04</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Sociology <span>05</span></a>
                        </div>
                    </div>
                    <div class="tab-subject">
                        <div class="tab-category">
                            <span>T</span>
                        </div>
                        <div class="list-group tab-category-content">
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Transport Network<span>02</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Tourism Management<span>01</span></a>
                            <a href="#" class="list-group-item list-group-item-action tab-list-d">Technology<span>06</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Use Our <span>Free Samples?</span></h2>
                    <p class="content-simple-p mb">Our free samples provide valuable insights into professional academic writing standards and help you understand what quality work looks like.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-eye" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Quality Reference</h4>
                    <p>See examples of high-quality academic writing that meets university standards and requirements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Learning Tool</h4>
                    <p>Learn proper formatting, citation styles, and academic writing techniques from expert examples.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-lightbulb" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Inspiration</h4>
                    <p>Get ideas and inspiration for your own assignments across various subjects and topics.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Use Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How to Use Our <span>Samples</span></h2>
                    <p class="content-simple-p mb">Follow these guidelines to make the most of our free sample collection</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h5>Browse by Subject</h5>
                    <p>Select your subject area from our alphabetically organized categories to find relevant samples.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h5>Study the Structure</h5>
                    <p>Analyze the organization, formatting, and flow of ideas in the sample assignments.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h5>Learn Citation Styles</h5>
                    <p>Observe how references and citations are properly formatted according to academic standards.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h5>Use as Reference</h5>
                    <p>Use these samples as a reference guide while working on your own assignments - never copy directly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('additional_head')
<style>
.tab-design {
    padding: 3rem 0;
}

.tab-subject {
    margin-bottom: 2rem;
}

.tab-category {
    background: var(--primary-color);
    color: white;
    padding: 0.5rem 1rem;
    font-weight: bold;
    font-size: 1.2rem;
}

.tab-category-content {
    border: 1px solid #ddd;
    border-top: none;
}

.tab-list-d {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 1rem;
    border-bottom: 1px solid #eee;
    transition: all 0.3s ease;
}

.tab-list-d:hover {
    background-color: #f8f9fa;
    color: var(--primary-color);
}

.tab-list-d span {
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    min-width: 25px;
    text-align: center;
}

.feature-box, .process-step {
    padding: 2rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-box:hover, .process-step:hover {
    transform: translateY(-5px);
}

.feature-icon {
    margin-bottom: 1rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem auto;
}
</style>
@endsection
