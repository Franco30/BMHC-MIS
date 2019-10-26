$(document).ready(function () {
    show_follow_up_prenatal();
    show_follow_up_familyplanning();

    $(document).on('click', '#add_fp_follow_up', function () {
        if ($('#date_given').val() == "" || $('#method').val() == "" || $('#units').val() == "" || $('#remarks2').val() == "" || $('#provider').val() == "" || $('#next_service_date').val() == "") {
            $('#modallabel2').slideDown();
            $('#checkfield2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $patient_name = $('#patient_name').val();
            $date_given = $('#date_given').val();
            $method = $('#method').val();
            $units = $('#units').val();
            $remarks2 = $('#remarks2').val();
            $provider = $('#provider').val();
            $next_service_date = $('#next_service_date').val();

            if (confirm('Are you sure you want to add this new follow-up date?')) {
                $.ajax({
                    type: "POST",
                    url: "action/add_fp_follow_up.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        patient_name: $patient_name,
                        date_given: $date_given,
                        method: $method,
                        units: $units,
                        remarks2: $remarks2,
                        provider: $provider,
                        next_service_date: $next_service_date,
                        add: 1,
                    },
                    success: function () {
                        $('#fp_follow_up' + $patient_id).modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Follow-up date!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find('.datepicker').datepicker();
                        });
                        show_follow_up_familyplanning();
                    }

                });
            }
            $('form').trigger('reset');
        }

    });

    $(document).on('click', '#add_prenatal_follow_up', function () {
        if ($('#follow_up_date_time').val() == "" || $('#remarks3').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $patient_name = $('#patient_name').val();
            $follow_up_date_time = $('#follow_up_date_time').val();
            $remarks3 = $('#remarks3').val();

            if (confirm('Are you sure you want to add this new follow-up date?')) {
                $.ajax({
                    type: "POST",
                    url: "action/add_fp_follow_up.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        patient_name: $patient_name,
                        date_given: $date_given,
                        remarks2: $remarks3,
                        add: 1,
                    },
                    success: function () {
                        $('#follow_up' + $patient_id).modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Follow-up date!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find('.datetimepicker').datetimepicker();
                        });
                        show_follow_up_prenatal();
                    }

                });
            }
            $('form').trigger('reset');
        }

    });
});

function show_follow_up_prenatal() {
    $.ajax({
        url: 'tables/prenatal_follow_up_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#prenatalfollowupTable').html(response);
        }
    });
}


function show_follow_up_familyplanning() {
    $.ajax({
        url: 'tables/fp_follow_up_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#fpfollowupTable').html(response);
            var table = $('#fpfollowuptable').DataTable();
        }
    });
}
