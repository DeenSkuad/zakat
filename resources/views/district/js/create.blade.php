<script type="text/javascript">
    $(document).ready(function() {
        $('#state_id').change(function() {
            var stateId = $(this).val();
            var url = "{{ route('cities.by-state', 'data-id') }}";
            url = url.replace('data-id', stateId)

            if(stateId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#city_id').empty();
                        $('#city_id').append('<option value="">Sila Pilih Bandar</option>');
                        $.each(response.data, function(key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#city_id').empty();
                $('#city_id').append('<option value="">Sila Pilih Bandar</option>');
            }
        });
    });

    btnCreate = (elem) => {
        confirmCreate(elem).then((result) => {
            let data = $('form').serialize();
            if (result.isConfirmed) {
                let datatable = $('#userDatatable')
                processCreation(elem, datatable, data)
            }
        })
    }
</script>
