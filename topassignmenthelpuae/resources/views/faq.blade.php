@extends('layouts.front')

@section('seo_title', 'FAQ | ' . config('app.name'))
@section('seo_description', 'Find answers to frequently asked questions about TopAssignmentHelpUAE’s academic writing services.')

@section('og_title', 'FAQ - TopAssignmentHelpUAE')
@section('og_description', 'Find answers to frequently asked questions about TopAssignmentHelpUAE’s academic writing services.')
@section('og_image', asset('template/img/faq.webp'))

@section('twitter_title', 'FAQ - TopAssignmentHelpUAE')
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
        "name": "FAQ",
        "item": "{{ route('faq') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What services does TopAssignmentHelpUAE offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We offer a wide range of academic writing services, including assignment help, coursework writing, SPSS analysis, editing, proofreading, and CV writing."
            }
        },
        {
            "@type": "Question",
            "name": "How do you ensure the quality of assignments?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our assignments are crafted by experts with advanced degrees and undergo rigorous quality checks to ensure accuracy and originality."
            }
        }
    ]
}
</script>
@endsection

@section('content')
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="text-white">Frequently Asked Questions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">FAQ</li>
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
                    <h2 class="heading-title">Your Questions, <span style="color: #F17D00;">Answered</span></h2>
                    <p class="content-simple-p mb-0">Find answers to common questions about Top Assignment Help UAE’s services.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What services does Top Assignment Help UAE offer?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a wide range of academic writing services, including assignment help, coursework writing, SPSS analysis, editing, proofreading, and CV writing.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                How do you ensure the quality of assignments?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our assignments are crafted by experts with advanced degrees and undergo rigorous quality checks to ensure accuracy and originality.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Can you meet tight deadlines?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we prioritize timely delivery and can accommodate urgent deadlines without compromising quality.
                            </div>
                        </div>
                    </div>
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

.accordion-button {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
}

.accordion-button:not(.collapsed) {
    color: #F17D00;
    background-color: #f1f1f1;
}

.accordion-body {
    font-size: 1rem;
    color: #333;
}
</style>
@endsection

@section('additional_scripts')
<!-- No scripts needed as no carousel or dynamic content -->
@endsection