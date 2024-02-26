@if(auth()->user()->hasRole('Admin'))
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
@endif

@if(auth()->user()->hasRole('Penyewa'))
    <script type="text/javascript">
        $(document).ready(function() {
            let baseUrl = "{{ route('tenants.details', auth()->user()->id) }}";
            let createUrl = "{{ route('tenants.create') }}";

            $('#timelineDatatable').DataTable({
                'scrollCollapse': true,
                'pagingType': 'full_numbers',
                'serverSide': false,
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
                columns: [{
                        "data": "asset_name"
                    },
                    {
                        "data": "month",
                        "render": function(month, type, full, meta) {
                            var monthName = moment().month(full.month - 1).format('MMMM');

                            return `${monthName} ${full.year}`
                        }
                    },
                    {
                        "data": "amount",
                        "render": function(amount, type, full, meta) {
                            return `RM${amount}`;
                        }
                    },
                    {
                        "data": "status",
                        "render": function(status, type, full, meta) {
                            if (status == null || status == 0) {
                                return `<span class="badge badge-warning">Belum Dibayar</span>`;
                            } else if (status == 1) {
                                return `<span class="badge badge-success">Sudah Dibayar</span>`;
                            } else if (status == 2) {
                                return `<span class="badge badge-danger">Tunggakan</span>`;
                            }
                        }
                    },
                ],
                columnDefs: [{
                    "targets": 4,
                    "data": 'id',
                    "render": function(id, type, full, meta) {
                        let showUrl = "{{ route('tenants.show', 'data-id') }}";
                        let editUrl = "{{ route('tenants.edit', 'data-id') }}";
                        let deleteUrl = "{{ route('tenants.destroy', 'data-id') }}";

                        showUrl = showUrl.replace('data-id', id);
                        editUrl = editUrl.replace('data-id', id);
                        deleteUrl = deleteUrl.replace('data-id', id);
                        var disabled = '';

                        if(full.status == 1) {
                            disabled = 'disabled';
                        }

                        return '<div class="form-group">' +
                            '<div class="btn-group" role="group">' +
                            '<button type="button" data-action="' + showUrl + '" class="btn btn-icon btn-outline-info mt-1" onClick="getModalContent(this)" ' + disabled + '><i class="fa fa-dollar"></i></button>' +
                            '</div>' +
                            '</div>'
                    }
                }]
            });

            var container = document.getElementById("vistimeline");

            const data = [];
            $.get(baseUrl, async function(response) {
                response.data.forEach(function(item, key) {
                    var monthName = moment().month(item.month - 1).format('MMMM');
                    var dateStr = `${monthName} ${item.year}`;

                    var date = moment(dateStr, "MMMM YYYY");
                    var formattedDate = date.format("YYYY/MM/D");
                    var color = ``;
                    var fontColor = `#000`;

                    if (item.status == null || item.status == 0) {
                        color = `#ffff00`;
                    } else if (item.status == 1) {
                        color = `#33cc33`;
                    } else if (item.status == 2) {
                        color = `#ff0000`;
                    }

                    data.push({
                        id: ++key,
                        content: item.asset_name,
                        start: formattedDate,
                        style: 'background-color: ' + color + '; color: ' + fontColor
                    });
                });

                console.log(data);

                var items = new vis.DataSet(data);
                var options = {};
                var timeline = new vis.Timeline(container, items, options);
            });
        })
    </script>
@endif
