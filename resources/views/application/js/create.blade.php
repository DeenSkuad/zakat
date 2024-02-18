<script type="text/javascript">
    $(document).ready(function() {
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_basic");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    });

    btnCreate = (elem) => {
        confirmCreate(elem).then((result) => {
            let formData = new FormData();
            formData.append('service_id', $("#service_id").val());
            formData.append('kariah_id', $("#kariah_id").val());
            formData.append('user_id', $("#user_id").val());
            formData.append('attachment', $("#attachment")[0].files[0]);

            if (result.isConfirmed) {
                let datatable = $('#userDatatable')
                processCreationWithImage(elem, datatable, formData)
            }
        })
    }
</script>
