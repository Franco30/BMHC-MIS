$(document).ready(function () {
    //add patient ajax
    $(document).on('click', '#addnew', function () {
        if ($('#nutritional_status').val() == "" || $('#medical_history').val() == "" || $('#date').val() == "" || $('#temp').val() == "" || $('#rr').val() == "" || $('#bp').val() == "" || $('#weight').val() == "" || $('#complaints').val() == "" || $('#diagnosis').val() == "" || $('#plan_of_action').val() == "" || $('#remarks').val() == "") {

            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 2500);

        } else {

            $child_id = $('#child_id').val();
            $immunization_id = $('#immunization_id').val();
            $nutritional_status = $('#nutritional_status').val();
            $medical_history = $('#medical_history').val();
            $date = $('#date').val();
            $temp = $('#temp').val();
            $rr = $('#rr').val();
            $bp = $('#bp').val();
            $weight = $('#weight').val();
            $complaints = $('#complaints').val();
            $diagnosis = $('#diagnosis').val();
            $plan_of_action = $('#plan_of_action').val();
            $remarks = $('#remarks').val();

            if (confirm('Are you sure you want to add this patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addimmunizationconsultation.php",
                    cache: false,
                    async: false,
                    data: {
                        child_id: $child_id,
                        immunization_id: $immunization_id,
                        nutritional_status: $nutritional_status,
                        medical_history: $medical_history,
                        date: $date,
                        temp: $temp,
                        rr: $rr,
                        bp: $bp,
                        weight: $weight,
                        complaints: $complaints,
                        diagnosis: $diagnosis,
                        plan_of_action: $plan_of_action,
                        remarks: $remarks,
                        add: 1,
                    },
                    success: function () {
                            $('#add_consultation').modal('hide');
                            $('#alert').slideDown();
                            $('#alerttext').text('Consultation Added Successfully!');
                            setTimeout(function () {
                                $('#alert').fadeOut('slow');
                            }, 1500);
                            setTimeout(function () {
                                window.location.href = 'immunization_consultation?child_id=' + $child_id + '&&immunization_id=' + $immunization_id;
                            }, 2500);
                    }
                });
            }
            $('form').trigger('reset');
        }

    });

    $(document).on('click', '#cancel2', function () {
        $("#treatment_type").val('default');
        $('#treatment_type').selectpicker('refresh');
    });
});

function showPatient() {
    $.ajax({
        url: 'tables/immunization_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#immunizationpatientTable').html(response);
            var table = $('#immunizationpatienttable').DataTable();
        }
    });
}
