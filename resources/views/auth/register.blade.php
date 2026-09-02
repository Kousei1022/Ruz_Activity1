@extends('layouts.app')

@section('title', 'Create account')

@section('content')
    <section class="auth-shell">
        <div class="auth-heading">
            <p class="eyebrow">Start organized</p>
            <h2>Build your stockroom.</h2>
            <p class="page-intro">Create an account to add, update, and manage your own products.</p>
        </div>

        <form class="form-card card" method="POST" action="{{ route('register.submit') }}">
            @csrf

            <div class="field">
                <label for="name">Full name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" required autofocus>
                @error('name') <span class="field-error">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                @error('email') <span class="field-error">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" autocomplete="new-password" required>
                @error('password') <span class="field-error">{{ $message }}</span> @enderror
            </div>

            <div class="field">
                <label for="password_confirmation">Confirm password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" required>
            </div>

            <button type="submit">Create account</button>
            <p class="form-footnote">Already registered? <a href="{{ route('login') }}">Log in</a></p>
        </form>
    </section>
@endsection