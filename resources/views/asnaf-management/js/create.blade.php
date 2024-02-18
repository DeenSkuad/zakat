<script type="text/javascript">
    $(document).ready(function() {
        $('#state_id').change(function() {
            var stateId = $(this).val();
            var url = "{{ route('districts.by-state', 'data-id') }}";
            url = url.replace('data-id', stateId)

            if (stateId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#district_id').empty();
                        $('#district_id').append(
                            '<option value="">Sila Pilih Mukim</option>');
                        $.each(response.data, function(key, value) {
                            $('#district_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#district_id').empty();
                $('#district_id').append('<option value="">Sila Pilih Mukim</option>');
            }
        });

        $('#district_id').change(function() {
            var districtId = $(this).val();
            var url = "{{ route('kariahs.by-district', 'data-id') }}";
            url = url.replace('data-id', districtId)

            if (districtId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#postcode').empty();
                        $('#postcode').append(
                            '<option value="">Sila Pilih Poskod</option>');
                        $.each(response.data, function(key, value) {
                            $('#postcode').append('<option value="' + value.id + '">' + value.name + ' | ' + value.postcode + '</option>');
                        });
                    }
                });
            } else {
                $('#postcode').empty();
                $('#postcode').append('<option value="">Sila Pilih Poskod</option>');
            }
        });

        $('#postcode').change(function() {
            var districtId = $(this).val();
            var url = "{{ route('kariahs.by-district', 'data-id') }}";
            url = url.replace('data-id', districtId)

            if (districtId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#kariah_id').empty();
                        $('#kariah_id').append(
                            '<option value="">Sila Pilih Kariah</option>');
                        $.each(response.data, function(key, value) {
                            $('#kariah_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#kariah_id').empty();
                $('#kariah_id').append('<option value="">Sila Pilih Kariah</option>');
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
