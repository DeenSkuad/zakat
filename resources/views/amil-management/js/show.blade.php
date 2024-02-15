<script type="text/javascript">
    $(document).ready(function() {
        var stateId = $("#state_id").val();
        var url = "{{ route('cities.by-state', 'data-id') }}";
        url = url.replace('data-id', stateId)

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#city_id').empty();
                $('#city_id').append('<option value="">Sila Pilih Bandar</option>');
                $.each(response.data, function(key, value) {
                    if(stateId == value.state_id) {
                        $('#city_id').append('<option value="' + value.id + '" selected>' + value.name + '</option>');
                    } else {
                        $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    }
                });
            }
        });
    });
</script>
