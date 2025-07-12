@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Edit Order #{{ $order->id }}</h4>
                    <div>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary btn-sm">Back to Orders</a>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Customer Information</h5>
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Customer Name *</label>
                                    <input type="text" class="form-control @error('user_name') is-invalid @enderror" 
                                           id="user_name" name="user_name" value="{{ old('user_name', $order->user_name) }}" required>
                                    @error('user_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="user_email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control @error('user_email') is-invalid @enderror" 
                                           id="user_email" name="user_email" value="{{ old('user_email', $order->user_email) }}" required>
                                    @error('user_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone', $order->phone) }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Order Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="pending" {{ old('status', $order->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="in_progress" {{ old('status', $order->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ old('status', $order->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ old('status', $order->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="deadline" class="form-label">Deadline *</label>
                                    <input type="date" class="form-control @error('deadline') is-invalid @enderror" 
                                           id="deadline" name="deadline" value="{{ old('deadline', date('Y-m-d', strtotime($order->deadline))) }}" required>
                                    @error('deadline')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="word_count" class="form-label">Word Count *</label>
                                    <input type="number" class="form-control @error('word_count') is-invalid @enderror" 
                                           id="word_count" name="word_count" value="{{ old('word_count', $order->word_count) }}" required min="1">
                                    @error('word_count')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount ($)</label>
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror" 
                                           id="amount" name="amount" value="{{ old('amount', $order->amount) }}" step="0.01" min="0">
                                    @error('amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                                              id="notes" name="notes" rows="4" placeholder="Add any notes about this order...">{{ old('notes', $order->notes) }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        @if($order->file_path)
                            <div class="row">
                                <div class="col-12">
                                    <h5>Attached File</h5>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-file-alt fa-2x text-primary me-3"></i>
                                                <div>
                                                    <p class="mb-1"><strong>{{ basename($order->file_path) }}</strong></p>
                                                    <a href="{{ asset('storage/' . $order->file_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-download"></i> Download File
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Order Summary</h5>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Customer:</strong><br>
                                                <span id="summary-name">{{ $order->user_name }}</span><br>
                                                <span id="summary-email">{{ $order->user_email }}</span><br>
                                                <span id="summary-phone">{{ $order->phone }}</span>
                                            </div>
                                            <div class="col-md-3">
                                                <strong>Order Details:</strong><br>
                                                Status: <span id="summary-status" class="badge bg-warning">{{ ucfirst($order->status) }}</span><br>
                                                Deadline: <span id="summary-deadline">{{ date('M d, Y', strtotime($order->deadline)) }}</span><br>
                                                Words: <span id="summary-words">{{ $order->word_count }}</span>
                                            </div>
                                            <div class="col-md-3">
                                                <strong>Financial:</strong><br>
                                                Amount: $<span id="summary-amount">{{ number_format($order->amount ?: 0, 2) }}</span>
                                            </div>
                                            <div class="col-md-3">
                                                <strong>Timeline:</strong><br>
                                                Created: {{ date('M d, Y', strtotime($order->created_at)) }}<br>
                                                @if(strtotime($order->deadline) < time() && $order->status !== 'completed')
                                                    <span class="badge bg-danger">Overdue</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">View Order</a>
                                <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Update summary when form fields change
document.addEventListener('DOMContentLoaded', function() {
    const fields = {
        'user_name': 'summary-name',
        'user_email': 'summary-email',
        'phone': 'summary-phone',
        'word_count': 'summary-words',
        'amount': 'summary-amount'
    };

    Object.keys(fields).forEach(fieldId => {
        const field = document.getElementById(fieldId);
        const summary = document.getElementById(fields[fieldId]);
        
        field.addEventListener('input', function() {
            if (fieldId === 'amount') {
                summary.textContent = parseFloat(this.value || 0).toFixed(2);
            } else {
                summary.textContent = this.value;
            }
        });
    });

    // Update status badge
    document.getElementById('status').addEventListener('change', function() {
        const statusBadge = document.getElementById('summary-status');
        const statusValue = this.value;
        
        statusBadge.textContent = statusValue.charAt(0).toUpperCase() + statusValue.slice(1).replace('_', ' ');
        
        // Update badge color
        statusBadge.className = 'badge ';
        switch(statusValue) {
            case 'pending':
                statusBadge.className += 'bg-warning';
                break;
            case 'in_progress':
                statusBadge.className += 'bg-info';
                break;
            case 'completed':
                statusBadge.className += 'bg-success';
                break;
            case 'cancelled':
                statusBadge.className += 'bg-danger';
                break;
            default:
                statusBadge.className += 'bg-secondary';
        }
    });

    // Update deadline
    document.getElementById('deadline').addEventListener('change', function() {
        const date = new Date(this.value);
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        document.getElementById('summary-deadline').textContent = date.toLocaleDateString('en-US', options);
    });
});
</script>
@endsection
