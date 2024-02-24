
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
    <head>
        <base href="../../../" />
        <title>Zakat Fintech</title>
        <meta charset="utf-8" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Zakat Fintech - Majlis Agama Islam Perlis" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="MAIPs" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Theme mode setup on page load-->
		<script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - New password -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate">
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Kemaskini Kata Laluan</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Sudah reset kata laluan ?
									<a href="{{ route('auth.login') }}" class="link-primary fw-bold">Log Masuk</a></div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password" placeholder="Kata Laluan Baru" name="password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Sila gunakan 8 aksara dengan kombinasi nombor dan aksara khas.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
									<input type="password" placeholder="Masukkan Semula Kata Laluan Baru" name="confirm-password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Repeat Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Action-->
								<div class="d-grid mb-10">
									<button type="button" id="kt_new_password_submit" class="btn btn-primary" data-action="{{ route('auth.change-password', $token) }}" onclick="btnUpdate(this)">
										<!--begin::Indicator label-->
										<span class="indicator-label">Tukar Kata Laluan</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Sila tunggu sebentar...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(assets/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <!--begin::Image-->
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="{{ asset('logo.png') }}" alt="" />
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Majlis Agama Islam Perlis</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="d-none d-lg-block text-white fs-base text-center">
                        Permohonan Bantuan Zakat
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - New password-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/authentication/reset-password/new-password.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    btnUpdate = (elem) => {
        Swal.fire({
            title: 'Adakah anda pasti?',
            text: 'Kata Laluan akan dikemaskini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            let data = $('form').serialize();

            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Sila tunggu sebentar...',
                    didOpen: function() {
                        Swal.showLoading();
                        $.ajax({
                            url: elem.dataset.action,
                            data: data,
                            type: 'PUT',
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: response.message,
                                        showConfirmButton: true,
                                    }).then(() => {
                                        window.location.href = "{{ route('auth.login') }}";
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: response.message,
                                        showConfirmButton: true,
                                    })
                                }
                            },
                            fail: (response) => {
                                Swal.fire(
                                    'Opps!',
                                    'An error occurred, we are sorry for inconvenience.',
                                    'danger'
                                )
                                failCallback()
                            }
                        })
                    }
                })
            }
        })
    }
</script>
