<script type="text/javascript">
    $(document).ready(function() {
        let baseUrl = "{{ route('users.index') }}";
        let createUrl = "{{ route('users.create') }}";

        $('#userDatatable').DataTable({
            'scrollCollapse': true,
            'pagingType': 'full_numbers',
            'serverSide': true,
            'processing': true,
            'ordering': false,
            dom: '<"row"<"col-md-12"B>><"row"<"col-md-3"l><"col-md-6"><"col-md-3"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            buttons: [{
                    text: 'Tambah',
                    attr:  {
                        "data-action": createUrl,
                        "onClick": "getModalContent(this)",
                    }
                },
                'excel', 'pdf'
            ],
            ajax: {
                url: baseUrl,
                method: 'GET',
                dataType: 'json',
                dataSrc: "data",
            },
            columns: [
                { "data" : "ic_no" },
                { "data" : "name" },
                { "data" : "email" },
                { "data" : "roles[0].name" },
            ],
            columnDefs: [{
                "targets": 4,
                "data": 'id',
                "render": function(id, type, full, meta) {
                    let editUrl = "{{ route('users.edit', 'data-id') }}";
                    let deleteUrl = "{{ route('users.destroy', 'data-id') }}";

                    editUrl = editUrl.replace('data-id', id);
                    deleteUrl = deleteUrl.replace('data-id', id);

                    return '<div class="form-group">' +
                    '<div class="btn-group" role="group">' +
                    '<button type="button" data-action="' + editUrl + '" class="btn btn-icon btn-outline-primary mt-1" onClick="getModalContent(this)"><i class="fa fa-edit"></i></button>' +
                    '<button type="button" data-action="' + deleteUrl + '" class="btn btn-icon btn-outline-danger mt-1" onClick="btnDelete(this)"><i class="fa fa-trash"></i></button>' +
                    '</div>' +
                    '</div>'
                }
            }]
        });
    })
</script>
