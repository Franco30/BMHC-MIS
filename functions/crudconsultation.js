$(document).ready(function () {
    showPatientConsultation();
//    || $('#pefindings').val() == "" || $('#diagnosis').val() == "" || $('#labrequest').val() == ""
    $(document).on('click', '#addnew', function () {
        if ($('#date_today').val() == "" || $('#weight').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#headfamily').val() == "" || $('#rr').val() == "" || $('#pr').val() == "" || $('#complaints').val() == "") {
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $date_today = $('#date_today').val();
            $weight = $('#weight').val();
            $height = $('#height').val();
            $bp = $('#bp').val();
            $temp = $('#temp').val();
            $headfamily = $('#headfamily').val();
            $rr = $('#rr').val();
            $pr = $('#pr').val();
            $complaints_description = $('#complaints_description').val();
            $pefindings = $('#pefindings').val();
            $diagnosis = $('#diagnosis').val();
            $labrequest = $('#labrequest').val();
            $purok = $('#purok').val();
            $gender = $('#gender').val();
            $age = $('#age').val();

           var complaints = [];

           $('#complaints option:selected').each(function (i) {
               complaints[i] = $(this).val();
           });

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
                        height: $height,
                        bp: $bp,
                        temp: $temp,
                        headfamily: $headfamily,
                        rr: $rr,
                        pr: $pr,
                        complaints: complaints,
                        complaints_description: $complaints_description,
                        pefindings: $pefindings,
                        diagnosis: $diagnosis,
                        labrequest: $labrequest,
                        purok: $purok,
                        gender: $gender,
                        age: $age,
                        add: 1,
                    },
                    success: function () {

                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Consultation Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        console.log($patient_id);
                        console.log($date_today);
                        console.log($weight);
                        console.log($height);
                        console.log($bp);
                        console.log($temp);
                        console.log($headfamily);
                        console.log($rr);
                        console.log($pr);
                        console.log(complaints);
                        console.log($complaints_description);
                        console.log($pefindings);
                         console.log($diagnosis);
                        console.log($labrequest);
                        console.log($purok);
                         console.log($gender);
                        console.log($age);
                        console.log($weight);
//                        setTimeout(function () {
//                            window.location.href = 'consultation';
//                        }, 2500);
                    }
                });
            }
            $('form').trigger('reset');
        }

    });
    
    $(document).on('click', '.updateconsultation', function () {
        $patient_id = $('#patient_id').val();
        $consultation_id = $(this).val();
        $date_today = $('#date_today' + $consultation_id).val();
        $weight = $('#weight' + $consultation_id).val();
        $height = $('#height' + $consultation_id).val();
        $bp = $('#bp' + $consultation_id).val();
        $temp = $('#temp' + $consultation_id).val();
        $headfamily = $('#headfamily' + $consultation_id).val();
        $rr = $('#rr' + $consultation_id).val();
        $pr = $('#pr' + $consultation_id).val();
        $complaints_description = $('#complaints_description' + $consultation_id).val();
        $pefindings = $('#pefindings' + $consultation_id).val();
        $diagnosis = $('#diagnosis' + $consultation_id).val();
        $labrequest = $('#labrequest' + $consultation_id).val();
           var complaints = [];

           $('#complaints option:selected').each(function (i) {
               complaints[i] = $(this).val();
           });

        if (confirm('Are you sure you want to edit this Consultation?')) {
            $.ajax({
                type: "POST",
                url: "action/editconsultation.php",
                cache: false,
                async: false,
                data: {
                    consultation_id: $consultation_id,
                    date_today: $date_today,
                    weight: $weight,
                    height: $height,
                    bp: $bp,
                    temp: $temp,
                    headfamily: $headfamily,
                    rr: $rr,
                    pr: $pr,
                    complaints: complaints,
                    complaints_description: $complaints_description,
                    pefindings: $pefindings,
                    diagnosis: $diagnosis,
                    labrequest: $labrequest,
                    edit: 1,
                },
                success: function () {
                    $('#alert').slideDown();
                    $('#alerttext').text('Successfully updated Consultation Form');
                    setTimeout(function () {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    setTimeout(function () {
                        window.location.href = 'patient_consultation?patient_id=' + $patient_id;
                    }, 2500);
                }
            });
        }
    });
});

function showPatientConsultation() {
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
