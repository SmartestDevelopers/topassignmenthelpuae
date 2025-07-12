@extends('layouts.front')

@section('seo_title', 'Order Now - Get Instant Assignment Help from Experts | ' . config('app.name'))
@section('seo_description', 'Improve your writing skills with our proofreading, editing, thesis and assignment services with help of our academic experts. Get instant quote and professional assistance.')

@section('og_title', 'Order Assignment Now - Professional Academic Help')
@section('og_description', 'Improve your writing skills with our proofreading, editing, thesis and assignment services with help of our academic experts.')
@section('og_image', asset('template/img/RMA-logo.webp'))

@section('twitter_title', 'Order Assignment Now - Professional Academic Help')
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
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h1 class="heading-title">Order Assignment <span>Now</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content_simple my-sm-5 my-4">
    <div class="container">
        <form method="post" action="#" id="orderForm" name="orderForm">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="order-image">
                        <h2 class="display-6 text-capitalize mb-2" align="center">Get a Quote</h2>
                        <p>You will receive an instant quote for our services. Once you fill your details, the following will be shared to our sales team and they will connect with you shortly with all the necessary details.</p>
                        <img src="{{ asset('template/img/order-image.png') }}" width="70%" style="margin-top:10px;" alt="Fill Your Requirement">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading_content">
                        <div class="order-now my-0 d-flex flex-wrap align-items-center">
                            <div class="col-sm-12 col-12 mt-sm-0 mt-3">
                                <div class="col-sm-12 col-12">
                                    <label for="referencing" class="col-form-label">Referencing System</label>
                                </div>
                                <select style="background:#e9e9e9" class="order-form-select form-control" id="referencing" name="referencing" required>
                                    <option value="">Select</option>
                                    <option value="Harvard (No Page Numbers)">Harvard (No Page Numbers)</option>
                                    <option value="Harvard (With Page Numbers)">Harvard (With Page Numbers)</option>
                                    <option value="Footnote">Footnote</option>
                                    <option value="Oxford">Oxford</option>
                                    <option value="OSCOLA">OSCOLA</option>
                                    <option value="APA">APA</option>
                                    <option value="BMJ">BMJ</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="MHRA">MHRA</option>
                                    <option value="MRA">MRA</option>
                                    <option value="Open University">Open University</option>
                                    <option value="Turabian">Turabian</option>
                                    <option value="Vancouver">Vancouver</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="order-now my-0">
                        <div class="d-flex flex-wrap">
                            <div class="col-sm-12 col-12">
                                <label for="subject" class="col-form-label">Subject:</label>
                            </div>
                            <div class="col-sm-12 col-12">
                                <select style="background:#e9e9e9" class="order-form-select form-control" id="subject" name="subject" required>
                                    <option value="">Select</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Anthropology">Anthropology</option>
                                    <option value="Art & architecture">Art & architecture</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Business">Business</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Criminal Law">Criminal Law</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Environmental studies">Environmental studies</option>
                                    <option value="Film studies">Film studies</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Health">Health</option>
                                    <option value="History">History</option>
                                    <option value="Law">Law</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Management">Management</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Music">Music</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Philosophy">Philosophy</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Political science">Political science</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="Public Health">Public Health</option>
                                    <option value="Religious studies">Religious studies</option>
                                    <option value="Social Work">Social Work</option>
                                    <option value="Sociology">Sociology</option>
                                    <option value="Statistics">Statistics</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Theater studies">Theater studies</option>
                                    <option value="Women and gender studies">Women and gender studies</option>
                                    <option value="World affairs">World affairs</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-wrap">
                            <div class="col-sm-12 col-12">
                                <label for="academic_level" class="col-form-label">Academic Level</label>
                            </div>
                            <div class="col-sm-12 col-12">
                                <select style="background:#e9e9e9" class="order-form-select form-control" id="academic_level" name="academic_level" required>
                                    <option value="">Select</option>
                                    <option value="High School">High School</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="A-Level">A-Level</option>
                                    <option value="Master - Postgraduate">Master - Postgraduate</option>
                                    <option value="PhD - Postgraduate">PhD - Postgraduate</option>
                                    <option value="G.C.S.E">G.C.S.E</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-12">
                                        <label for="word_count" class="col-form-label">Length:</label>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <select style="background:#e9e9e9" class="order-form-select form-control" id="word_count" name="word_count" required>
                                            <option value="">Select</option>
                                            <option value="1000 Words (Estimated 2-3 pages)">1000 Words (Estimated 2-3 pages)</option>
                                            <option value="1500 Words (Estimated 3-4 pages)">1500 Words (Estimated 3-4 pages)</option>
                                            <option value="2000 Words (Estimated 5 pages)">2000 Words (Estimated 5 pages)</option>
                                            <option value="2500 Words (Estimated over 6 pages)">2500 Words (Estimated over 6 pages)</option>
                                            <option value="3000 Words (Estimated 7-8 pages)">3000 Words (Estimated 7-8 pages)</option>
                                            <option value="4000 Words (Estimated 10 pages)">4000 Words (Estimated 10 pages)</option>
                                            <option value="5000 Words (Estimated 12-13 pages)">5000 Words (Estimated 12-13 pages)</option>
                                            <option value="6000 Words (Estimated 15 pages)">6000 Words (Estimated 15 pages)</option>
                                            <option value="8000 Words (Estimated 20 pages)">8000 Words (Estimated 20 pages)</option>
                                            <option value="10000 Words (Estimated 25 pages)">10000 Words (Estimated 25 pages)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-12">
                                        <label for="deadline" class="col-form-label">Deadline:</label>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <select style="background:#e9e9e9" name="deadline" id="deadline" class="order-form-select form-control" required>
                                            <option value="">Select</option>
                                            <option value="Next Day">Next Day</option>
                                            <option value="2 Days">2 Days</option>
                                            <option value="3 Days">3 Days</option>
                                            <option value="4 Days">4 Days</option>
                                            <option value="5 days">5 days</option>
                                            <option value="6 days">6 days</option>
                                            <option value="7 days">7 days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="order-now my-0">
                        <div class="d-flex flex-wrap">
                            <div class="col-sm-12 col-12">
                                <label for="email" class="col-form-label">Email:</label>
                            </div>
                            <div class="col-sm-12 col-12">
                                <input style="background:#e9e9e9; height:45px;" type="email" id="email" name="email" class="order-form-select form-control" placeholder="E-Mail" required>
                            </div>
                            
                            <div class="col-lg-3 col-sm-4 col-4">
                                <div class="col-sm-12 col-12">
                                    <label for="country_code" class="col-form-label">Phone</label>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <select style="background:#e9e9e9" name="country_code" id="country_code" class="order-form-select form-control" required>
                                        <option value="+44" selected>UK (+44)</option>
                                        <option value="+1">USA (+1)</option>
                                        <option value="+61">Australia (+61)</option>
                                        <option value="+1">Canada (+1)</option>
                                        <option value="+91">India (+91)</option>
                                        <option value="+971">UAE (+971)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-9 col-sm-8 col-8">
                                <div class="col-sm-12 col-12">
                                    <label for="phone" class="col-form-label"><b></b></label>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <input style="background:#e9e9e9;height:45px;margin-top:9px;" type="text" id="phone" name="phone" placeholder="Phone Number" class="order-phone-number order-form-select form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 mt-3">
                                <label for="requirements" class="col-form-label">Assignment Requirements:</label>
                                <textarea style="background:#e9e9e9;" class="form-control" id="requirements" name="requirements" rows="4" placeholder="Please provide detailed requirements for your assignment..."></textarea>
                            </div>
                            
                            <div class="col-lg-12 mt-3">
                                <label for="file_upload" class="col-form-label">Upload Files (Optional):</label>
                                <input type="file" class="form-control" id="file_upload" name="file_upload" multiple>
                                <small class="text-muted">You can upload multiple files (PDF, DOC, DOCX, TXT)</small>
                            </div>
                            
                            <div class="col-lg-12" align="center">
                                <button style="background:#f17d00; height: 40px; padding: 0px 30px; width: fit-content;margin-top: 24px;" type="submit" id="order_submit" name="order_submit" class="btn">Get Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Why Order From Us Section -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">Why Order From <span>Us?</span></h2>
                    <p class="content-simple-p mb">Realistic prices from leading academic writers with guaranteed quality</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Always on Time</h4>
                    <p>We understand the importance of deadlines and guarantee timely delivery of all assignments without compromising on quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-alt" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Quality Guaranteed</h4>
                    <p>All our work is custom written to your exact requirements, using professional academic writers who are proven in their field.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="feature-icon">
                        <i class="fa-solid fa-money-bill-wave" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>Money Back Guarantee</h4>
                    <p>We offer a full refund if you don't receive the quality of work you ordered. Your satisfaction is our priority.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="simple">
                    <h2 class="heading-title">How It <span>Works</span></h2>
                    <p class="content-simple-p mb">Simple 4-step process to get your assignment completed</p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h5>Fill the Form</h5>
                    <p>Provide your assignment details, requirements, and deadline in our simple order form.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h5>Get Quote</h5>
                    <p>Receive an instant quote and our sales team will contact you with all necessary details.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h5>Expert Writing</h5>
                    <p>Our qualified experts will work on your assignment according to your specifications.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h5>Delivery</h5>
                    <p>Receive your completed assignment on time with free revisions if needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('additional_head')
<style>
.order-form-select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
}

.order-image {
    padding: 2rem;
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

.order-now {
    margin-bottom: 1rem;
}

.heading_content {
    margin-bottom: 1rem;
}
</style>
@endsection

@section('additional_scripts')
<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

// Form validation
document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Basic form validation
    const requiredFields = ['referencing', 'subject', 'academic_level', 'word_count', 'deadline', 'email', 'phone'];
    let isValid = true;
    
    requiredFields.forEach(field => {
        const element = document.getElementById(field);
        if (!element.value.trim()) {
            element.style.borderColor = 'red';
            isValid = false;
        } else {
            element.style.borderColor = '#ddd';
        }
    });
    
    if (isValid) {
        // Here you would normally submit the form to your backend
        alert('Thank you for your order! Our team will contact you shortly with a quote.');
        // You can add AJAX submission here
    } else {
        alert('Please fill in all required fields.');
    }
});

// Phone number validation
document.getElementById('phone').addEventListener('keypress', isNumber);
</script>
@endsection
