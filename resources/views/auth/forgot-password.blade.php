@extends('layouts.noauth')

@section('title', 'Forgot Password | Metronic')

@section('form')
<form class="form w-100" method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Heading -->
    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Forgot Password?</h1>
        <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
    </div>

    <!-- Social Login Buttons -->
    <div class="row g-3 mb-9">
        <div class="col-md-6">
            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center w-100">
                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />
                Sign in with Google
            </a>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center w-100">
                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />
                Sign in with Apple
            </a>
        </div>
    </div>

    <!-- Separator -->
    <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
    </div>

    <!-- Email Field -->
    <div class="fv-row mb-8">
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required class="form-control bg-transparent" />
    </div>

    <!-- Submit -->
    <div class="d-grid mb-10 mt-4">
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </div>

    <!-- Links -->
    <div class="text-center">
        <div class="text-gray-500 fw-semibold fs-6 mb-2">
            Remembered your password? <a href="{{ url('/login') }}" class="link-primary fw-semibold">Sign in</a>
        </div>
        <div class="text-gray-500 fw-semibold fs-6">
            Don’t have an account? <a href="{{ url('/register') }}" class="link-primary fw-semibold">Sign up</a>
        </div>
    </div>
</form>
@endsection
