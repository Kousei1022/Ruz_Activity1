@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <h2>Products</h2>

    <a href="{{ route('products.create') }}">
        Add Product
    </a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse($products as $product)

        <x-card
            title="{{ $product->name }}"
            content="Price: ₱{{ number_format($product->price, 2) }} | Stock: {{ $product->quantity }}"
        />

        <a href="{{ route('products.show', $product) }}">
            View
        </a>

        <a href="{{ route('products.edit', $product) }}">
            Edit
        </a>

        <form
            action="{{ route('products.destroy', $product) }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>
        </form>

    @empty

        <p>No products available.</p>

    @endforelse

@endsection