@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Orders</h4>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Word Count</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user_name }}</td>
                                    <td>{{ $order->user_email }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->word_count }}</td>
                                    <td>{{ date('M d, Y', strtotime($order->deadline)) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $order->status == 'completed' ? 'success' : ($order->status == 'pending' ? 'warning' : ($order->status == 'in_progress' ? 'info' : 'secondary')) }}">
                                            {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                        </span>
                                    </td>
                                    <td>${{ number_format($order->amount, 2) }}</td>
                                    <td>{{ date('M d, Y', strtotime($order->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this order?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">No orders found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
