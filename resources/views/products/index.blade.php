@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <div class="page-header">
        <div>
            <p class="eyebrow">Your inventory</p>
            <h2>Products</h2>
            <p class="page-intro">A focused view of everything in your stockroom.</p>
        </div>
        <a class="button" href="{{ route('products.create') }}">Add product</a>
    </div>

    @forelse($products as $product)

        <article class="product-card card">
            <div>
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description ?: 'No description provided.' }}</p>
            </div>
            <div class="product-meta">
                <strong>₱{{ number_format($product->price, 2) }}</strong>
                <span>{{ $product->quantity }} in stock</span>
            </div>
            <div class="product-actions">
                <a class="button button-secondary" href="{{ route('products.show', $product) }}">View details</a>
                <a class="button button-secondary" href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </article>

    @empty

        <div class="empty-state card">
            <h3>Your stockroom is waiting.</h3>
            <p>No products have been added yet.</p>
            <a class="button" href="{{ route('products.create') }}">Add your first product</a>
        </div>

    @endforelse

@endsection