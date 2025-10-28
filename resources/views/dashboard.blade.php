@extends('layouts.auth')

@section('page_title', 'Dashboard')
@section('breadcrumb', 'Default')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
        <!--begin::Card-->
        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
            <!--begin::Info-->
            <div class="d-flex flex-column py-2">
                <div class="d-flex align-items-center fs-4 fw-bold mb-5">Sales
                <span class="fs-6 text-gray-400 ms-2">+45%</span></div>
                <div class="fs-2x fw-bolder">$6,820.00</div>
            </div>
            <!--end::Info-->
            
            <!--begin::Chart-->
            <div class="d-flex align-items-center w-75px h-75px">
                <div id="kt_card_widget_1_chart"></div>
            </div>
            <!--end::Chart-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
        <!--begin::Card-->
        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
            <!--begin::Info-->
            <div class="d-flex flex-column py-2">
                <div class="d-flex align-items-center fs-4 fw-bold mb-5">Orders
                <span class="fs-6 text-gray-400 ms-2">+15%</span></div>
                <div class="fs-2x fw-bolder">1,258</div>
            </div>
            <!--end::Info-->
            
            <!--begin::Chart-->
            <div class="d-flex align-items-center w-75px h-75px">
                <div id="kt_card_widget_2_chart"></div>
            </div>
            <!--end::Chart-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
    
    <!-- Add more dashboard content as needed -->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-6">
        <!--begin::Chart widget 1-->
        <div class="card card-flush h-md-100">
            <div class="card-header pt-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Sales Statistics</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Recent customers statistics</span>
                </h3>
            </div>
            <div class="card-body pt-5">
                <div id="kt_charts_widget_1" class="min-h-auto" style="height: 300px"></div>
            </div>
        </div>
        <!--end::Chart widget 1-->
    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-xxl-6">
        <!--begin::Chart widget 2-->
        <div class="card card-flush h-md-100">
            <div class="card-header pt-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Revenue</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Weekly revenue report</span>
                </h3>
            </div>
            <div class="card-body pt-5">
                <div id="kt_charts_widget_2" class="min-h-auto" style="height: 300px"></div>
            </div>
        </div>
        <!--end::Chart widget 2-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
@endsection

@section('scripts')
<script>
    // Dashboard specific scripts would go here
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize charts and other dashboard components
        console.log('Dashboard loaded');
    });
</script>
@endsection