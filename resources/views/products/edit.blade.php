@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <p class="eyebrow">Inventory</p>
    <h2>Edit product</h2>
    <p class="page-intro">Keep this product's information accurate and useful.</p>

    <form class="form-card card" action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="name">Product Name</label>
            <br>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $product->name) }}"
            >
            @error('name') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <br>

        <div class="field">
            <label for="description">Description</label>
            <br>
            <textarea id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
            @error('description') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <br>

        <div class="field">
            <label for="price">Price</label>
            <br>
            <input
                type="number"
                id="price"
                name="price"
                step="0.01"
                value="{{ old('price', $product->price) }}"
            >
            @error('price') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <br>

        <div class="field">
            <label for="quantity">Quantity</label>
            <br>
            <input
                type="number"
                id="quantity"
                name="quantity"
                value="{{ old('quantity', $product->quantity) }}"
            >
            @error('quantity') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <br>

        <button type="submit">Update Product</button>
    </form>
@endsection
