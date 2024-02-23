<style>
    .robot-icon {
        display: block;
        margin: 0 auto;
        width: 70px;
        height: 70px;
    }

    .robot-text {
        display: block;
        text-align: center;
        font-size: 14px;
        color: #ffffff;
        font-weight: bold;
        margin-top: 5px;
    }

    /* Styles for horizontal menu with vertical submenu */
    .menu-horizontal {
        display: flex;
        align-items: center;
    }

    .menu-item {
        position: relative;
    }

    .menu-sub {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        min-width: 160px;
        z-index: 1;
    }

    .menu-item:hover .menu-sub {
        display: block;
    }

    .storeLink {
        position: relative;
        display: inline-block;
        width: 240px;
        height: 80px;
        border-radius: 16px;
        overflow: hidden;
        background-color: black;
    }
    .storeLink > img {
        --width: 100%;
        position: absolute;
        width: var(--width);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

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
                    <img alt="Logo" src="{{ asset('logo.png') }}" class="logo-default" height="100px"
                        width="100px" />
                </a>
            </div>

            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold menu-horizontal"
                        id="kt_landing_menu">
                        <div class="menu-item">
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Utama</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Info Korporat</a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Visi dan Misi</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Piagam Pelanggan</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Ahli Lembaga</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Carta Organisasi</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Zakat</a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Jenis-jenis Zakat</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Bayaran Zakat</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Senarai Amil</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Wakaf</a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Wakaf Tunai</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Wakaf Hartanah</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Sewaan Hartanah Wakaf</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Agihan</a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Mohon Bantuan</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Semakan Bantuan</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Program Asnaf</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Hubungi Kami</a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Ibu Pejabat</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Cawangan</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link">Aduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-equal text-end ms-1">
                <a href="{{ route('landings.count-zakat') }}" class="btn btn-success">Bayar Zakat Online</a>
            </div>

            <div class="app-engage" id="kt_app_engage">
                <a href="https://preview.keenthemes.com/metronic8" target="_blank">
                    <img src="{{ asset('chatbot.png') }}" class="robot-icon"><br>
                    <span class="robot-text">Tanya Aliff</span>
                </a>
            </div>
        </div>
    </div>
</div>
