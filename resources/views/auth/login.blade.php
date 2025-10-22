<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('') }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Metronic</title>

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <!--begin::Form Section-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">

                        <!--begin::Form-->
                        <form class="form w-100" method="POST" action="{{ route('login.store') }}">
                            @csrf

                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Welcome back! Please login to your account.</div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Social Login Buttons-->
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
                            <!--end::Social Login Buttons-->

                            <!--begin::Separator-->
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div>
                            <!--end::Separator-->

                            <!--begin::Input group-->
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

                            <!--end::Input group-->

                            <div class="d-flex flex-stack mb-8">
                                <div class="form-check form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" name="remember" id="remember" />
                                    <label class="form-check-label fw-semibold text-gray-700 fs-base ms-1" for="remember">
                                        Remember me
                                    </label>
                                </div>
<a href="{{ route('password.request') }}" class="link-primary fs-base fw-semibold">Forgot Password?</a>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>

                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                Don’t have an account?
                                <a href="{{ url('/register') }}" class="link-primary fw-semibold">Sign up</a>
                            </div>
                        </form>
                        <!--end::Form-->

                    </div>
                </div>
            </div>
            <!--end::Form Section-->

            <!--begin::Aside Section-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url('{{ asset('assets/media/misc/auth-bg.png') }}')">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100 text-center">
                    <a href="{{ url('/') }}" class="mb-12">
                        <img alt="Logo" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-60px h-lg-75px" />
                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10"
                        src="{{ asset('assets/media/misc/auth-screens.png') }}" alt="" />
                    <h1 class="text-white fs-2qx fw-bolder mb-7">Welcome Back!</h1>
                    <div class="text-white fs-base opacity-75">
                        Log in to continue managing your projects and analytics dashboard.
                    </div>
                </div>
            </div>
            <!--end::Aside Section-->
        </div>
    </div>

    <script>var hostUrl = "{{ asset('assets/') }}";</script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
</body>
</html>
