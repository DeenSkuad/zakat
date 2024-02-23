<script type="text/javascript">
    $(document).ready(function() {
        let baseUrl = "{{ route('tenants.index') }}";
        let createUrl = "{{ route('tenants.create') }}";

        $('#userDatatable').DataTable({
            'scrollCollapse': true,
            'pagingType': 'full_numbers',
            'serverSide': true,
            'processing': true,
            'ordering': false,
            dom: '<"row"<"col-md-12"B>><"row"<"col-md-3"l><"col-md-6"><"col-md-3"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            buttons: [
                'excel', 'pdf'
            ],
            ajax: {
                url: baseUrl,
                method: 'GET',
                dataType: 'json',
                dataSrc: "data",
            },
            columns: [
                { "data" : "name" },
            ],
            columnDefs: [{
                "targets": 1,
                "data": 'id',
                "render": function(id, type, full, meta) {
                    let showUrl = "{{ route('tenants.show', 'data-id') }}";
                    let editUrl = "{{ route('tenants.edit', 'data-id') }}";
                    let deleteUrl = "{{ route('tenants.destroy', 'data-id') }}";

                    showUrl = showUrl.replace('data-id', id);
                    editUrl = editUrl.replace('data-id', id);
                    deleteUrl = deleteUrl.replace('data-id', id);

                    return '<div class="form-group">' +
                    '<div class="btn-group" role="group">' +
                    '<button type="button" data-action="' + showUrl + '" class="btn btn-icon btn-outline-info mt-1" onClick="getModalContent(this)"><i class="fa fa-eye"></i></button>' +
                    '<button type="button" data-action="' + editUrl + '" class="btn btn-icon btn-outline-primary mt-1" onClick="getModalContent(this)"><i class="fa fa-edit"></i></button>' +
                    '<button type="button" data-action="' + deleteUrl + '" class="btn btn-icon btn-outline-danger mt-1" onClick="btnDelete(this)"><i class="fa fa-trash"></i></button>' +
                    '</div>' +
                    '</div>'
                }
            }]
        });
    })

    btnDelete = (elem) => {
        Swal.fire({
            title: 'Adakah anda pasti?',
            text: 'Data akan dihapuskan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then(function (result) {
            if(result.isConfirmed) {
                Swal.fire({
                    title: 'Sila tunggu sebentar...',
                    didOpen: function() {
                        Swal.showLoading();
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
                                        $('#userDatatable').DataTable().ajax.reload();
                                    });
                                }
                            }
                        })
                    }
                })
            }
        })
    }
</script>
