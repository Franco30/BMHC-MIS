$(document).ready(function () {
    show_follow_up_prenatal();
    show_follow_up_familyplanning();

    $(document).on('click', '#add_fp_follow_up', function () {
        if ($('#patient').val() == "" || $('#date_given').val() == "" || $('#method').val() == "" || $('#units').val() == "" || $('#remarks2').val() == "" || $('#provider').val() == "" || $('#next_service_date').val() == "") {
            $('#modallabel2').slideDown();
            $('#checkfield2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel2').fadeOut('slow');
            }, 3500);
        } else {
            $patient = $('#patient').val();
            $date_given = $('#date_given').val();
            $method = $('#method').val();
            $units = $('#units').val();
            $remarks2 = $('#remarks2').val();
            $provider = $('#provider').val();
            $next_service_date = $('#next_service_date').val();

            //            if (confirm('Are you sure you want to add this new follow-up date?')) {
            Swal.fire({
                title: 'Are you sure you want to add this new follow-up date?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/add_fp_follow_up.php",
                        cache: false,
                        async: false,
                        data: {
                            patient: $patient,
                            date_given: $date_given,
                            method: $method,
                            units: $units,
                            remarks2: $remarks2,
                            provider: $provider,
                            next_service_date: $next_service_date,
                            add: 1,
                        },
                        success: function () {
                            $('#fp_follow_up').modal('hide');
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Follow-up date!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Successfully added new Follow-up date!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $(document).ajaxComplete(function () {
                                $(document).find('.select').selectpicker();
                            });
                            $(document).ajaxComplete(function () {
                                $(document).find('.datepicker').datepicker({
                                    format: 'yyyy-mm-dd',
                                    language: 'en'
                                });
                            });
                            show_follow_up_familyplanning();
                        }

                    });

                }
            });
            $('form').trigger('reset');
            $('#patient').selectpicker('refresh');
            $('#method').selectpicker('refresh');
            $('#provider').selectpicker('refresh');
        }

    });

    $(document).on('click', '#cancel', function () {
        $('#patient').selectpicker('refresh');
        $('form').trigger('reset');
        $('#method').selectpicker('refresh');
        $('#provider').selectpicker('refresh');
    });

    $(document).on('click', '.edit_fp_follow_up', function () {
        $fp_follow_up_id = $(this).val();
        $patient = $('#patient' + $fp_follow_up_id).val();
        $date_given = $('#date_given' + $fp_follow_up_id).val();
        $method = $('#method' + $fp_follow_up_id).val();
        $units = $('#units' + $fp_follow_up_id).val();
        $remarks2 = $('#remarks2' + $fp_follow_up_id).val();
        $provider = $('#provider' + $fp_follow_up_id).val();
        $next_service_date = $('#next_service_date' + $fp_follow_up_id).val();
        $status = $('#status' + $fp_follow_up_id).val();
        //        if (confirm('Are you sure you want to edit this follow-up?')) {
        Swal.fire({
            title: 'Are you sure you want to edit this follow-up?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/editfpfollowup.php",
                    cache: false,
                    async: false,
                    data: {
                        fp_follow_up_id: $fp_follow_up_id,
                        patient: $patient,
                        date_given: $date_given,
                        method: $method,
                        units: $units,
                        remarks2: $remarks2,
                        provider: $provider,
                        next_service_date: $next_service_date,
                        status: $status,
                        edit: 1,
                    },
                    success: function () {
                        //                    $('#alert').slideDown();
                        //                    $('#alerttext').text('Successfully updated Follow-up Schedule!');
                        //                    setTimeout(function () {
                        //                        $('#alert').fadeOut('slow');
                        //                    }, 1500);

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully updated Follow-up Schedule!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find('.datepicker').datepicker({
                                format: 'yyyy-mm-dd',
                                language: 'en'
                            });
                        });
                        show_follow_up_familyplanning();
                    }
                });

            }
        });
    });

    $(document).on('click', '#cancel22', function () {
        $('#patient2').selectpicker('refresh');
        $('form').trigger('reset');
    });

    $(document).on('click', '#add_prenatal_follow_up', function () {
        if ($('#patient2').val() == "" || $('#follow_up_date_time').val() == "" || $('#remarks3').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $patient2 = $('#patient2').val();
            $follow_up_date_time = $('#follow_up_date_time').val();
            $remarks3 = $('#remarks3').val();

            function random() {
                colors = ['#ca1c1c', '#ffbe76', '#ff7979', '#eb4d4b', '#f0870f', '#22a6b3', '#6ab04c', 'red']
                return colors[Math.floor(Math.random() * colors.length)];
            }

            //            if (confirm('Are you sure you want to add this new follow-up date?')) {
            Swal.fire({
                title: 'Are you sure you want to add this new follow-up date?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/add_p_follow_up.php",
                        cache: false,
                        async: false,
                        data: {
                            patient2: $patient2,
                            follow_up_date_time: $follow_up_date_time,
                            remarks3: $remarks3,
                            color: random(),
                            add: 1,
                        },
                        success: function () {
                            $('#p_follow_up').modal('hide');
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Follow-up date!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Successfully added new Follow-up date!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $(document).ajaxComplete(function () {
                                $(document).find('.select').selectpicker();
                            });
                            $(document).ajaxComplete(function () {
                                $(document).find(".datetimepicker2").datetimepicker();
                            });
                            show_follow_up_prenatal();
                        }

                    });

                }
            });
            $('form').trigger('reset');
        }

    });

    $(document).on('click', '.edit_prenatal_follow_up', function () {
        $follow_up_id = $(this).val();
        $patient2 = $('#patient2' + $follow_up_id).val();
        $follow_up_date_time2 = $('#follow_up_date_time2' + $follow_up_id).val();
        $remarks = $('#remarks' + $follow_up_id).val();
        $status2 = $('#status2' + $follow_up_id).val();
        //        if (confirm('Are you sure you want to edit this follow-up?')) {
        Swal.fire({
            title: 'Are you sure you want to edit this follow-up?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/editprenatalfollowup.php",
                    cache: false,
                    async: false,
                    data: {
                        follow_up_id: $follow_up_id,
                        patient2: $patient2,
                        follow_up_date_time2: $follow_up_date_time2,
                        remarks: $remarks,
                        status2: $status2,
                        edit: 1,
                    },
                    success: function () {
                        //                    $('#alert').slideDown();
                        //                    $('#alerttext').text('Successfully updated Follow-up Schedule!');
                        //                    setTimeout(function () {
                        //                        $('#alert').fadeOut('slow');
                        //                    }, 1500);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully updated Follow-up Schedule!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find(".datetimepicker2").datetimepicker();
                        });
                        show_follow_up_prenatal();
                    }
                });

            }
        });
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
            var table = $('#followuptable').DataTable({
                "aaSorting": [[4, 'desc']]
            });
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
            var table = $('#fpfollowuptable').DataTable({
                "aaSorting": [[4, 'desc']]
            });
        }
    });
}
