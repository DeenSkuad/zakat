@extends('landing.layouts.app')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="mb-0" id="home">
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
            @include('landing.layouts.aside')
            <div class="container">
                <div class="tns" style="direction: ltr">
                    <div data-tns="true" data-tns-nav-position="bottom" data-tns-mouse-drag="true" data-tns-controls="false">
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <!-- <img src="{{ asset('banners/vid-banner-1.mp4') }}" class="card-rounded shadow mw-100" alt="" /> -->
                            <video width="900" height="340" controls>
                                <source src="../assets/media/vid-banner-1.mp4" type="video/mp4">
                                <!-- <source src="movie.ogg" type="video/ogg"> -->
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{ asset('banners/2.png') }}" class="card-rounded shadow mw-100" alt="" />
                        </div>
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{ asset('banners/3.png') }}" class="card-rounded shadow mw-100" alt="" />
                        </div>
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{ asset('banners/4.png') }}" class="card-rounded shadow mw-100" alt="" />
                        </div>
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{ asset('banners/5.jpg') }}" class="card-rounded shadow mw-100" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <div class="container">
                <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                </div>
                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                        <div class="d-flex flex-column flex-center h-250px w-250px h-lg-300px w-lg-300px m-3 bgi-no-repeat bgi-position-center bgi-size-contain">
                            <i class="ki-duotone ki-element-11 fs-2tx text-black mb-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <div class="mb-0">
                                <div class="fs-lg-2hx fs-2x fw-bold text-black d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="29703818.85" data-kt-countup-prefix="RM" data-kt-countup-suffix="+">0</div>
                                </div>
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    <font color="green">Kutipan Semasa ({{ Carbon\Carbon::now()->format('d/m/Y') }})
                                    </font>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-center h-250px w-250px h-lg-300px w-lg-300px m-3 bgi-no-repeat bgi-position-center bgi-size-contain">
                            <i class="ki-duotone ki-chart-pie-4 fs-2tx text-black mb-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <div class="mb-0">
                                <div class="fs-lg-2hx fs-2x fw-bold text-black d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="19200059" data-kt-countup-prefix="RM" data-kt-countup-suffix="+">0</div>
                                </div>
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    <font color="red">Agihan Semasa ({{ Carbon\Carbon::now()->format('d/m/Y') }})
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fs-2 fw-semibold text-muted text-center mb-3">

                </div>
                <div class="fs-2 fw-semibold text-muted text-center">

                </div>
            </div>
        </div>
        <div class="mt-sm-n10">
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="pb-15 pt-18 landing-dark-bg">
                <div class="container">
                    <div class="row w-100 gy-10 mb-md-20">
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-white">Kira</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Buat kiraan zakat dengan sempurna
                                    <br />dengan kalkulator zakat yang disediakan
                                    <br /><button type="button" class="btn btn-default text-white">KIRA SEKARANG</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-white">Bayar</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Pelbagai saluran bayaran zakat
                                    tersedia
                                    <br />untuk anda menunaikan zakat
                                    <br /><button type="button" class="btn btn-default text-white">BAYAR SEKARANG</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-white">Semak</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Semak bayaran zakat, tebus mata
                                    <br />ganjaran atau cetak penyata zakat untuk
                                    <br />tujuan percukaian
                                    <br /><button type="button" class="btn btn-default text-white">SEMAK SEKARANG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <div class="mt-20 mb-n20 position-relative z-index-2">
            <div class="container">
                <div class="text-center mb-17">
                    <h3 class="fs-2hx text-gray-900 mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Maklum Balas Pelanggan</h3>
                </div>
                <div class="row g-lg-10 mb-10 mb-lg-20">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <div class="mb-7">
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <div class="fs-2 fw-bold text-gray-900 mb-3">Terdapat banyak kemudahan dalam penggunaan
                                    sistem kami untuk Pembayar Zakat
                                </div>
                                <div class="text-gray-500 fw-semibold fs-4">Sistem pembayaran zakat yang disediakan
                                    adalah sangat mudah difahami dan cepat. Saya dapat dengan mudah menguruskan
                                    pembayaran zakat saya dengan beberapa klik sahaja. Pengalaman ini benar-benar
                                    menyenangkan dan menjimatkan masa. Terima kasih kepada pasukan kami atas penyediaan
                                    sistem yang begitu efisien.</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="{{ asset('default.png') }}" class="" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                        Akmal Johari
                                    </a>
                                    <span class="text-muted d-block fw-bold">Pembayar Zakat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <div class="mb-7">
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <div class="fs-2 fw-bold text-gray-900 mb-3">Sistem yang sangat mudah digunakan dan
                                    senang untuk difahami
                                </div>
                                <div class="text-gray-500 fw-semibold fs-4">Sistem ini benar-benar mudah digunakan!
                                    Saya sebagai penerima zakat merasakan bahawa platform ini sangat mesra pengguna dan
                                    tidak memerlukan banyak pengetahuan teknikal. Saya dapat dengan mudah mengakses dan
                                    menggunakan semua fungsi yang disediakan tanpa masalah. Terima kasih kerana
                                    menyediakan sistem yang begitu mudah untuk kami gunakan.</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="{{ asset('default.png') }}" class="" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                        Anuar Ibrahim
                                    </a>
                                    <span class="text-muted d-block fw-bold">Penerima Zakat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <div class="mb-7">
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <div class="fs-2 fw-bold text-gray-900 mb-3">Banyak kemudahan untuk membuat sewaan
                                </div>
                                <div class="text-gray-500 fw-semibold fs-4">Sistem penyewaan yang disediakan sangat
                                    mudah untuk digunakan. Proses pembayaran adalah pantas dan efisien. Saya dapat
                                    dengan mudah menjadualkan tempahan saya tanpa sebarang masalah. Pengalaman menyewa
                                    dengan platform ini adalah sangat menyenangkan dan memberi keyakinan kepada saya
                                    untuk menggunakan perkhidmatan ini lagi di masa akan datang.</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="{{ asset('default.png') }}" class="" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                        Mahyudin Ayub
                                    </a>
                                    <span class="text-muted d-block fw-bold">Penyewa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mb-0">
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="landing-dark-bg pt-20">
                <div class="container">
                    <div class="row py-10 py-lg-20">
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <div class="py-2 px-2">
                                <a href="#" class="">
                                    <img class="w-25" src="../assets/media/logos/app-store-EN.png" alt="Download on the App Store">
                                </a>
                            </div>
                            <div class="py-2 px-2">
                                <a href='#' class="">
                                    <img class="w-25" alt='Get it on Google Play' src='../assets/media/logos/play-store-EN.png' />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-16">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <h4 class="fw-bold text-gray-500 mb-6">Pautan Lain-Lain</h4>
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Sistem Sewaan</a>
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Sistem Aduan</a>
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Aplikasi Mudah
                                        Alih</a>
                                </div>
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <h4 class="fw-bold text-gray-500 mb-6">Media Sosial</h4>
                                    <a href="https://www.facebook.com" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <a href="https://www.instagram.com" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="landing-dark-separator"></div>
                <div class="container">
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <div class="d-flex align-items-center order-2 order-md-1">

                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="#">&copy; 2024 Zakat Fintech</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>

    </div>
    @endsection