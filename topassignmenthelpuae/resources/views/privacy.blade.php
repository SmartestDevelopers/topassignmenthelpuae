@extends('layouts.front')

@section('seo_title', 'Privacy Policy | ' . config('app.name'))
@section('seo_description', 'Read the Privacy Policy of TopAssignmentHelpUAE to understand how we collect, use, disclose, and safeguard your information when you visit our website.')

@section('og_title', 'Privacy Policy - ' . config('app.name'))
@section('og_description', 'Learn how TopAssignmentHelpUAE protects your personal information with our comprehensive privacy policy.')
@section('og_image', asset('template/img/ab.webp'))

@section('twitter_title', 'Privacy Policy - ' . config('app.name'))
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
        "name": "Privacy Policy",
        "item": "{{ route('privacy-policy') }}"
    }]
}
</script>
@endsection

@section('content')
<section class="section">
    <div class="container">
        <nav aria-label="breadcrumb" class="p-3 ps-4" style="background: #f5f5f5;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item icon-color active" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>
    </div>
</section>

<div class="basic-content mb-5">
    <div class="container">
        <div class="heading-content">
            <h1>Privacy Policy</h1>
            <p>Welcome to Top Assignment Help UAE (<a href="https://topassignmenthelpuae.com" class="inner-links">https://topassignmenthelpuae.com</a>). Your privacy is our responsibility. In accordance with this Privacy Policy, you will get to know how we collect, use, disclose, and safeguard your information when you visit our website. Kindly do not use our site if you disagree with our terms and policy. Please read this policy carefully.</p>

            <h2>1. How Do We Collect Information</h2>
            <p>We collect information in the following ways:</p>
            <h5>a. Personal Information</h5>
            <p>When you submit a contact form to get our service or to place an order, we may collect:</p>
            <div class="expertise-list">
                <ul>
                    <li>Full name, email address & phone number</li>
                    <li>Academic details & Payment details (processed securely via third-party gateways)</li>
                </ul>
            </div>
            <h5>b. Non-Personal Information</h5>
            <p>We may also collect non-identifiable information such as:</p>
            <div class="expertise-list">
                <ul>
                    <li>IP address</li>
                    <li>Browser type & Device type</li>
                    <li>Operating system</li>
                    <li>Pages visited & Time spent on site</li>
                </ul>
            </div>
            <p>We collect this information to better analyze users’ behavior to improve our services.</p>

            <h2>2. What Do We Use Your Information For?</h2>
            <p>We use this information for the following purposes:</p>
            <div class="expertise-list">
                <ul>
                    <li>To provide and manage assignment help services</li>
                    <li>To respond to inquiries or support requests</li>
                    <li>To process payments and send order confirmations</li>
                    <li>To send updates, promotional offers, or newsletters (with consent)</li>
                    <li>To improve our website and user experience</li>
                    <li>To prevent fraud or unauthorized access</li>
                </ul>
            </div>

            <h2>3. With Whom Do We Share Your Information</h2>
            <p>We never sell, trade, or rent our clients' personal information to any third parties. However, we only share your data with trusted service providers (e.g., payment processors, academic experts) who are contractually obligated to keep your information confidential. We may also disclose the data when required by law, court order, or government authority, or when we need to safeguard the rights, property, or safety of our website, users, or the public.</p>

            <h2>4. Data Security</h2>
            <p>We take the necessary technical and organizational precautions to secure your data:</p>
            <div class="expertise-list">
                <ul>
                    <li>SSL encryption for data transmission</li>
                    <li>Secure payment gateways</li>
                    <li>Limited access to personal information by authorized personnel only</li>
                </ul>
            </div>
            <p>However, no online transmission is 100% secure. We strive to protect your information, but complete security cannot be assured.</p>

            <h2>5. Cookies and Tracking Technologies</h2>
            <p>Yes, cookies are on our website for a better browsing experience and to improve our services. Cookies are small text files stored on your device by your browser (if you allow) that enable service providers to recognize your browser and remember specific data. These cookies help us remember your preferences for future visits and process items in your shopping cart, track advertisements, and collect combined data about site traffic and user interactions. This allows us to analyze performance and deliver a more personalized and optimized experience.</p>
            <p>You can manage or disable cookies through your browser settings. By using our website, you consent to our use of cookies under this policy.</p>

            <h2>6. Your Rights (Under GDPR/Global Privacy Laws)</h2>
            <p>Depending on your location, you may have the right to:</p>
            <div class="expertise-list">
                <ul>
                    <li>Access the personal data we hold about you</li>
                    <li>Request correction or deletion of your data</li>
                    <li>Object to processing or withdraw consent</li>
                    <li>Complain to a data protection authority</li>
                </ul>
            </div>
            <p>To exercise your rights, please contact us at <a href="mailto:support@topassignmenthelpuae.com" class="inner-links">support@topassignmenthelpuae.com</a>.</p>

            <h2>7. Third-Party Links</h2>
            <p>Our website may also contain links to third-party websites. We are not responsible for the content or privacy practices of those sites as they would have their own privacy policies. We encourage you to review their privacy policies by yourself.</p>

            <h2>8. Children's Privacy</h2>
            <p>Children under the age of 13 are not eligible for our services. We do not knowingly collect data from minors. If you think that your child has provided us some personal information, then immediately contact us for prompt removal at <a href="mailto:support@topassignmenthelpuae.com" class="inner-links">support@topassignmenthelpuae.com</a>.</p>

            <h2>9. Changes to This Privacy Policy</h2>
            <p>We may update this policy occasionally to reflect modification in our procedures. We encourage you to review it from time to time. Continued use of our website after changes implies acceptance of the revised policy.</p>

            <h2>10. Contact Us</h2>
            <p>If you have any questions or concerns regarding this Privacy Policy, please contact us at:</p>
            <p>Top Assignment Help UAE<br>
            📧 Email: <a href="mailto:support@topassignmenthelpuae.com" class="inner-links">support@topassignmenthelpuae.com</a><br>
            🌐 Website: <a href="https://topassignmenthelpuae.com" class="inner-links">https://topassignmenthelpuae.com</a></p>
            <p>This policy was last modified on {{ date('F j, Y') }}.</p>
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

.heading-content h5 {
    color: #F17D00;
    margin: 1.5rem 0 1rem 0;
    font-size: 1.3rem;
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

.breadcrumb-item.active.icon-color {
    color: #6c757d;
}
</style>
@endsection