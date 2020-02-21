$(document).ready(function () {
    showCPMF();
    showCPMF2();
    $(document).on('click', '.editchild', function () {
            $(document).find('.select').selectpicker();
            $(document).find('.datepicker').datepicker();
        $child_id = $(this).val();
        $child_name = $('#child_name' + $child_id).val();
        $gender2 = $('#gender2' + $child_id).val();
        $mother_name = $('#mother_name' + $child_id).val();
        $mother_education = $('#mother_education' + $child_id).val();
        $mother_occupation = $('#mother_occupation' + $child_id).val();
        $father_name = $('#father_name' + $child_id).val();
        $father_education = $('#father_education' + $child_id).val();
        $father_occupation = $('#father_occupation' + $child_id).val();
        $date_first_seen = $('#date_first_seen' + $child_id).val();
        $birthdate2 = $('#birthdate2' + $child_id).val();
        $birth_weight = $('#birth_weight' + $child_id).val();
        $place_of_delivery = $('#place_of_delivery' + $child_id).val();
        $birth_register_date = $('#birth_register_date' + $child_id).val();
        $purok2 = $('#purok2' + $child_id).val();
        $street_address2 = $('#street_address2' + $child_id).val();
        if (confirm('Are you sure you want to update this patient?')) {
            $.ajax({
                type: "POST",
                url: "action/editchildpatient.php",
                data: {
                    child_id: $child_id,
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
                    edit: 1,
                },
                success: function () {
                    $('#edit_child_patient' + $child_id).modal('hide');
                    $('#alert').slideDown();
                    $('#alerttext').text('Successfully updated Patient');
                    setTimeout(function () {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    $(document).ajaxComplete(function () {
                        $(document).find('.select').selectpicker();
                    });
                    $(document).ajaxComplete(function () {
                        $(document).find('.datepicker').datepicker();
                    });
                    showCPMF();
                }
            });
        }
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
            var table = $('#childpatientmasterfiletable').DataTable({
                "aaSorting": [[1, 'asc']]
            });
        }
    });
}

function showCPMF2() {
    $.ajax({
        url: 'tables/childpatientmasterfiletable2.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#childpatientmasterfileTable2').html(response);
            var table = $('#childpatientmasterfiletable2').DataTable({
                "aaSorting": [[1, 'asc']]
            });
        }
    });
}
