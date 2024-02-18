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
            formData.append('name', $("#name").val());
            formData.append('ic_no', $("#ic_no").val());
            formData.append('disease_id', $("#disease_id").val());
            formData.append('disease_background', $("#disease_background").val());
            formData.append('prescription_id', $("#prescription_id").val());
            formData.append('treatment_period', $("#treatment_period").val());
            formData.append('medical_tool', $("#medical_tool").val());
            formData.append('frequency', $("#frequency").val());
            formData.append('attachment', $("#attachment")[0].files[0]);
            formData.append('heir_name', $("#heir_name").val());
            formData.append('her_ic_no', $("#her_ic_no").val());
            formData.append('service_id', $("#service_id").val());
            formData.append('kariah_id', $("#kariah_id").val());
            formData.append('user_id', $("#user_id").val());

            if (result.isConfirmed) {
                let datatable = $('#userDatatable')
                processCreationWithImage(elem, datatable, formData)
            }
        })
    }
</script>
