@extends('layouts.app')

@section('title', 'Log in')

@section('content')
    <section class="auth-shell">
        <div class="auth-heading">
            <p class="eyebrow">Welcome back</p>
            <h2>Log in to your stockroom.</h2>
            <p class="page-intro">Keep your product list current, clear, and under control.</p>
        </div>

        <form class="form-card card" method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="field">
                <label for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
                @error('email') <span class="field-error">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" autocomplete="current-password" required>
                @error('password') <span class="field-error">{{ $message }}</span> @enderror
            </div>

            <label class="check-label">
                <input type="checkbox" name="remember"> Remember me
            </label>

            <button type="submit">Log in</button>
            <p class="form-footnote">New here? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </section>
@endsection
