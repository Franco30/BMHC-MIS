$(document).ready(function () {
    showCPatient();

    //check availability of patient name
//|| $('#street_address2').val() == ""
    //add patient ajax
    $(document).on('click', '#addnewchild', function () {
        if ($('#child_name').val() == "" || $('#gender2').val() == "" || $('#mother_name').val() == "" || $('#mother_education').val() == "" || $('#mother_occupation').val() == "" || $('#father_name').val() == "" || $('#father_education').val() == "" || $('#father_occupation').val() == "" || $('#date_first_seen').val() == "" || $('#birthdate2').val() == "" || $('#birth_weight').val() == "" || $('#place_of_delivery').val() == "" || $('#birth_register_date').val() == "" || $('#purok2').val() == "") {
            $('#modallabel2').slideDown();
            $('#checkfield2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel2').fadeOut('slow');
            }, 3500);
        } else {
            $child_name = $('#child_name').val();
            $gender2 = $('#gender2').val();
            $mother_name = $('#mother_name').val();
            $mother_education = $('#mother_education').val();
            $mother_occupation = $('#mother_occupation').val();
            $father_name = $('#father_name').val();
            $father_education = $('#father_education').val();
            $father_occupation = $('#father_occupation').val();
            $date_first_seen = $('#date_first_seen').val();
            $birthdate2 = $('#birthdate2').val();
            $birth_weight = $('#birth_weight').val();
            $place_of_delivery = $('#place_of_delivery').val();
            $birth_register_date = $('#birth_register_date').val();
            $purok2 = $('#purok2').val();
            $street_address2 = $('#street_address2').val();

            if (confirm('Are you sure you want to add this new patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addchildpatient.php",
                    cache: false,
                    async: false,
                    data: {
                        child_name: $child_name,
                        gender2: $gender2,
                        mother_name: $mother_name,
                        mother_education: $mother_education,
                        mother_occupation: $mother_occupation,
                        father_name: $father_name,
                        father_education: $father_education,
                        father_occupation: $father_occupation,
                        date_first_seen: $date_first_seen,
                        birthdate2: $birthdate2,
                        birth_weight: $birth_weight,
                        place_of_delivery: $place_of_delivery,
                        birth_register_date: $birth_register_date,
                        purok2: $purok2,
                        street_address2: $street_address2,
                        add: 1,
                    },
                    success: function () {
                        $('#new_child_patient').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showCPatient();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });
});

    $(document).on('click', '#cancel2', function () {
            $('#purok2').selectpicker('refresh');
            $('form').trigger('reset');
            $('#gender2').selectpicker('refresh');
    });

function showCPatient() {
    $.ajax({
        url: 'tables/childpatienttable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#childpatientTable').html(response);
            var table = $('#childpatienttable').DataTable();
        }
    });
}
