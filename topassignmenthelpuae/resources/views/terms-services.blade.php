@extends('layouts.front')

@section('seo_title', 'Terms and Conditions | ' . config('app.name'))
@section('seo_description', 'Enhance your paper writing with our proofreading, editing, dissertation and thesis writing services with the help of our academic professionals.')

@section('og_title', 'Terms and Conditions - ' . config('app.name'))
@section('og_description', 'We Have a Professional Team of Writers, Who can write your assignment effectively with quality content, so you can get affordable assignment services')
@section('og_image', asset('template/img/RMA-logo.webp'))

@section('twitter_title', 'Terms and Conditions')
@section('twitter_site', '@assignmenthelp')

@section('structured_data')
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
            
            <h2 style="font-size: 1rem;">Definitions</h2>
            <p>In this agreement:</p>
            <div class="border-bottom-class mb-3 table-design1">
                <table cellpadding="0" class="table-design2 table table-bordered">
                    <tbody>
                        <tr>
                            <td valign="top"><em>"<strong>Content</strong>"</em></td>
                            <td valign="top">means as defined in accordance with clause 11(A).</td>
                        </tr>
                        <tr>
                            <td valign="top"><em>"<strong>Contract</strong>"</em></td>
                            <td valign="top">means your order and our written acceptance of it in accordance with clause 2(C).</td>
                        </tr>
                        <tr>
                            <td valign="top"><em>"<strong>Terms</strong>"</em></td>
                            <td valign="top">means the terms and conditions set out herein.</td>
                        </tr>
                        <tr>
                            <td valign="top"><em>"<strong>you</strong>"</em></td>
                            <td valign="top">means you our customer, who avail different services from us.</td>
                        </tr>
                        <tr>
                            <td valign="top">"<strong><em>Website</em>&nbsp;</strong>"</td>
                            <td valign="top">means the entire computing hardware and software installation that is, or supports,&nbsp;<em>our website</em>.</td>
                        </tr>
                        <tr>
                            <td valign="top">"<strong><em>Works</em></strong>"</td>
                            <td valign="top">means the documents, services and/or products which have been provided by us to you under the Contract in accordance with the Terms.</td>
                        </tr>
                        <tr>
                            <td valign="top"><em>"<strong>Writer</strong>"</em></td>
                            <td valign="top">means the individual who is engaged to complete the Works.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h5>Our contract with you</h5>
            <div class="expertise-list">
                <ul>
                    <li>These terms and conditions apply:
                        <ul class="">
                            <li>So far as the context allows: to you as a visitor to our website; and</li>
                            <li>In any event: to you as a buyer or prospective buyer of the Works.</li>
                        </ul>
                    </li>
                    <li>Works advertised on the Website or ordered by you are subject to a Writing consultant agreeing to provide the Works to the standard you have requested and within the deadline we have agreed.</li>
                    <li>Your order or your acceptance of a quotation for services offered by us, constitutes an offer by you to purchase the services offered by us in accordance with these Terms. No offer placed by you shall be accepted by us other than:
                        <ul>
                            <li>email confirmation from us;</li>
                            <li>(if earlier) by us providing the Works,</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <p>when a contract for the supply and purchase of the services on these Terms will be established.</p>
            
            <div class="expertise-list">
                <ul>
                    <li>Quotations are given by us on the basis that no contract shall come into existence except in accordance with clause C above. The price quoted on the online price calculator on our Website may differ from the actual price payable. The actual price to be paid will be set out in our email quote (inclusive of VAT) which will be sent in response to your initial request form. Any quotation made in our email quotation is valid for a period of 12 hours or such other period as we may specify, provided that we have not previously withdrawn it.</li>
                    <li>When we accept your order by email confirmation, our e-mail will also reiterate details of your purchase, the price to be paid including any banking charges, and the agreed deadline for delivery of the Works.</li>
                    <li>We may change these Terms from time to time. The Terms that apply to you are those posted here on our Website, on the day you order the Works. We do not file copies of the Terms applicable to your purchase</li>
                </ul>
            </div>
            
            <h5>Services</h5>
            <div class="expertise-list">
                <ul>
                    <li>The statements contained in our services are the opinions of the Writer only and not the statements of {{ config('app.name') }}, its officers, employees or agents. To the fullest extent permissible by law, {{ config('app.name') }} hereby excludes liability for the truth or accuracy of any information provided on our Website or in the Services, your statutory rights as a customer are not affected.</li>
                    <li>The Services we provide are commissioned at your request and to your specific requirements. All delivery times are estimates only, although we will use our reasonable endeavours to adhere to the date estimated by us for delivery of the services</li>
                    <li>Services are at your risk from the moment they are requested by you.</li>
                </ul>
            </div>
            
            <h5>Price and Payment</h5>
            <div class="expertise-list">
                <ul>
                    <li>The Services will not be started nor will any part of the order be sent to you until we have received payment in full or such other amount that has been agreed between us in writing.</li>
                    <li>All banking charges by the receiving bank on payments received by us, and all other charges relating to payment in a currency other than pounds sterling, will be borne by you.</li>
                    <li>Any details given by us in relation to exchange rates are approximate only and may vary from time to time.</li>
                    <li>You will pay all sums due to us under these terms by the means specified, without any set-off, deduction or counterclaim.</li>
                    <li>If we owe you money, we will reimburse you as soon as is reasonably practicable, but in any event, no later than 30 days from the date on which we have agreed to reimburse you.</li>
                </ul>
            </div>
            
            <h5>Information you give us</h5>
            <div class="expertise-list">
                <ul>
                    <li>You agree that you have provided, and will continue to provide accurate, up to date, and complete information in a timely manner as we may require about yourself and to complete the services we offer to you. We need this information to provide you with the required services.</li>
                    <li>It is your responsibility to supply us with all relevant requirements relating to your order when you place your order with us. Based on the requirements submitted through our <a href="{{ route('order-now') }}" class="inner-links">online order form</a>, we will provide you a quote. Should you supply further requirements later on, these will not be taken into account when completing your order. Completion of additional requirements is subject to availability and may incur further charge.</li>
                    <li>You agree to send all relevant assignment criteria and learning outcomes in accordance with the timescales specified in our email accepting your order.</li>
                    <li>In the event that you have any supporting reference material, information or additional instructions for the Writer, this must be sent to us by email as soon as possible.</li>
                    <li>You agree to cooperate with the Writing consultant throughout the project in the event that the Writing consultant requires any further information or guidance on the Services.</li>
                    <li>If the performance of our obligations under this Contract is prevented or delayed by any delay or omission on your part, we shall not be liable for any costs, charges or losses sustained or incurred by you arising directly or indirectly from such prevention or delay.</li>
                </ul>
            </div>
            
            <h5>Delivery</h5>
            <div class="expertise-list">
                <ul>
                    <li>You acknowledge the internet is an open medium and where you specify delivery by email or by downloading from our Website, you accept the risk of delivery. Where you specify another method of delivery and which we agree in our email accepting your order (including but not limited to post or fax), you accept the risk of delivery.</li>
                    <li>We shall take all reasonable steps to ensure that all works are provided on or before dates previously agreed. If we are unable to do so you will be notified by email to arrange a modified delivery date or you will be compensated based on a percentage of the amount paid.</li>
                    <li>We may deliver the Works in installments if it is not possible to provide the complete service for delivery.</li>
                    <li>If the performance of our obligations under this Contract is prevented or delayed by any act or omission by you, we shall not be liable for any costs, charges or losses sustained or incurred by you arising directly or indirectly from such prevention or delay.</li>
                </ul>
            </div>
            
            <h5>Taxes, duties and import restrictions</h5>
            <div class="expertise-list">
                <ul>
                    <li>We have no knowledge of, and no responsibility for, the laws in your country of residence.</li>
                    <li>You are responsible for purchasing Works that you are lawfully able to import, and for the payment of import duties and taxes of any kind levied in your country of residence.</li>
                </ul>
            </div>
            
            <h5>Works returned</h5>
            <div class="expertise-list">
                <ul>
                    <li>Although you are buying the Services remotely, you do not have a right of cancellation as the services we provide to you are prepared to your personal specification and are personalised for you. Accordingly you may not cancel your order for services once we have sent you an email accepting your order.</li>
                    <li>All Services are non-refundable as the Services we provide to you are prepared to your personal specification and are personalised for you.</li>
                    <li>Please refer any point of dissatisfaction to our complaints department by email us at complaints@{{ str_replace(['http://', 'https://'], '', config('app.url')) }}. We will use all reasonable endeavours to respond to any point of dissatisfaction by you within 28 working days of you having contacted us, provided you contact us within the timescales detailed in clause D.</li>
                    <li>In the event that your original requirements have not been met, we will use our reasonable endeavours to arrange for the Writing consultant engaged to assist you in completing your assignment to amend the required work for which you have taken our services providing you have notified us within 7 days after delivery of the order (or within 7 days of receipt of the first half, and 14 days of the full paper in the case of a dissertation). If you do not contact us within this time, you will be deemed to have accepted that the completed work as per our services have met your requirements.</li>
                    <li>When notifying us that your original requirements have not been met, you must clearly set out in writing what the Writing consultant has missed and forward your original email containing your initial request to us. You must ensure that you have read the whole of the completed work and covered every point before sending an amendment request as amendments will only be made once.</li>
                    <li>If you submit an amendment request after the period referred to in clause D or the amendment request is not in line with your original order requirements, we may provide you with a quote for these additional amendments. Any such amendments are subject to the Writer being available to make the amendments within the timescale agreed and will only be made once payment has been received in full.</li>   
                </ul>
            </div>
            
            <h5>Disclaimers</h5>
            <div class="expertise-list">
                <ul>
                    <li>We, or our Content suppliers, may make improvements or changes to our Website, the Content, or to any of the Works, at any time and without advance notice.</li>
                    <li>You are advised that the Content and Works may include technical inaccuracies or typographical errors. Commentary, information and other materials posted on the Website are not intended to amount to advice on which reliance should be place. We therefore disclaim all liability and responsibility arising from any reliance placed on such commentary, information or materials by you, any visitor to our Website or anyone who may be informed of its content.</li>
                    <li>To the fullest extent permissible by law, we give no warranty and make no representation, express or implied, as to:
                        <ul>
                            <li>The adequacy or appropriateness of the Works for your purpose.</li>
                            <li>The truth or accuracy of any information given on our Website or in the Works.</li>
                            <li>Any implied warranty or condition as to merchantability or fitness of the Works for a particular purpose.</li>
                            <li>Compatibility of our Website or Works with your equipment software or telecommunications connection.</li>
                            <li>Compliance with any law.</li>
                            <li>Non-infringement of any right.</li>
                        </ul>
                    </li>
                    <li>Our Website may contain links to other internet websites. We have neither power nor control over any such website. You acknowledge and agree that we shall not be liable in any way for the content of any such linked website, nor for any loss or damage arising from your use of any such website.</li>
                    <li>Whilst we will make reasonable effort to ensure that the Works meet a stipulated standard, we do not guarantee your mark and will not be held liable in any way for a failure to meet the required mark.</li>
                    <li>Whilst we make every reasonable endeavour to ensure client confidentiality we cannot take responsibility for the content of any attachments you send to us and any personal details that they may contain. It is your responsibility to remove any personal details that may be contained within attachments as these may be forwarded to your writer without the details being removed.</li>
                </ul>
            </div>
            
            <h5>Permitted use of Works</h5>
            <div class="expertise-list">
                <ul>
                    <li>You agree that the copyright of any Work produced by us or our Writing consultant belongs to us. You may not copy, modify, publish, transmit, transfer or sell, reproduce, create derivative works from, distribute, perform, display, or in any way exploit any of the content of the Works or our Website, in whole or in part, save as hereinafter provided. You may download or copy one copy of the Works you have purchased only for your own personal use for academic study purposes only provided that you maintain all copyright and other notices contained in such Works. However, you may not submit this document under your own name for academic assessment. This also applies to any sections we add to the work that you have completed however; it does not apply to sections completed solely by you.</li>
                    <li>It is solely your responsibility to ensure that the services provided by us meet your order requirements including any stipulated standards.</li>
                    <li>You agree that any views expressed in the consulting support service are opinions only and have been provided merely as academic support and do not constitute professional advice in any way.</li>
                    <li>You further agree that our services and assistance provided should be used solely for research or reference purposes.</li>
                    <li>You acknowledge that any decision to use our services or the academic work is made on your own initiative and you agree that neither we nor our Writing consultant are in any way liable for any decision made by you to use our services or research works which may breach your institution's rules, regulations or guidelines.</li>
                    <li>You are not permitted to submit our research work as your own, either in whole or in part and in doing so, would constitute a breach of our copyright in such services. In doing so, you automatically forfeit your rights to use the services provided by us in accordance with these Terms.</li>
                    <li>You agree not to resell, distribute or post to any website any Works provided hereunder.</li>
                </ul>
            </div>
            
            <h5>Content and Intellectual Property Rights</h5>
            <div class="expertise-list">
                <ul>
                    <li>{{ config('app.name') }} is the owner or licensee of all intellectual property rights in its Website content including all the software text, software design, text contained within and alongside the graphics or pictures, information contained with in any software or the Website itself including designs, text, graphics, pictures, information, applications, software, and other files, and their selection and arrangement (the "Content").</li>
                    <li>As (a) a customer and (b) as a visitor to our Website, you are not allowed to modify, copy, distribute, frame, reproduce, publish, display or post any Content of the Website or any software made available through the Website without our prior permission. This includes any commercial use whatsoever in whole or in part of our Website or any software available on it.</li>
                    <li>You may not upload or republish Content on any internet, intranet or extranet site or incorporate the information from our Website in any other database or compilation, and any other use of the Website Content.</li>
                    <li>Any attempts at harming the Website or sabotaging our software through malafide practices of data mining, robots, scraping or similar data gathering or extraction methods will not be tolerated and for these purposes we strictly monitor the IP addresses accessing our Website on a daily basis.</li>
                    <li>Any use of the software or our Content other than as specifically authorised herein, without our prior written permission is strictly prohibited and will subject the infringer to legal action. Such misuse, unauthorised use and abuse of the software may also violate applicable laws including copyright and trademark laws and applicable communications regulations and statutes.</li>
                    <li>All company graphics, logos, designs, page headers, button icons, scripts and service names located on the Website are the intellectual property rights of {{ config('app.name') }} and may not be used, either as trademarks or domain names for any other similar product or service.</li>
                    <li>All intellectual property rights in the Works shall be owned by us. Subject to your compliance with these Terms, we licence all such rights to you and on a non-exclusive, worldwide basis to such extent as is necessary to enable you to make reasonable use of the Works for the purposes specified. In the event that it materialises that payment for the Works has been made fraudulently, this licence shall automatically terminate.</li>
                    <li>You acknowledge that where you have provided us with in-put material to help with the completion of the Works, that you have the appropriate consent, permission, authority or licence to use such material for the purposes envisaged in accordance with the Contract.</li>
                </ul>
            </div>
            
            <h5>System Security</h5>
            <div class="expertise-list">
                <ul>
                    <li>You agree that you will not, and will not allow any other person to, violate or attempt to violate any aspect of the security of our website.</li>
                    <li>You agree that you will in no way modify, reverse engineer, disassemble, decompile, copy, or cause damage or unintended effect to any portion of our website, or any software used on our website, and that you will not permit any other person to do so.</li>
                    <li>You understand that any such violation is unlawful in many jurisdictions and that any contravention of law may result in criminal prosecution.</li>
                    <li>Examples of violations are:
                        <ul>
                            <li>Accessing data unlawfully or without consent;</li>
                            <li>Attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures;</li>
                            <li>Attempting to interfere with service to any user, host or network, including without limitation, via means of overloading, "flooding", "mail bombing" or "crashing";</li>
                            <li>Forging any TCP/IP packet header or any part of the header information in any email or newsgroup posting;</li>
                            <li>Taking any action in order to obtain goods to which you are not entitled (including but not limited to "cardholder not present" fraud).</li>
                        </ul>
                    </li>
                    <li>You agree to indemnify us against any claim or demand, including reasonable lawyers' fees, made by any third party due to, or arising out of:
                        <ul>
                            <li>Any violation of system security as set out above;</li>
                            <li>Your use of Our Web Site;</li>
                            <li>Any other breach or violation of this agreement by you;</li>
                            <li>The infringement by you, or by any other user of your computer, of any intellectual property or other right of any person or entity, or as a result of any threatening, libellous, obscene, harassing or offensive material contained in any of your communications.</li>
                        </ul>
                    </li>
                    <li>Access to our Website is permitted on a temporary basis and we reserve the right to withdraw or amend the service we provide on our Website without notice. We will not be liable if for any reason our Website in unavailable at any time or for any period.</li>
                </ul>
            </div>
            
            <h5>Indemnity</h5>
            <p>You agree to indemnify us against any claim or demand, reasonable costs, charges or losses sustained or incurred by us including reasonable lawyers' fees, arising in any way either directly or indirectly out of, your use of our Website and/or the Works, or the infringement by you, or by any other person using your computer, of any intellectual property or other right of any person.</p>
            
            <h5>Contractual Limitation</h5>
            <div class="expertise-list">
                <ul>
                    <li>Where we provide Works without specific charge, then it (or they) is deemed to be provided free of charge, and not to be associated with any other service for which a charge is made. Accordingly, there is no contractual or other obligation upon us in respect of any such Works.</li>
                    <li>This clause sets out our entire financial liability (including any liability for the acts or omissions of our employees or Writers) to you in respect of:
                        <ul>
                            <li>any breach of contract;</li>
                            <li>any use made by you of our Works or any part of them; and</li>
                            <li>any representation, statement or tortuous act or omission (including negligence) arising under or in connection with the Contract.</li>
                        </ul>
                    </li>
                    <li>All warranties, conditions and other terms implied by statute or common law are, to the fullest extent permitted by law, excluded from the Contract.</li>
                    <li>Nothing in these Terms limits or excludes our liability:
                        <ul>
                            <li>for death or personal injury resulting from negligence; or</li>
                            <li>for any damage or liability incurred by you as a result of fraud or fraudulent misrepresentation by us.</li>
                        </ul>
                    </li>
                    <li>Subject to the above clauses, we shall not be liable for:
                        <ul>
                            <li>loss of profits;</li>
                            <li>loss of business;</li>
                            <li>loss of opportunity;</li>
                            <li>depletion of goodwill and/or similar losses;</li>
                            <li>loss of Works;</li>
                            <li>loss of contract;</li>
                            <li>loss of use;</li>
                            <li>loss of corruption of data or information; or</li>
                            <li>any special indirect, consequential or pure economic loss, costs damages charges or expenses.</li>
                        </ul>
                    </li>
                    <li>Our total liability in contract, tort (including negligence or breach of statutory duty), misrepresentation, restitution or otherwise arising in connection with the performance or contemplated performance of the Contract shall be limited to the price paid or payable for the Works.</li>
                </ul>
            </div>
            
            <h5>Rights of third parties</h5>
            <p>Nothing in this agreement or on our website shall confer on any third party any benefit under the provisions of the Contracts (Rights of Third Parties) Act 1999.</p>
            
            <h5>Severability</h5>
            <p>If any of these Terms is at any time held by any jurisdiction to be void, invalid or unenforceable, then it shall be treated as changed or reduced, only to the extent minimally necessary to bring it within the laws of that jurisdiction and to prevent it from being void, and it shall be binding in that changed or reduced form. Subject to that, each provision shall be interpreted as severable and shall not in any way affect any other of these Terms.</p>
            
            <h5>No Waiver</h5>
            <p>No waiver by us, in exercising any right, power or provision here under shall operate as a waiver of any other right or of that same right at a future time; nor shall any delay in exercise of any power or right be interpreted as a waiver.</p>
            
            <h5>Dispute Resolution</h5>
            <p>In the event of a dispute arising out of, or in connection with, these terms or any contract between you and us, then you agree to attempt to settle the dispute by engaging in good faith with us in a process of mediation before commencing arbitration or litigation.</p>
            
            <h5>Force majeure</h5>
            <p>We are not liable for any breach of our obligations resulting from causes beyond our reasonable control, including strikes of our own employees, system down – time or third party email misdirection.</p>
            
            <h5>Governing Law</h5>
            <p>The Contract and any dispute or claim arising out of or in connection with it or its subject matter shall be governed by and construed in accordance with the laws of England and Wales. The parties irrevocably agree that the courts of England and Wales shall have exclusive jurisdiction to settle any dispute or claim that arises out of, or in connection with the Contract or its subject matter.</p>
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

.expertise-list ul ul {
    margin: 0.5rem 0;
    padding-left: 1.5rem;
}

.table-design2 {
    width: 100%;
    margin-bottom: 1rem;
}

.table-design2 td {
    padding: 0.75rem;
    vertical-align: top;
    border: 1px solid #dee2e6;
}

.table-design2 td:first-child {
    width: 30%;
    font-weight: 600;
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
