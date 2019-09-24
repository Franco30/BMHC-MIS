$(document).ready(function () {
    showCPMF();
    $(document).on('click', '.updatepatient', function () {
        $patient_id = $(this).val();
        $patient_name = $('#patient_name' + $patient_id).val();
        $age = $('#age' + $patient_id).val();
        $gender = $('#gender' + $patient_id).val();
        $address = $('#address' + $patient_id).val();
        $birthdate = $('#birthdate' + $patient_id).val();
        $heigth = $('#height' + $patient_id).val();
        $contact_no = $('#contact_no' + $patient_id).val();
        $region_province = $('#region_province' + $patient_id).val();
        $occupation = $('#occupation' + $patient_id).val();
        $philhealth_no = $('#philhealth_no' + $patient_id).val();
        $contact_person = $('#contact_person' + $patient_id).val();
        $emergency_no = $('#emergency_no' + $patient_id).val();
        $.ajax({
            type: "POST",
            url: "action/editpatient.php",
            data: {
                patient_id: $patient_id,
                patient_name: $patient_name,
                age: $age,
                gender: $gender,
                address: $address,
                birthdate: $birthdate,
                height: $heigth,
                contact_no: $contact_no,
                region_province: $region_province,
                occupation: $occupation,
                philhealth_no: $philhealth_no,
                contact_person: $contact_person,
                emergency_no: $emergency_no,
                edit: 1,
            },
            success: function () {
                $('#alert').slideDown();
                $('#alerttext').text('Successfully updated Patient');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showPMF();
            }
        });
    });
});

function showCPMF() {
    $.ajax({
        url: 'tables/childpatientmasterfiletable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#childpatientmasterfileTable').html(response);
            var table = $('#childpatientmasterfiletable').DataTable();
        }
    });
}
