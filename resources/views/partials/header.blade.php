<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-30px" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu align-items-stretch">
                <ul class="menu menu-rounded fw-semibold fs-6">
                    <li class="menu-item"><a href="{{ url('/dashboard') }}" class="menu-link">Dashboard</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Pages</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Apps</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Layouts</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
