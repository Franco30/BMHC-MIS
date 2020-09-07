$(document).ready(function () {
    showPatient();

    //check availability of patient name

    //add patient ajax
    $(document).on('click', '#addnew', function () {
        if ($('#patient_name').val() == "" || $('#age').val() == "" || $('#gender').val() == "" || $('#civilstatus').val() == "" || $('#birthdate').val() == "" || $('#purok').val() == "" || $('#height').val() == "" || $('#weight').val() == "" || $('#contact_no').val() == "" || $('#region_province').val() == "" || $('#contact_person').val() == "" || $('#emergency_no').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $patient_name = $('#patient_name').val();
            $birthdate = $('#birthdate').val();
            $age = $('#age').val();
            $gender = $('#gender').val();
            $civilstatus = $('#civilstatus').val();
            $streetaddress = $('#streetaddress').val();
            $purok = $('#purok').val();
            $height = $('#height').val();
            $weight = $('#height').val();
            $contact_no = $('#contact_no').val();
            $region_province = $('#region_province').val();
            $occupation = $('#occupation').val();
            $philhealth_no = $('#philhealth_no').val();
            $contact_person = $('#contact_person').val();
            $emergency_no = $('#emergency_no').val();

            if (confirm('Are you sure you want to add this new patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addpatient.php",
                    cache: false,
                    async: false,
                    data: {
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
                        add: 1,
                    },
                    success: function () {
                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        $('#new_patient').modal('hide');
                        showPatient();
                    }
                });
            }
            $('form').trigger('reset');
            $('#gender').selectpicker('refresh');
            $('#civilstatus').selectpicker('refresh');
            $('#purok').selectpicker('refresh');
        }

    });
});

    $(document).on('click', '#cancel', function () {
            $('#purok').selectpicker('refresh');
            $('form').trigger('reset');
            $('#gender').selectpicker('refresh');
            $('#civilstatus').selectpicker('refresh');
    });

function showPatient() {
    $.ajax({
        url: 'tables/patienttable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#patientTable').html(response);
            var table = $('#patienttable').DataTable();
            $(document).ready(function () {
//                $('#patienttable').DataTable({
//                    order: [
//                    [1, 'desc']
//                ]
//                });
            });
        }
    });
}
