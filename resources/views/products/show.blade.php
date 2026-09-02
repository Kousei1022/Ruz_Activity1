@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h2>{{ $product->name }}</h2>

    <div class="card">
        <p><strong>Description:</strong> {{ $product->description ?? 'No description provided.' }}</p>
        <p><strong>Price:</strong> ₱{{ number_format($product->price, 2) }}</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    </div>

    <a href="{{ route('products.index') }}">Back to products</a>
@endsection
