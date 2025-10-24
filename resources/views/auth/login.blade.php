@extends('layouts.noauth')

@section('title', 'Login | Metronic')

@section('form')
<form class="form w-100" method="POST" action="{{ route('login.store') }}">
    @csrf

    <!-- Heading -->
    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
        <div class="text-gray-500 fw-semibold fs-6">Welcome back! Please login to your account.</div>
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

    <!-- Input Fields -->
    <div class="fv-row mb-8">
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required class="form-control bg-transparent" />
    </div>

    <div class="fv-row mb-8 position-relative">
        <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" required />
        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
            <i class="ki-duotone ki-eye-slash fs-2"></i>
            <i class="ki-duotone ki-eye fs-2 d-none"></i>
        </span>
    </div>

    <!-- Remember & Forgot -->
    <div class="d-flex flex-stack mb-8">
        <div class="form-check form-check-solid">
            <input class="form-check-input" type="checkbox" value="1" name="remember" id="remember" />
            <label class="form-check-label fw-semibold text-gray-700 fs-base ms-1" for="remember">
                Remember me
            </label>
        </div>
<a href="{{ route('password.form') }}" class="link-primary fs-base fw-semibold">Forgot Password?</a>
    </div>

    <!-- Submit -->
    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">
            <span class="indicator-label">Sign In</span>
        </button>
    </div>

    <!-- Signup Link -->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Don’t have an account?
        <a href="{{ url('/register') }}" class="link-primary fw-semibold">Sign up</a>
    </div>
</form>
@endsection
