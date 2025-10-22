<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" />
</head>
<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">

                        <form class="form w-100" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Forgot Password?</h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Enter your email to receive a reset link.
                                </div>
                            </div>

                            <div class="fv-row mb-8">
                                <input type="email" name="email" class="form-control bg-transparent"
                                       placeholder="Email address" required />
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Send Reset Link</span>
                                </button>
                            </div>

                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                <a href="{{ url('/login') }}" class="link-primary fw-semibold">Back to Login</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url('{{ asset('assets/media/misc/auth-bg.png') }}')">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100 text-center">
                    <img alt="Logo" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-60px h-lg-75px mb-10" />
                    <h1 class="text-white fs-2qx fw-bolder mb-7">Reset Your Password Easily</h1>
                    <div class="text-white fs-base opacity-75">
                        We’ll send you a secure link to reset your password.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
</body>
</html>
