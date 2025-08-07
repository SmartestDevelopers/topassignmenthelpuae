@extends('layouts.front')

@section('seo_title', 'Terms and Conditions | ' . config('app.name'))
@section('seo_description', 'Review the Terms and Conditions for using TopAssignmentHelpUAE services. Understand our policies on academic support, payments, refunds, and user responsibilities.')

@section('og_title', 'Terms and Conditions - ' . config('app.name'))
@section('og_description', 'Learn about the Terms and Conditions governing the use of TopAssignmentHelpUAE’s academic support services in UAE, including policies on orders, refunds, and intellectual property.')
@section('og_image', asset('template/img/feature-1.webp'))

@section('twitter_title', 'Terms and Conditions')
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
        "name": "Terms and Conditions",
        "item": "{{ route('terms-services') }}"
    }]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Terms and Conditions - {{ config('app.name') }}",
    "description": "Terms and Conditions for using TopAssignmentHelpUAE’s academic support services, including policies on orders, payments, refunds, and intellectual property.",
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
                <li class="breadcrumb-item icon-color active" aria-current="page">Terms and Conditions</li>
            </ol>
        </nav>
    </div>
</section>

<div class="basic-content mb-5">
    <div class="container">
        <div class="heading-content">
            <h1>Terms and Conditions</h1>
            <p>Welcome to Top Assignment Help UAE. By accessing or using our website (<a href="https://topassignmenthelpuae.com" class="inner-links">https://topassignmenthelpuae.com</a>), you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully before using our services. If you do not agree with any part of these terms, please do not use our website.</p>

            <h2>1. Use of the Website</h2>
            <p>By using our website, you confirm that you are at least 18 years old or using the site under the supervision of a parent or legal guardian. You agree to use our services only for lawful purposes and by these Terms.</p>

            <h2>2. Services we Provide</h2>
            <p>Top Assignment Help UAE provides academic support services, including assignment help, essay writing, and research guidance, among others. All materials and assistance provided are intended for reference and learning purposes only and must not be submitted as your work. Misuse of our services is strictly prohibited and may result in termination of access.</p>

            <h2>3. Orders and Payments</h2>
            <div class="expertise-list">
                <ul>
                    <li>All orders must be placed through our official channels.</li>
                    <li>You agree to provide accurate and complete details when placing an order.</li>
                    <li>Payment must be made in full before work begins, unless otherwise agreed upon.</li>
                    <li>We use secure third-party payment gateways. We do not store your payment information.</li>
                </ul>
            </div>

            <h2>4. Revisions and Refund Policy</h2>
            <div class="expertise-list">
                <ul>
                    <li>We offer a limited number of free revisions to ensure customer satisfaction, subject to the original order requirements.</li>
                    <li>Refunds may be issued under specific circumstances, such as failure to deliver the service. Please refer to our <a>Refund Policy</a> for more details.</li>
                </ul>
            </div>

            <h2>5. Intellectual Property</h2>
            <p>All content on this website, including text, graphics, logos, and service materials, is the property of Top Assignment Help UAE or its content suppliers and is protected by copyright laws. You may not reproduce, distribute, or exploit any part of our content without written permission.</p>

            <h2>6. User Responsibilities</h2>
            <div class="expertise-list">
                <ul>
                    <li>You agree not to:
                        <ul>
                            <li>Use the website for any fraudulent or illegal activities.</li>
                            <li>Impersonate any person or misrepresent your identity.</li>
                            <li>Attempt to hack, disrupt, or compromise the security of the site.</li>
                            <li>Submit content that is defamatory, harmful, or violates any laws.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <h2>7. Limitation of Liability</h2>
            <p>Top Assignment Help UAE is not responsible for any direct, indirect, incidental, or consequential damages arising from the use or inability to use our services or website. We make no warranties regarding the accuracy, completeness, or reliability of any content or service.</p>

            <h2>8. External Links</h2>
            <p>Our website may include links to third-party sites. We are not responsible for the content, practices, or privacy policies of those websites. Accessing external links is at your own risk.</p>

            <h2>9. Privacy</h2>
            <p>Your use of our website is also governed by our <a href="https://topassignmenthelpuae.com/privacy" class="inner-links">Privacy Policy</a>, which outlines how we collect, use, and protect your personal information.</p>

            <h2>10. Modifications to Terms</h2>
            <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Changes will be posted on this page, and your continued use of the site constitutes acceptance of those changes.</p>

            <h2>11. Governing Law</h2>
            <p>The laws of the United Arab Emirates govern these Terms and Conditions. Any disputes arising under or related to these terms will be subject to the jurisdiction of the UAE courts.</p>
        </div>
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

.expertise-list ul {
    margin: 1rem 0;
    padding-left: 2rem;
}

.expertise-list li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.expertise-list ul ul {
    margin: 0.5rem 0;
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