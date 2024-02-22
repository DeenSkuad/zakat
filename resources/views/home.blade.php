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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">RM162J</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Kutipan Zakat</span>
                                    </div>
                                </div>
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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">RM159J</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Agihan Zakat</span>
                                    </div>
                                </div>
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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">RM5.8J</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Wakaf Tunai</span>
                                    </div>
                                </div>
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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">RM8.6J</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Crowdfunding</span>
                                    </div>
                                </div>
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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">7500</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Jumlah Asnaf</span>
                                    </div>
                                </div>
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
                                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">68000</span>
                                    <div class="m-0">
                                        <span class="fw-semibold fs-6 text-gray-500">Pembayar Zakat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bold text-gray-900">Pecahan Kutipan Semasa</h3>
                            </div>
                            <div class="card-body pt-3">
                                <canvas id="kt_chartjs_3" class="mh-400px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bold text-gray-900">Pecahan Agihan Semasa</h3>
                            </div>
                            <div class="card-body pt-3">
                                <canvas id="kt_chartjs_4" class="mh-400px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <div class="col-xl-4">
                        <div class="card card-flush h-100 mb-5 mb-xl-10">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Top Kariah</span>
                                    <span class="text-gray-500 pt-2 fw-semibold fs-6">Jumlah {{ $asnafCount }}
                                        Asnaf</span>
                                </h3>
                                <div class="card-toolbar">
                                    <ul class="nav" id="kt_chart_widget_19_tabs">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4 me-1"
                                                data-bs-toggle="tab" id="kt_chart_widget_19_tab_1"
                                                href="#kt_chart_widget_19_tab_content_1">2024</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_chart_widget_19_tab_content_1">
                                        <div class="m-0">
                                            @foreach ($kariahs as $kariah)
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex align-items-center me-5">
                                                        <img src="{{ asset('default.png') }}" class="me-4 w-30px"
                                                            style="border-radius: 4px" alt="" />
                                                        <div class="me-5">
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $kariah->name }}</a>
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span
                                                            class="text-gray-800 fw-bold fs-4 me-3">{{ $kariah->asnafs_count }}</span>
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
                                    <span class="card-label fw-bold text-gray-900">Asnaf Berdaftar</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Asnaf berdaftar dibawah kariah</span>
                                </h3>
                            </div>
                            <div class="card-body pt-0">
                                <div id="kt_leaflet_1" style="height:400px;"></div>
                            </div>
                        </div>
                        <div class="card card-flush h-xl-50">
                            <div class="card-header py-5">
                                <h3 class="card-title fw-bold text-gray-800">Sasaran Bulanan</h3>
                                <div class="card-toolbar">
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
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
                                <div id="kt_apexcharts_1" style="height: 350px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var element2 = document.getElementById('kt_apexcharts_1');

            var height2 = parseInt(KTUtil.css(element2, 'height'));
            var labelColor2 = KTUtil.getCssVariableValue('--kt-gray-500');
            var borderColor2 = KTUtil.getCssVariableValue('--kt-gray-200');
            var baseColor2 = '#007bff';
            var secondaryColor2 = '#6c757d';

            if (!element2) {
                return;
            }

            var options2 = {
                series: [{
                    name: 'Kutipan',
                    data: [44, 55, 57, 56, 61, 58]
                }, {
                    name: 'Sasaran',
                    data: [76, 85, 101, 98, 87, 105]
                }],
                chart: {
                    fontFamily: 'inherit',
                    type: 'bar',
                    height: height2,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: ['30%'],
                        endingShape: 'rounded'
                    },
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: labelColor2,
                            fontSize: '12px'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: labelColor2,
                            fontSize: '12px'
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px'
                    },
                    y: {
                        formatter: function (val) {
                            return 'RM' + val + ' Juta'
                        }
                    }
                },
                colors: [baseColor2, secondaryColor2],
                grid: {
                    borderColor: borderColor2,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                }
            };

            var chart2 = new ApexCharts(element2, options2);
            chart2.render();

            var ctx = document.getElementById('kt_chartjs_3');
            var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
            var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
            var successColor = KTUtil.getCssVariableValue('--kt-success');
            var warningColor = KTUtil.getCssVariableValue('--kt-warning');
            var infoColor = KTUtil.getCssVariableValue('--kt-info');
            var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');
            const labels = ['Zakat Fitrah', 'Zakat Ternakan', 'Zakat Wang Simpanan', 'Zakat Saham', 'Zakat Padi/Pertanian', 'Zakat Pertanian', 'Zakat Pendapatan', 'Zakat Emas/Perak', 'Zakat Qadha', 'Zakat Harta', 'Zakat Perniagaan'];

            const colors = [
                primaryColor,
                dangerColor,
                successColor,
                warningColor,
                infoColor,
                '#ffcc00',
                '#9966ff',
                '#00cc99',
                '#ff6600',
                '#ff99cc',
                '#0099ff'
            ];

            const backgroundColors = labels.map((label, index) => {
                // If there's a predefined color for the label, use it, otherwise, use a default color
                return colors[index] || getRandomColor();
            });

            const data = {
                labels: labels,
                datasets: [{
                    data: [62, 1215, 4136900, 221894, 130184, 2361, 26176143, 237905, 112198, 1143855, 3336930],
                    backgroundColor: backgroundColors
                }],
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        title: {
                            display: false,
                        }
                    },
                    responsive: true,
                },
                defaults:{
                    global: {
                        defaultFont: fontFamily
                    }
                }
            };

            var myChart = new Chart(ctx, config);

            var ctx1 = document.getElementById('kt_chartjs_4');
            var primaryColor1 = KTUtil.getCssVariableValue('--kt-primary');
            var dangerColor1 = KTUtil.getCssVariableValue('--kt-danger');
            var successColor1 = KTUtil.getCssVariableValue('--kt-success');
            var warningColor1 = KTUtil.getCssVariableValue('--kt-warning');
            var infoColor1 = KTUtil.getCssVariableValue('--kt-info');
            var fontFamily1 = KTUtil.getCssVariableValue('--bs-font-sans-serif');
            const labels1 = [
                'Bantuan Am', 'Bantuan Kepada Badan/Pertubuhan', 'Bantuan Kepada Ibnu Sabil', 'Bantuan Pelajar Pondok dan Tahfiz', 'Bantuan Persekolahan', 'Bantuan Rawatan Perubatan', 'Bantuan Tetap Bulanan', 'Dermasiswa Sultan', 'Bantuan Hari Raya',
                'Bantuan Kepada Charity', 'Bantuan Melanjutkan Pelajaran ke Inst Pengajian Tinggi', 'Bantuan Pembangunan Asnaf', 'Bantuan Rawatan & Perubatan (Project Khas)', 'Bantuan Rumah Kediaman', 'Biasiswa Tengku Anis Maik', 'Program Kemahiran'
            ];

            const colors1 = [
                primaryColor,
                dangerColor,
                successColor,
                warningColor,
                infoColor,
                '#ffcc00',
                '#9966ff',
                '#00cc99',
                '#ff6600',
                '#ff99cc',
                '#0099ff'
            ];

            const data1 = {
                labels: labels1,
                datasets: [{
                    data: [168000, 86077, 316000, 128000, 10501400, 3220300, 545000, 517000, 1126800, 2422190, 3336930],
                    backgroundColor: backgroundColors
                }],
            };

            const config1 = {
                type: 'pie',
                data: data1,
                options: {
                    plugins: {
                        title: {
                            display: false,
                        }
                    },
                    responsive: true,
                },
                defaults:{
                    global: {
                        defaultFont: fontFamily1
                    }
                }
            };

            var myChart1 = new Chart(ctx1, config1);

            var KTLeaflet = function() {

                var demo1 = async function() {
                    var leaflet = L.map('kt_leaflet_1', {
                        center: [6.429607903209255, 100.26956845270323],
                        zoom: 11
                    });

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                    }).addTo(leaflet);

                    var leafletIcon = L.divIcon({
                        html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                        bgPos: [10, 10],
                        iconAnchor: [20, 37],
                        popupAnchor: [0, -37],
                        className: 'leaflet-marker'
                    });

                    var marker = L.marker([6.430226659075849, 100.2703516685301], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker.bindPopup(
                        "<b>Masjid Negeri Arau</b><br/>Asnaf Berdaftar: 2,000<br />Jumlah Kutipan: RM50,000.00"
                        ).openPopup();

                    var marker1 = L.marker([6.445801991829521, 100.27497576853008], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker1.bindPopup(
                        "<b>MASJID AL NUR</b><br/>Asnaf Berdaftar: 3,000<br />Jumlah Kutipan: RM20,000.00"
                        ).openPopup();

                    var marker2 = L.marker([6.498216051162056, 100.33443333969444], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker2.bindPopup(
                        "<b>MASJID ALI IMRAN</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker3 = L.marker([6.43339742548246, 100.28812936853004], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker3.bindPopup(
                        "<b>MASJID AL MURSYID</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker4 = L.marker([6.455974891434227, 100.29571397599013], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker4.bindPopup(
                        "<b>MASJID AL MASYHOR</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker5 = L.marker([6.449534200354241, 100.26786588078856], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker5.bindPopup(
                        "<b>MASJID MUHAMMADIAH</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker6 = L.marker([6.452632424552875, 100.2601671445039], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker6.bindPopup(
                        "<b>MASJID NURUL MUKMININ</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker7 = L.marker([6.413749019245483, 100.22616861147388], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker7.bindPopup(
                        "<b>MASJID AL TAQWA</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker8 = L.marker([6.379116314298139, 100.23741073969428], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker8.bindPopup(
                        "<b>MASJID IBNU TAIMIAH</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();

                    var marker9 = L.marker([6.450982490759584, 100.27948789416004], {
                        icon: leafletIcon
                    }).addTo(leaflet);
                    marker9.bindPopup(
                        "<b>MASJID AL FALAH</b><br/>Asnaf Berdaftar: 5,000<br />Jumlah Kutipan: RM100,000.00"
                        ).openPopup();
                }

                return {
                    init: function() {
                        demo1();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTLeaflet.init();
            });
        });

        function getRandomColor() {
            return '#' + Math.floor(Math.random()*16777215).toString(16);
        }
    </script>
@endpush
