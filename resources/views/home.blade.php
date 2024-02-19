@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row gy-5 g-xl-10">
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $asnafCount }}</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">Asnaf</span>
                                </div>
                            </div>
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">27,5M</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">Stock Qty</span>
                                </div>
                            </div>
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">149M</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">Stock Value</span>
                                </div>
                            </div>
                            <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>0.47%</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-map fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">89M</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">C APEX</span>
                                </div>
                            </div>
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">72.4%</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">OPEX</span>
                                </div>
                            </div>
                            <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>0.647%</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <div class="m-0">
                                <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <div class="d-flex flex-column my-7">
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">106M</span>
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-500">Saving</span>
                                </div>
                            </div>
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-4">
                    <div class="card card-flush h-100 mb-5 mb-xl-10">
                        <div class="card-header pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Top Mukim</span>
                                <span class="text-gray-500 pt-2 fw-semibold fs-6">Jumlah {{ $asnafCount }} Asnaf</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav" id="kt_chart_widget_19_tabs">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_19_tab_1" href="#kt_chart_widget_19_tab_content_1">2024</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_chart_widget_19_tab_content_1">
                                    <div id="kt_charts_widget_19_chart_1" class="w-100 h-400px mb-13 mt-n4"></div>
                                    <div class="m-0">
                                        @foreach ($kariahs as $kariah)
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex align-items-center me-5">
                                                    <img src="{{ asset('default.png') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <div class="me-5">
                                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $kariah->name }}</a>
                                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">{{ $kariah->asnafs_count }}</span>
                                                </div>
                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 mb-xl-10">
                    <div class="card card-flush h-xl-50 mb-5 mb-xl-10">
                        <div class="card-header py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Human Resources</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0">
                            a<div id="kt_leaflet_1" style="height:300px;"></div>
                        </div>
                    </div>
                    <div class="card card-flush h-xl-50">
                        <div class="card-header py-5">
                            <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                            <div class="card-toolbar">
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <div class="text-gray-600 fw-bold">Loading date range...</div>
                                    <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                            <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                                <div class="me-md-2">
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                                    </div>
                                    <span class="fs-6 fw-semibold text-gray-500">Targets for April</span>
                                </div>
                                <div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                    </div>
                                    <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                                </div>
                                <div class="m-0">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i>4.5%</span>
                                    </div>
                                    <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                                </div>
                            </div>
                            <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Class definition
            var KTLeaflet = function () {

            // Private functions
            var demo1 = function () {
                // define leaflet
                var leaflet = L.map('kt_leaflet_1', {
                    center: [-37.8179793, 144.9671293],
                    zoom: 11
                });

                // set leaflet tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(leaflet);

                // set custom SVG icon marker
                var leafletIcon = L.divIcon({
                    html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                    bgPos: [10, 10],
                    iconAnchor: [20, 37],
                    popupAnchor: [0, -37],
                    className: 'leaflet-marker'
                });

                // bind marker with popup
                var marker = L.marker([-37.8179793, 144.9671293], { icon: leafletIcon }).addTo(leaflet);
                marker.bindPopup("<b>Flinder's Station</b><br/>Melbourne, Victoria").openPopup();
            }

            return {
                    // public functions
                    init: function () {
                        // default charts
                        demo1();
                    }
                };
            }();

            jQuery(document).ready(function () {
                KTLeaflet.init();
            });
        });
    </script>
@endpush
