<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Kemaskini Permohonan Asnaf</h2>
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
                            <h3 class="stepper-title">Jenis Bantuan</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Pengesahan Kesihatan</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Kebenaran Pesakit / Waris</h3>
                        </div>
                        <!--end::Step 3-->
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
                                    <!--begin::Title-->
                                    <h2 class="fw-bold d-flex align-items-center text-gray-900">Bantuan untuk
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Bantuan untuk kategori asnaf fakir">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </h2>
                                    <div class="text-muted fw-semibold fs-6">
                                        Kategori asnaf fakir
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Jenis Bantuan</label>
                                        <select class="form-select" name="service_id" id="service_id">
                                            <option selected disabled>Sila pilih bantuan</option>
                                            @foreach($services as $service)
                                                @if($service->id == $service->id)
                                                    <option value="{{ $service->id }}" selected>{{ $service->name }}</option>
                                                @else
                                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Asnaf</label>
                                        <select class="form-select" name="user_id" id="user_id">
                                            <option selected disabled>Sila pilih asnaf</option>
                                            @foreach($asnafs as $asnaf)
                                                @if($asnaf->id == $asnaf->id)
                                                    <option value="{{ $asnaf->id }}" selected>{{ $asnaf->name }}</option>
                                                @else
                                                    <option value="{{ $asnaf->id }}">{{ $asnaf->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Kariah</label>
                                        <select class="form-select" name="kariah_id" id="kariah_id">
                                            <option selected disabled>Sila pilih kariah</option>
                                            @foreach($kariahs as $kariah)
                                                @if($kariah->id == $kariah->id)
                                                    <option value="{{ $kariah->id }}" selected>{{ $kariah->name }}</option>
                                                @else
                                                    <option value="{{ $kariah->id }}">{{ $kariah->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                                        <span class="required">Borang Pengesahan Kesihatan</span>
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
                                        <label class="required form-label mb-3">Nama Pesakit</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name" id="name" placeholder="" value="{{$application->name ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">No. Kad Pengenalan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="ic_no" id="ic_no" placeholder="" value="{{$application->ic_no ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Jenis Penyakit (Diagnosis)</label>
                                        <select class="form-select" name="disease_id" id="disease_id">
                                            <option selected disabled>Sila pilih jenis penyakit</option>
                                            @foreach($diseases as $disease)
                                                @if($disease->id == $disease->id)
                                                    <option value="{{ $disease->id }}" selected>{{ $disease->name }}</option>
                                                @else
                                                    <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Latar Belakang Penyakit & Rawatan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="disease_background" id="disease_background" placeholder="" value="{{$application->disease_background ?? ''}}" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Preskripsi Ubat</label>
                                        <select class="form-select" name="prescription_id" id="prescription_id">
                                            <option selected disabled>Sila pilih jenis ubat</option>
                                            @foreach($prescriptions as $prescription)
                                                @if($prescription->id == $prescription->id)
                                                    <option value="{{ $prescription->id }}" selected>{{ $prescription->name }}</option>
                                                @else
                                                    <option value="{{ $prescription->id }}">{{ $prescription->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Tempoh Rawatan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="treatment_period" id="treatment_period" placeholder="" value="{{$application->treatment_period ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Alat Perubatan / Perubatan Diperlukan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="medical_tool" id="medical_tool" placeholder="" value="{{$application->medical_tool ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-3">
                                        <label class="required form-label mb-3">Kos Rawatan Berdasarkan Penyakit</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="medical_cost" id="medical_cost" placeholder="" value="{{$application->medical_cost ?? ''}}" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-10 fv-row col-md-6">
                                        <label class="required form-label mb-3">Kekerapan Menilai Semula</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="frequency" id="frequency" placeholder="" value="{{$application->frequency ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-6">
                                        <label class="required form-label mb-3">Lain - lain Komen</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="comments" id="comments" placeholder="" value="{{$application->comments ?? ''}}" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-10 fv-row col-md-6">
                                        <label class="required form-label mb-3">Dokumen Sokongan / Laporan Perubatan</label>
                                        <input type="file" class="form-control form-control-lg form-control-solid" name="attachment" id="attachment" placeholder="" value="{{$application->attachment ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-6">
                                        <label class="required form-label mb-3">Penyakit ini (akan/tidak akan) menyebabkan pesakit ini tidak berupaya menanggung diri sendiri</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="self_support" id="self_support" placeholder="" value="{{$application->self_support ?? ''}}" autocomplete="off" />
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
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-gray-900">Kebenaran Pesakit / Waris</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">
                                        <font color="red">Saya dengan ini membenarkan pihak Lembaga Zakat Perlis menerima maklumat kesihatan terkini saya daripada pihak hospital bagi tujuan permohonan bantuan zakat.</font>
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="row">
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">Nama Penuh Waris</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="heir_name" id="heir_name" placeholder="" value="{{$application->heir_name ?? ''}}" autocomplete="off" />
                                    </div>
                                    <div class="mb-10 fv-row col-md-4">
                                        <label class="required form-label mb-3">No. Kad Pengenalan Waris</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="her_ic_no" id="her_ic_no" placeholder="" value="{{$application->her_ic_no ?? ''}}" autocomplete="off" />
                                    </div>
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
                                    <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Kembali</button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" data-action="{{ route('applications.store') }}" onClick="btnUpdate(this)" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Simpan
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

@include('application.js.edit')