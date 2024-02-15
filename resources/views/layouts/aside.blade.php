<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    @include('layouts.aside-toolbar')
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Pengurusan</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('applications.index') ? 'active' : '' }}" href="{{ route('applications.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Permohonan Asnaf</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Pengurusan Asnaf</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Tuntutan Upah</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Pengurusan Amil</span>
                        </a>
                    </div>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Tetapan</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('states.*') ? 'active' : '' }}"
                            href="{{ route('states.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Negeri</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('cities.*') ? 'active' : '' }}"
                            href="{{ route('cities.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Bandar</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('districts.*') ? 'active' : '' }}"
                            href="{{ route('districts.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Mukim</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('kariahs.*') ? 'active' : '' }}"
                            href="{{ route('kariahs.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Kariah</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('services.*') ? 'active' : '' }}"
                            href="{{ route('services.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Jenis Bantuan</span>
                        </a>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('users.*') ? 'active' : '' }}"
                            href="{{ route('users.index') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-13 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Pengguna</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
