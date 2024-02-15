<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/new-address.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('scripts')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    getModalContent = (elem) => {
        $.get(elem.dataset.action, function(response) {
            $("#baseAjaxModal").html(response);
            $(baseAjaxModalContent).modal("show");
        });
    }

    const processCreation = (elem, datatable, data) => {
        Swal.fire({
            title: 'Sila tunggu sebentar...',
            didOpen: function() {
                Swal.showLoading();
                $.ajax({
                    url: elem.dataset.action,
                    data: data,
                    type: 'POST',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                showConfirmButton: true,
                            }).then(() => {
                                $(baseAjaxModalContent).modal("hide");
                                datatable.DataTable().ajax.reload();
                            });
                        }
                    },
                    fail: (response) => {
                        Swal.fire(
                            'Opps!',
                            'An error occurred, we are sorry for inconvenience.',
                            'danger'
                        )
                    }
                })
            }
        })
    }

    const processCreationWithImage = (elem, datatable, data) => {
        Swal.fire({
            title: 'Sila Tunggu Sebentar...',
            didOpen: function() {
                Swal.showLoading();
                $.ajax({
                    url: elem.dataset.action,
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(response) {
                        if (response.success) {
                            $(baseAjaxModalContent).modal("hide");
                            datatable.DataTable().ajax.reload();
                        }

                        callback(response, false);
                    },
                    fail: (response) => {
                        callback(response, false);
                    }
                })
            }
        })
    }

    const processUpdationWithImage = (elem, datatable, data) => {
        Swal.fire({
            title: 'Sila Tunggu Sebentar...',
            didOpen: function() {
                Swal.showLoading();
                $.ajax({
                    url: elem.dataset.action,
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(response) {
                        if (response.success) {
                            $(baseAjaxModalContent).modal("hide");
                            datatable.DataTable().ajax.reload();
                        }

                        callback(response, false);
                    },
                    fail: (response) => {
                        callback(response, false);
                    }
                })
            }
        })
    }

    const confirmCreate = async (elem) => {
        return await Swal.fire({
            title: 'Adakah anda pasti?',
            text: 'Data akan disimpan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#038cfc',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        })
    }

    const processUpdation = (elem, datatable, data) => {
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
                                $(baseAjaxModalContent).modal("hide");
                                datatable.DataTable().ajax.reload();
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

    const confirmUpdate = (elem) => {
        return Swal.fire({
            title: 'Adakah anda pasti?',
            text: 'Data akan dikemaskini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        })
    }

    const processDeletion = (elem, successCallback, failCallback) => {
        Swal.fire({
            title: 'Sila tunggu sebentar...',
            didOpen: function() {
                Swal.showLoading();
                confirmDelete(elem).then((choice) => {
                    if (choice.value) {
                        deleteItem(elem, successCallback, failCallback)
                    }
                })
            }
        })
    }

    const deleteItem = (elem, successCallback = () => {}, failCallback = () => {}) => {
        $.ajax({
            url: elem.dataset.action,
            type: 'DELETE',
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: true,
                    }).then(() => {
                        $(elem).closest('div .datatable').DataTable().ajax.reload()
                        successCallback()
                    });
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

    const confirmDelete = (elem) => {
        return Swal.fire({
            title: 'Adakah anda pasti?',
            text: 'Data akan dihapuskan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then(() => deleteItem(elem))
    }
</script>
