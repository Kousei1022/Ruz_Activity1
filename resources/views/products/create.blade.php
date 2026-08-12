@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div>
            <label for="name">Product Name</label>
            <br>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label for="description">Description</label>
            <br>
            <textarea
                id="description"
                name="description"
                rows="4"
            >{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label for="price">Price</label>
            <br>
            <input
                type="number"
                id="price"
                name="price"
                step="0.01"
                value="{{ old('price') }}"
            >
        </div>

        <br>

        <div>
            <label for="quantity">Quantity</label>
            <br>
            <input
                type="number"
                id="quantity"
                name="quantity"
                value="{{ old('quantity') }}"
            >
        </div>

        <br>

        <button type="submit">
            Save Product
        </button>

    </form>

@endsection