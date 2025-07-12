@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Order Details #{{ $order->id }}</h4>
                    <div>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary btn-sm">Back to Orders</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Customer Information</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Name:</th>
                                    <td>{{ $order->user_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>
                                        <a href="mailto:{{ $order->user_email }}">{{ $order->user_email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td>
                                        <a href="tel:{{ $order->phone }}">{{ $order->phone }}</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Order Information</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Order ID:</th>
                                    <td>#{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        @switch($order->status)
                                            @case('pending')
                                                <span class="badge bg-warning">Pending</span>
                                                @break
                                            @case('in_progress')
                                                <span class="badge bg-info">In Progress</span>
                                                @break
                                            @case('completed')
                                                <span class="badge bg-success">Completed</span>
                                                @break
                                            @case('cancelled')
                                                <span class="badge bg-danger">Cancelled</span>
                                                @break
                                            @default
                                                <span class="badge bg-secondary">{{ ucfirst($order->status) }}</span>
                                        @endswitch
                                    </td>
                                </tr>
                                <tr>
                                    <th>Deadline:</th>
                                    <td>
                                        {{ date('M d, Y', strtotime($order->deadline)) }}
                                        @if(strtotime($order->deadline) < time() && $order->status !== 'completed')
                                            <span class="badge bg-danger ms-2">Overdue</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Word Count:</th>
                                    <td>{{ $order->word_count }} words</td>
                                </tr>
                                <tr>
                                    <th>Amount:</th>
                                    <td>
                                        @if($order->amount)
                                            ${{ number_format($order->amount, 2) }}
                                        @else
                                            <span class="text-muted">Not set</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>Attached File</h5>
                            <div class="card">
                                <div class="card-body">
                                    @if($order->file_path)
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-file-alt fa-2x text-primary me-3"></i>
                                            <div>
                                                <p class="mb-1"><strong>{{ basename($order->file_path) }}</strong></p>
                                                <a href="{{ asset('storage/' . $order->file_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-download"></i> Download File
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-muted mb-0">No file attached</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Order Timeline</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="timeline">
                                        <div class="timeline-item">
                                            <i class="fas fa-plus-circle text-success"></i>
                                            <span class="ms-2">Order created: {{ date('M d, Y H:i', strtotime($order->created_at)) }}</span>
                                        </div>
                                        @if($order->updated_at != $order->created_at)
                                            <div class="timeline-item mt-2">
                                                <i class="fas fa-edit text-info"></i>
                                                <span class="ms-2">Last updated: {{ date('M d, Y H:i', strtotime($order->updated_at)) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($order->notes)
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Notes</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-0">{{ $order->notes }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="d-flex justify-content-between mt-4">
                        <div>
                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit Order
                            </a>
                            <a href="mailto:{{ $order->user_email }}" class="btn btn-info">
                                <i class="fas fa-envelope"></i> Email Customer
                            </a>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline" 
                                  onsubmit="return confirm('Are you sure you want to delete this order?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Delete Order
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline-item {
    display: flex;
    align-items: center;
}

.timeline-item i {
    width: 20px;
}
</style>
@endsection
