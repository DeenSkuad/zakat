<script type="text/javascript">
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
