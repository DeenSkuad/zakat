<script type="text/javascript">
    btnUpdate = (elem) => {
        confirmUpdate(elem).then((result) => {
            let data = $('form').serialize();

            if (result.isConfirmed) {
                let datatable = $('#userDatatable')
                processUpdation(elem, datatable, data)
            }
        })
    }
</script>
