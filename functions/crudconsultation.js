$(document).ready(function () {
    showPatient();
    $(document).on('click', '#addnew', function () {
        if ($('#date_today').val() == "" || $('#weight').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#headfamily').val() == "" || $('#rr').val() == "" || $('#pr').val() == "" || $('#complaints').val() == "" || $('#pefindings').val() == "" || $('#diagnosis').val() == "" || $('#labrequest').val() == "") {
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $date_today = $('#date_today').val();
            $weight = $('#weight').val();
            $bp = $('#bp').val();
            $temp = $('#temp').val();
            $headfamily = $('#headfamily').val();
            $rr = $('#rr').val();
            $pr = $('#pr').val();
            $complaints = $('#complaints').val();
            $pefindings = $('#pefindings').val();
            $diagnosis = $('#diagnosis').val();
            $labrequest = $('#labrequest').val();

//            var complaints = [];
//
//            $('#complaints option:selected').each(function (i) {
//                complaints[i] = $(this).val();
//            });

            if (confirm('Are you sure you want to add this patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addconsultation.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        date_today: $date_today,
                        weight: $weight,
                        bp: $bp,
                        temp: $temp,
                        headfamily: $headfamily,
                        rr: $rr,
                        pr: $pr,
                        complaints: $complaints,
                        pefindings: $pefindings,
                        diagnosis: $diagnosis,
                        labrequest: $labrequest,
                        add: 1,
                    },
                    success: function () {

                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Consultation Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'consultation';
                        }, 2500);
                    }
                });
            }
            $('form').trigger('reset');
        }

    });
});

function showPatient() {
    $.ajax({
        url: 'tables/consultation_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#consultationpatientTable').html(response);
            var table = $('#consultationpatienttable').DataTable();
        }
    });
}
