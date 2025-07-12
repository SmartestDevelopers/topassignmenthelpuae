@extends('layouts.front')

@section('seo_title', 'Dashboard - ' . config('app.name'))
@section('seo_description', 'Welcome to your dashboard. Manage your assignments, orders, and account settings.')

@section('content')
<div class="section-top-banner">
    <div class="container">
        <div class="row about-center">
            <div class="col-lg-7 mx-auto text-center">
                <div class="page-title">
                    <h1 class="">Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item orange active" aria-current="page">Dashboard</li>
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
            <div class="col-lg-12">
                <div class="simple">
                    <h2 class="heading-title">Welcome, <span>{{ Auth::user()->name }}</span></h2>
                    <p class="content-simple-p mb">Manage your assignments, orders, and account settings from your personal dashboard.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-file-text" style="font-size: 2rem; color: var(--primary-color);"></i>
                    </div>
                    <h4>My Orders</h4>
                    <p class="card-number">0</p>
                    <p>Total assignments ordered</p>
                    <a href="#" class="btn btn-primary btn-sm">View Orders</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-clock" style="font-size: 2rem; color: #ffc107;"></i>
                    </div>
                    <h4>In Progress</h4>
                    <p class="card-number">0</p>
                    <p>Assignments being worked on</p>
                    <a href="#" class="btn btn-warning btn-sm">View Progress</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-check-circle" style="font-size: 2rem; color: #28a745;"></i>
                    </div>
                    <h4>Completed</h4>
                    <p class="card-number">0</p>
                    <p>Successfully completed assignments</p>
                    <a href="#" class="btn btn-success btn-sm">View Completed</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-star" style="font-size: 2rem; color: #dc3545;"></i>
                    </div>
                    <h4>Reviews</h4>
                    <p class="card-number">0</p>
                    <p>Reviews and ratings given</p>
                    <a href="#" class="btn btn-danger btn-sm">Write Review</a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8">
                <div class="dashboard-section">
                    <h3>Recent Activity</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fa-solid fa-plus-circle text-success"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Welcome to {{ config('app.name') }}!</strong></p>
                                <small class="text-muted">Account created on {{ Auth::user()->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="dashboard-section">
                    <h3>Quick Actions</h3>
                    <div class="quick-actions">
                        <a href="#" class="btn btn-primary btn-block mb-2">
                            <i class="fa-solid fa-plus"></i> Place New Order
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-block mb-2">
                            <i class="fa-solid fa-user"></i> Edit Profile
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-block mb-2">
                            <i class="fa-solid fa-headset"></i> Contact Support
                        </a>
                        <a href="#" class="btn btn-outline-info btn-block">
                            <i class="fa-solid fa-download"></i> Download Files
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="dashboard-section">
                    <h3>Account Information</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Member Since:</strong></td>
                                    <td>{{ Auth::user()->created_at->format('M d, Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Account Status:</strong></td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="account-stats">
                                <h5>Your Benefits</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fa-solid fa-check text-success"></i> 24/7 Customer Support</li>
                                    <li><i class="fa-solid fa-check text-success"></i> Free Revisions</li>
                                    <li><i class="fa-solid fa-check text-success"></i> Plagiarism-Free Content</li>
                                    <li><i class="fa-solid fa-check text-success"></i> On-Time Delivery</li>
                                    <li><i class="fa-solid fa-check text-success"></i> Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('additional_head')
<style>
.dashboard-card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    height: 100%;
    transition: transform 0.3s ease;
}

.dashboard-card:hover {
    transform: translateY(-5px);
}

.card-icon {
    margin-bottom: 1rem;
}

.card-number {
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--primary-color);
    margin: 0.5rem 0;
}

.dashboard-section {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.activity-item {
    display: flex;
    align-items: center;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.activity-item:last-child {
    border-bottom: none;
}

.activity-icon {
    margin-right: 1rem;
    font-size: 1.2rem;
}

.activity-content {
    flex: 1;
}

.quick-actions .btn {
    text-align: left;
}

.quick-actions .btn i {
    width: 20px;
}

.badge-success {
    background-color: #28a745;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.875rem;
}

.account-stats ul li {
    padding: 0.25rem 0;
}

.account-stats ul li i {
    margin-right: 0.5rem;
}
</style>
@endsection
