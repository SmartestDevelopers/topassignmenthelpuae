@extends('layouts.front')

@section('seo_title', 'Cookies & Privacy Policy | ' . config('app.name'))
@section('seo_description', 'We prioritise the security of customer details. According to our terms and conditions, third-party intervention is strictly prohibited.')

@section('og_title', 'Cookies & Privacy Policy - ' . config('app.name'))
@section('og_description', 'We Have a Professional Team of Writers, Who can write your assignment effectively with quality content, so you can get affordable assignment services')
@section('og_image', asset('template/img/ab.webp'))

@section('twitter_title', 'Cookies & Privacy Policy')
@section('twitter_site', '@assignmenthelp')

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
            
            <h2>What information do we collect?</h2>
            <p>We collect information from you when you register on our site, place an order, subscribe to our newsletter, respond to a survey or fill out a form.</p>
            <p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, e-mail address, mailing address, phone number or credit card information. You may, however, visit our site anonymously.</p>
            <p>Google, as a third party vendor, may use cookies to serve ads on our site. Google's use of the DART cookie enables it to serve ads to our users based on their visits to our sites and other sites on the Internet. Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>
            
            <h5>What do we use your information for?</h5>
            <p>Any of the information we collect from you may be used in the following ways:</p>
            <div class="expertise-list">
                <ul>
                    <li>To personalize your experience (your information helps us to better respond to your individual needs)</li>
                    <li>To improve our website (we continually strive to improve our website's offerings based on the information and feedback we receive from you)</li>
                    <li>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)</li>
                    <li>To process transactions (your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested)</li>
                    <li>To administer a contest, promotion, survey or other site feature</li>
                    <li>To send periodic emails (the email address you provide for order processing, may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc.)</li>
                </ul>
            </div>
            <p>Note: If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email.</p>
            
            <h5>How do we protect your information?</h5>
            <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.</p>
            <p>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted in our payment gateway provider's database only to be accessible to those authorized with special access rights to such systems who are required to keep the information confidential.</p>
            
            <h5>Do we use cookies?</h5>
            <p>Yes (cookies are small files that a site or its service providers transfer to your computer's hard drive through your Web browser, if you allow, that enable the site's or service providers' systems to recognize your browser and capture and remember certain information).</p>
            <p>We use cookies to help us remember and process the items in your shopping cart, understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future. We may contract with third-party service providers to assist us in better understanding our site's visitors. These service providers are not permitted to use the information collected on our behalf except to help us conduct and improve our business.</p>
            <p>If you prefer, you can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies via your browser's settings. Like most websites, if you turn your cookies off, some of our services may not function properly; however, you can still place orders over the telephone or by contacting customer service.</p>
            
            <h5>Do we disclose any information to outside parties?</h5>
            <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect our or other's rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
            
            <h5>Third-party links</h5>
            <p>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>
            
            <h5>Children's Online Privacy Protection Act Compliance</h5>
            <p>We are in compliance with the requirements of COPPA (Children's Online Privacy Protection Act). We do not collect any information from anyone under 13 years of age. Our website, products, and services are all directed at people who are at least 13 years old or older.</p>
            
            <h5>Online Privacy Policy Only</h5>
            <p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
            
            <h5>Terms and Conditions</h5>
            <p>Please also visit our Terms of Service section establishing the use, disclaimers, and limitations of liability governing the use of our website, products, and services at <a href="{{ route('terms-services') }}" class="inner-links">{{ route('terms-services') }}</a></p>
            
            <h5>Your Consent</h5>
            <p>By using our site, you consent to our online privacy policy.</p>
            
            <h5>Changes to our Privacy Policy</h5>
            <p>If we decide to change our privacy policy, we will post those changes on this page.</p>
            <p>This policy was last modified on {{ date('F j, Y') }}.</p>
            
            <h5>Contacting Us</h5>
            <p>If there are any questions regarding this privacy policy, you may contact us using the information below.</p>
            <p>{{ config('app.url') }}<br>
            info@{{ str_replace(['http://', 'https://'], '', config('app.url')) }}</p>
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
    color: var(--primary-color);
    margin-bottom: 2rem;
    font-size: 2.5rem;
    font-weight: 700;
}

.heading-content h2 {
    color: var(--primary-color);
    margin: 2rem 0 1rem 0;
    font-size: 1.8rem;
    font-weight: 600;
}

.heading-content h5 {
    color: var(--primary-color);
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
    color: var(--primary-color);
    text-decoration: none;
}

.inner-links:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

.breadcrumb {
    margin-bottom: 0;
}

.breadcrumb-item a {
    color: var(--primary-color);
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: var(--secondary-color);
}

.breadcrumb-item.active {
    color: #6c757d;
}
</style>
@endsection
