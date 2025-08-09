@extends('layouts.front')

@section('seo_title', 'Return & Refund Policy | ' . config('app.name'))
@section('seo_description', 'Review the Return & Refund Policy for TopAssignmentHelpUAE services. Understand our terms for refunds, revisions, and customer satisfaction in UAE.')

@section('og_title', 'Return & Refund Policy - ' . config('app.name'))
@section('og_description', 'Learn about TopAssignmentHelpUAE’s Return & Refund Policy, including eligibility for refunds, revision terms, and how to request a refund for our academic support services.')
@section('og_image', asset('template/img/feature-1.webp'))

@section('twitter_title', 'Return & Refund Policy')
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
        "name": "Return & Refund Policy",
        "item": "{{ route('refund-policy') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Return & Refund Policy - {{ config('app.name') }}",
    "description": "Return & Refund Policy for using TopAssignmentHelpUAE’s academic support services, including terms for refunds, revisions, and customer satisfaction.",
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
                <li class="breadcrumb-item icon-color active" aria-current="page">Return & Refund Policy</li>
            </ol>
        </nav>
    </div>
</section>

<div class="basic-content">
    <div class="container">
        <div class="heading-content">
            <h1>Return & Refund Policy</h1>
            <p>Your satisfaction is our top priority. This Return & Refund Policy outlines the terms and conditions governing refunds and revisions for our services. By placing an order with us, you acknowledge that you have read, understood, and agreed to the terms outlined below.</p>

            <h2>1. Eligibility for Refund</h2>
            <p>A refund may be issued under the following circumstances:</p>
            <div class="expertise-list">
                <ul>
                    <li><strong>Non-Delivery of Work:</strong> If no prior arrangements were made and we are unable to deliver your finished assignment before the deadline.</li>
                    <li><strong>Poor Quality or Irrelevant Work:</strong> If the delivered assignment does not meet the original requirements provided at the time of order placement, and our revision process cannot resolve the issue.</li>
                    <li><strong>Duplicate Payment:</strong> If you accidentally make a double payment for the same order, the extra amount will be refunded within a week.</li>
                    <li><strong>Technical Errors:</strong> If an error occurs during payment processing, it may result in incorrect charges.</li>
                </ul>
            </div>

            <h2>2. Non-Refundable Situations</h2>
            <p>Refunds will not be issued in the following cases:</p>
            <div class="expertise-list">
                <ul>
                    <li>If you changed your mind after the work had started.</li>
                    <li>Failure to provide complete requirements at the time of placing the order.</li>
                    <li>Requests for a refund after made within 7 days of receiving the completed work.</li>
                    <li>Dissatisfaction based on personal preferences if the work meets all agreed-upon instructions.</li>
                    <li>Delays are caused by the client’s late responses or additional instructions after the project has begun.</li>
                </ul>
            </div>

            <h2>3. Revision Policy</h2>
            <p>Before requesting a refund, we encourage you to make use of our Free Revision Policy:</p>
            <div class="expertise-list">
                <ul>
                    <li>If the final product does not meet the original specifications, clients are entitled to three free adjustments.</li>
                    <li>After obtaining the final draft, all amendment requests must be sent within seven days.</li>
                    <li>Any major changes or additional requirements beyond the initial scope can lead to extra charges.</li>
                </ul>
            </div>

            <h2>4. How to Request a Refund</h2>
            <p>To request a refund, please contact us at <a href="mailto:support@topassignmenthelpuae.com" class="inner-links">support@topassignmenthelpuae.com</a> with:</p>
            <div class="expertise-list">
                <ul>
                    <li>Your Order ID</li>
                    <li>A clear explanation of the issue</li>
                    <li>Any supporting evidence (screenshots, feedback, etc.)</li>
                </ul>
            </div>
            <p>Our team will review your request within 3 business days and notify you of the decision.</p>

            <h2>5. Processing of Refunds</h2>
            <p>Approved refunds will be processed via the same payment method used for the transaction.</p>
            <div class="expertise-list">
                <ul>
                    <li>Refund processing may take 5–10 business days, depending on your payment provider.</li>
                </ul>
            </div>

            <h2>6. Contact Us</h2>
            <p>For any queries regarding our Return & Refund Policy, please contact:</p>
            <div class="expertise-list">
                <ul>
                    <li><strong>Top Assignment Help UAE</strong></li>
                    <li><strong>Email:</strong> <a href="mailto:support@topassignmenthelpuae.com" class="inner-links">support@topassignmenthelpuae.com</a></li>
                    <li><strong>Website:</strong> <a href="https://topassignmenthelpuae.com" class="inner-links">https://topassignmenthelpuae.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_head')
<style>
.section {
    padding: 0;
}

.basic-content {
    padding: 0;
}

.heading-content h1 {
    color: #F17D00;
    font-size: 2.5rem;
    font-weight: 700;
}

.heading-content h2 {
    color: #F17D00;
    font-size: 1.8rem;
    font-weight: 600;
}

.heading-content p {
    line-height: 1.6;
    color: #333;
}

.expertise-list ul {
    padding-left: 2rem;
}

.expertise-list li {
    line-height: 1.6;
}

.expertise-list ul ul {
    padding-left: 1.5rem;
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
</style>
@endsection