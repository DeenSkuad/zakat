<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Tambah Pengguna Amil</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_stepper_example_basic">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Akaun  Amil</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Informasi Amil</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Lokasi Amil</h3>
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div class="stepper-item d-none" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Selesai</h3>
                        </div>
                        <!--end::Step 4-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->
                    <form class="pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">No Kad Pengenalan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="" value="" autocomplete="off" />
                                    </div>
                                </div>
                                <!--end::Heading-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="d-block fw-semibold fs-6 mb-5">
                                        <span class="required">Informasi Pengguna Amil</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign.">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input placeholder-->
                                    <!--end::Hint-->
                                </div>

                                <div class="row">
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Nama Penuh Amil</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">No Telefon</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Emel Amil</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Poskod</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" autocomplete="off" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">

                                <!--begin::Input group-->
                                <div class="row">
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Alamat Amil</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Daerah</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Negeri</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="" value="" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Poskod</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="" value="" autocomplete="off" />
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <div class="row">
                                    <label class="required form-label mb-3">Kariah Terdekat</label>
                                    <select class="form-select ">
                                        <option>Kariah Terdekat</option>
                                        <option value="1">Kariah 1</option>
                                        <option value="2">Kariah 2</option>
                                        <option value="3">Kariah 3</option>
                                    </select>
                                </div>

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content" class="">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-12 text-center">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-gray-900">Pendaftaran Amil Baru Berjaya Ditambah</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                            </div>
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
                                    <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Back</button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></span>
                                    <span class="indicator-progress">Sila tunggu...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Seterusnya
                                    <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i></button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>

@include('asnaf-management.js.create')