<script type="text/javascript">
    $(document).ready(function() {
        var stateId = $("#state_id").val();
        var url = "{{ route('districts.by-state', 'data-id') }}";
        url = url.replace('data-id', stateId)
        var districtId = "{{ $user->asnaf->district_id }}";

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#district_id').empty();
                $('#district_id').append(
                    '<option value="">Sila Pilih Mukim</option>');
                $.each(response.data, function(key, value) {
                    if(districtId == value.id) {
                        $('#district_id').append('<option value="' + value.id + '" selected>' + value.name + '</option>');
                    } else {
                        $('#district_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    }
                });
            }
        });

        var url = "{{ route('kariahs.by-district', 'data-id') }}";
        url = url.replace('data-id', districtId)

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#postcode').empty();
                $('#postcode').append(
                    '<option value="">Sila Pilih Poskod</option>');
                $.each(response.data, function(key, value) {
                    if(districtId == value.id) {
                        $('#postcode').append('<option value="' + value.id + '" selected>' + value.name + ' | ' + value.postcode + '</option>');
                    } else {
                        $('#postcode').append('<option value="' + value.id + '">' + value.name + ' | ' + value.postcode + '</option>');
                    }

                });
            }
        });


        var districtId = $("#district_id").val();
        var url = "{{ route('kariahs.by-district', 'data-id') }}";
        url = url.replace('data-id', districtId)
        var asnafKariahId = "{{ $user->asnaf->kariah_id }}";

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#kariah_id').empty();
                $('#kariah_id').append(
                    '<option value="">Sila Pilih Kariah</option>');
                $.each(response.data, function(key, value) {
                    if(asnafKariahId == value.id) {
                        $('#kariah_id').append('<option value="' + value.id + '" selected>' + value.name + '</option>');
                    } else {
                        $('#kariah_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    }
                });
            }
        });
    });
</script>
