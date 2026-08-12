@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <h2>Contact Us</h2>

    <p>Welcome to our contact page.</p>

    <x-card
        title="Email"
        content="highoverride@gmail.com"
    />

    <x-card
        title="Phone"
        content="0992-068-9188"
    />

    <x-card
        title="Address"
        content="Lucena City, Philippines"
    />

@endsection