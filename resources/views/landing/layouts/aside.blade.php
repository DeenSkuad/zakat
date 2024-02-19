<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center flex-equal">
                <!--begin::Mobile menu toggle-->
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2hx">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <a href="landing.html">
                    <img alt="Logo" src="{{ asset('logo.png') }}" class="logo-default" height="100px" width="100px" />
                </a>
            </div>

            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                        id="kt_landing_menu">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Utama</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kalkulator Zakat</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Bayar Zakat</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true"
                                data-kt-drawer-dismiss="true">Proses Pembayaran</a>
                            <!--end::Menu link-->
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kenali Kami</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-equal text-end ms-1">
                <a href="{{ route('landings.count-zakat') }}" class="btn btn-success">Kira Zakat</a>
            </div>
        </div>
    </div>
</div>
