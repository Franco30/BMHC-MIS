$(document).ready(function () {
    showPP();

    $(document).on('click', '#addnew2', function () {
        if ($('#date2').val() == "" || $('#from2').val() == "" || $('#to2').val() == "" || $('#origin2').val() == "" || $('#destination2').val() == "" || $('#weight2').val() == "" || $('#bp2').val() == "" || $('#temp2').val() == "" || $('#age2').val() == "" || $('#complaints2').val() == "" || $('#gravida').val() == "" || $('#para').val() == "" || $('#fh').val() == "" || $('#fhb').val() == "" || $('#tt').val() == "" || $('#given').val() == "" || $('#referred_by2').val() == "") {
            $('#modallabel3').slideDown();
            $('#checkfield3').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel3').fadeOut('slow');
            }, 3500);
        } else {
            $date2 = $('#date2').val();
            $from2 = $('#from2').val();
            $to2 = $('#to2').val();
            $origin2 = $('#origin2').val();
            $destination2 = $('#destination2').val();
            $patient_name2 = $('#patient_name2').val();
            $registered2 = $('#registered2').val();
            $weight2 = $('#weight2').val();
            $bp2 = $('#bp2').val();
            $temp2 = $('#temp2').val();
            $age2 = $('#age2').val();
            $complaints2 = $('#complaints2').val();
            $gravida = $('#gravida').val();
            $para = $('#para').val();
            $fh = $('#fh').val();
            $fhb = $('#fhb').val();
            $tt = $('#tt').val();
            $given = $('#given').val();
            $referred_by2 = $('#referred_by2').val();
            //            $designation2 = $('#designation2').val();

            //            if (confirm('Are you sure you want to add this new Prenatal Referral?')) {
            Swal.fire({
                title: 'Are you sure you want to add this new Prenatal Referral?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/add_referral_prenatal.php",
                        cache: false,
                        async: false,
                        data: {
                            date2: $date2,
                            from2: $from2,
                            to2: $to2,
                            origin2: $origin2,
                            destination2: $destination2,
                            patient_name2: $patient_name2,
                            registered2: $registered2,
                            weight2: $weight2,
                            bp2: $bp2,
                            temp2: $temp2,
                            age2: $age2,
                            complaints2: $complaints2,
                            gravida: $gravida,
                            para: $para,
                            fh: $fh,
                            fhb: $fhb,
                            tt: $tt,
                            given: $given,
                            referred_by2: $referred_by2,
                            //                        designation2: $designation2,
                            add: 1,
                        },
                        success: function () {
                            $('#prenatalreferral').modal('hide');
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Referral!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Successfully added new Referral!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $(document).ajaxComplete(function () {
                                $(document).find('.select').selectpicker();
                            });
                            //                        $(document).ajaxComplete(function () {
                            //                            $(document).find('.datepicker').datepicker({
                            //                                format: 'MM dd, yyyy',
                            //                                language: 'en'
                            //                            });
                            //                        });
                            $('form').trigger('reset');
                            showPP();
                        }

                    });

                }
            });
            $('form').trigger('reset');
            $('#referred_by2').selectpicker('refresh');
            $('#patientcategory2').selectpicker('refresh');
            $('#registered2').selectpicker('refresh');
            $('#tt').selectpicker('refresh');
        }

    });

    $(document).on('click', '#cancel2', function () {
        $('form').trigger('reset');
        $('#referred_by2').selectpicker('refresh');
        $('#patientcategory2').selectpicker('refresh');
        $('#registered2').selectpicker('refresh');
        $('#tt').selectpicker('refresh');
    });

    $(document).on('click', '.updateprenatalreferral', function () {

        $referral_id2 = $(this).val();
        $date2 = $('#date2' + $referral_id2).val();
        $to2 = $('#to2' + $referral_id2).val();
        $destination2 = $('#destination2' + $referral_id2).val();
        $patient_name2 = $('#patient_name2' + $referral_id2).val();
        $weight2 = $('#weight2' + $referral_id2).val();
        $bp2 = $('#bp2' + $referral_id2).val();
        $temp2 = $('#temp2' + $referral_id2).val();
        $age2 = $('#age2' + $referral_id2).val();
        $complaints2 = $('#complaints2' + $referral_id2).val();
        $gravida = $('#gravida' + $referral_id2).val();
        $para = $('#para' + $referral_id2).val();
        $fh = $('#fh' + $referral_id2).val();
        $fhb = $('#fhb' + $referral_id2).val();
        $tt = $('#tt' + $referral_id2).val();
        $given = $('#given' + $referral_id2).val();
        $referred_by2 = $('#referred_by2' + $referral_id2).val();

        //        if (confirm('Are you sure you want to edit this Prenatal Referral Form?')) {
        Swal.fire({
            title: 'Are you sure you want to edit this Prenatal Referral Form?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/editprenatalreferral.php",
                    cache: false,
                    async: false,
                    data: {
                        referral_id: $referral_id2,
                        date2: $date2,
                        to2: $to2,
                        destination2: $destination2,
                        patient_name2: $patient_name2,
                        weight2: $weight2,
                        bp2: $bp2,
                        temp2: $temp2,
                        age2: $age2,
                        complaints2: $complaints2,
                        gravida: $gravida,
                        para: $para,
                        fh: $fh,
                        fhb: $fhb,
                        tt: $tt,
                        given: $given,
                        referred_by2: $referred_by2,
                        edit: 1,
                    },
                    success: function () {
                        //                    $('#alert').slideDown();
                        //                    $('#alerttext').text('Successfully updated Prenatal Referral Form');
                        //                    setTimeout(function () {
                        //                        $('#alert').fadeOut('slow');
                        //                    }, 1500);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully updated Prenatal Referral Form!',
                            showConfirmButton: false,
                            timer: 1500
                        })
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
                        showPP();
                    }
                });

            }
        });
    });
});


function showPP() {
    $.ajax({
        url: 'tables/prenatal_referral_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#prenatalreferralpatientTable').html(response);
            var table = $('#prenatalreferralpatienttable').DataTable({
                "aaSorting": [[4, 'desc']]
            });
        }
    });
}
