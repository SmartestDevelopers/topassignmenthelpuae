@extends('layouts.front')

@section('content')
<h1>Thank You!</h1>
    @if (isset($page))
        <h2>{{ $page->title ?? 'Thank You Page' }}</h2>
        <p>{{ $page->content ?? 'Your order has been submitted successfully.' }}</p>
    @else
        <p>Your order has been submitted successfully.</p>
    @endif
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('order-now') }}">Back to Order Form</a>
    @endsection
