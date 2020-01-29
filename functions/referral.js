$(document).ready(function () {
    showPatient();

    $(document).on('click', '#addnew', function () {
        if ($('#date').val() == "" || $('#weight').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#age').val() == "" || $('#complaints').val() == "" || $('#from').val() == "" || $('#to').val() == "" || $('#origin').val() == "" || $('#destination').val() == "" || $('#referred_by').val() == "" || $('#gender').val() == "") {
            $('#modallabel33').slideDown();
            $('#checkfield33').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel33').fadeOut('slow');
            }, 3500);
        } else {
            $date = $('#date').val();
            $patient_name = $('#patient_name').val();
            $registered = $('#registered').val();
            $gender = $('#gender').val();
            $weight = $('#weight').val();
            $bp = $('#bp').val();
            $temp = $('#temp').val();
            $age = $('#age').val();
            $complaints = $('#complaints').val();
            $from = $('#from').val();
            $to = $('#to').val();
            $origin = $('#origin').val();
            $destination = $('#destination').val();
            $referred_by = $('#referred_by').val();
//            $designation = $('#designation').val();

            if (confirm('Are you sure you want to add this new Referral?')) {
                $.ajax({
                    type: "POST",
                    url: "action/add_referral.php",
                    cache: false,
                    async: false,
                    data: {
                        date: $date,
                        patient_name: $patient_name,
                        registered: $registered,
                        gender: $gender,
                        weight: $weight,
                        bp: $bp,
                        temp: $temp,
                        age: $age,
                        complaints: $complaints,
                        from: $from,
                        to: $to,
                        origin: $origin,
                        destination: $destination,
                        referred_by: $referred_by,
//                        designation: $designation,
                        add: 1,
                    },
                    success: function () {
                        $('#addreferral').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Referral!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find('.datepicker').datepicker();
                        });
                        showPatient();
                    }

                });
            }
            $('form').trigger('reset');
        }

    });
    
    $(document).on('click', '.updatereferral', function () {
        
        $referral_id = $(this).val();
        $date = $('#date' + $referral_id).val();
        $patient_name = $('#patient_name' + $referral_id).val();
        $gender = $('#gender' + $referral_id).val();
        $weight = $('#weight' + $referral_id).val();
        $bp = $('#bp' + $referral_id).val();
        $temp = $('#temp' + $referral_id).val();
        $age = $('#age' + $referral_id).val();
        $complaints = $('#complaints' + $referral_id).val();
        $to = $('#to' + $referral_id).val();
        $destination = $('#destination' + $referral_id).val();
        $referred_by = $('#referred_by' + $referral_id).val();

        if (confirm('Are you sure you want to edit this Referral Form?')) {
            $.ajax({
                type: "POST",
                url: "action/editreferral.php",
                cache: false,
                async: false,
                data: {
                    referral_id: $referral_id,
                    date: $date,
                    patient_name: $patient_name,
                    gender: $gender,
                    weight: $weight,
                    bp: $bp,
                    temp: $temp,
                    age: $age,
                    complaints: $complaints,
                    to: $to,
                    destination: $destination,
                    referred_by: $referred_by,
                    edit: 1,
                },
                success: function () {
                    console.log($referred_by);
                    $('#alert').slideDown();
                    $('#alerttext').text('Successfully updated Referral Record');
                    setTimeout(function () {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    $(document).ajaxComplete(function () {
                        $(document).find('.select').selectpicker();
                    });
                    $(document).ajaxComplete(function () {
                        $(document).find('.datepicker').datepicker();
                    });
                    $(document).ajaxComplete(function () {
                        $(document).find('.mask_bp').mask('999/99');
                        $(document).find('.mask_temp').mask('99.9');
                    });
                    showPatient();
                }
            });
        }
    });
});


function showPatient() {
    $.ajax({
        url: 'tables/referral_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#referralpatientTable').html(response);
            var table = $('#referralpatienttable').DataTable();
        }
    });
}
