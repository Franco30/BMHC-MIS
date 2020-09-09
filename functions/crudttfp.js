$(document).ready(function () {

    $(document).on('click', '.edit_tt_fp', function () {
        $child_id5 = $('#child_id5').val();
        $immunization_id5 = $('#immunization_id5').val();
        $tetanus_toxoid_fp_id = $(this).val();
        $uid = $('#uid' + $tetanus_toxoid_fp_id).val();
        $btl = $('#btl' + $tetanus_toxoid_fp_id).val();
        $1_year2 = $('#1_year2' + $tetanus_toxoid_fp_id).val();
        $vit_a2 = $('#vit_a2' + $tetanus_toxoid_fp_id).val();
        $feso4 = $('#feso4' + $tetanus_toxoid_fp_id).val();

        //        if (confirm('Are you sure you want to update this data?')) {
        Swal.fire({
            title: 'Are you sure you want to update this treatment?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/update_tt_fp.php",
                    cache: false,
                    async: false,
                    data: {
                        tetanus_toxoid_fp_id: $tetanus_toxoid_fp_id,
                        uid: $uid,
                        btl: $btl,
                        one_year: $1_year2,
                        vit_a: $vit_a2,
                        feso4: $feso4,
                        edit: 1,
                    },
                    success: function () {
                        $('#edit_tt_fp' + $tetanus_toxoid_fp_id).modal('hide');
                        //          $('#alert').slideDown();
                        //          $('#alerttext').text('Successfully updated Treatment!');
                        //          setTimeout(function () {
                        //            $('#alert').fadeOut('slow');
                        //          }, 1500);

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully updated Treatment!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function () {
                            window.location.href = 'immunization_treatment?child_id=' + $child_id5 + '&&immunization_id=' + $immunization_id5;
                        }, 2500);
                    }

                });

            }
        });
        $('form').trigger('reset');
    });

    $(document).on('click', '#cancel5', function () {
        $('form').trigger('reset');
    });
});
