$(document).ready(function () {
    showPMF();
    $(document).on('click', '.updatepatient', function () {
        $patient_id = $(this).val();
        $patient_name = $('#patient_name' + $patient_id).val();
        $birthdate = $('#birthdate' + $patient_id).val();
        $age = $('#age' + $patient_id).val();
        $gender = $('#gender' + $patient_id).val();
        $civilstatus = $('#civilstatus' + $patient_id).val();
        $streetaddress = $('#streetaddress' + $patient_id).val();
        $purok = $('#purok' + $patient_id).val();
        $height = $('#height' + $patient_id).val();
        $weight = $('#weight' + $patient_id).val();
        $contact_no = $('#contact_no' + $patient_id).val();
        $region_province = $('#region_province' + $patient_id).val();
        $occupation = $('#occupation' + $patient_id).val();
        $philhealth_no = $('#philhealth_no' + $patient_id).val();
        $contact_person = $('#contact_person' + $patient_id).val();
        $emergency_no = $('#emergency_no' + $patient_id).val();
        $status = $('#status' + $patient_id).val();
        //        if (confirm('Are you sure you want to update this patient?')) {
        $.ajax({
            type: "POST",
            url: "action/editpatient.php",
            cache: false,
            async: false,
            data: {
                patient_id: $patient_id,
                patient_name: $patient_name,
                birthdate: $birthdate,
                age: $age,
                gender: $gender,
                civilstatus: $civilstatus,
                streetaddress: $streetaddress,
                purok: $purok,
                height: $height,
                weight: $weight,
                contact_no: $contact_no,
                region_province: $region_province,
                occupation: $occupation,
                philhealth_no: $philhealth_no,
                contact_person: $contact_person,
                emergency_no: $emergency_no,
                status: $status,
                edit: 1,
            },
            success: function () {
                $('#edit_patient' + $patient_id).modal('hide');
                $('#alert').slideDown();
                $('#alerttext').text('Successfully updated Patient Profile');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1000);
                setTimeout(function () {
                    $('#edit_patient').modal('hide');
                }, 2000);
                setTimeout(function () {
                    window.location.href = 'master_file_patient';
                }, 2500);
                $(document).ajaxComplete(function () {
                    $(document).find('.select').selectpicker();
                });
                $(document).ajaxComplete(function () {
                    $(document).find('.datepicker').datepicker();
                });
                showPMF();
            }
        });
        //        }
        //                $('form').trigger('reset');
    });
});

function showPMF() {
    $.ajax({
        url: 'tables/patientmasterfiletable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#patientmasterfileTable').html(response);
            var table = $('#patientmasterfiletable').DataTable({
                "aaSorting": [[1, 'asc']]
            });
            }
    });
}

//beforeSend: function () {
//    return confirm("Are you sure?");
//},
