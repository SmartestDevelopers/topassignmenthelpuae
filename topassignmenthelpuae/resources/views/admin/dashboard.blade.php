@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">Pages</div>
                                <div class="card-body">
                                    <h4 class="card-title">{{ $pagesCount }}</h4>
                                    <p class="card-text">Total Pages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Orders</div>
                                <div class="card-body">
                                    <h4 class="card-title">{{ $ordersCount }}</h4>
                                    <p class="card-text">Total Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Quick Actions</h5>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('admin.pages.index') }}" class="btn btn-primary mb-2">Manage Pages</a><br>
                                    <a href="{{ route('admin.orders.index') }}" class="btn btn-success mb-2">Manage Orders</a><br>
                                    <a href="{{ route('admin.pages.create') }}" class="btn btn-info mb-2">Create New Page</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Recent Orders</h5>
                                </div>
                                <div class="card-body">
                                    @if($recentOrders->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($recentOrders as $order)
                                                    <tr>
                                                        <td>{{ $order->user_name }}</td>
                                                        <td>{{ $order->user_email }}</td>
                                                        <td>
                                                            <span class="badge badge-{{ $order->status == 'completed' ? 'success' : ($order->status == 'pending' ? 'warning' : 'info') }}">
                                                                {{ ucfirst($order->status) }}
                                                            </span>
                                                        </td>
                                                        <td>{{ date('M d', strtotime($order->created_at)) }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p>No orders yet.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
