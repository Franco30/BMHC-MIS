$(document).ready(function () {

    $(document).on('click', '.edit_tt', function () {
        $child_id4 = $('#child_id4').val();
        $immunization_id4 = $('#immunization_id4').val();
        $tetanus_toxoid_id = $(this).val();
        $tt1 = $('#tt1' + $tetanus_toxoid_id).val();
        $tt2 = $('#tt2' + $tetanus_toxoid_id).val();
        $tt3 = $('#tt3' + $tetanus_toxoid_id).val();
        $tt4 = $('#tt4' + $tetanus_toxoid_id).val();
        $tt5 = $('#tt5' + $tetanus_toxoid_id).val();
        $ttl = $('#ttl' + $tetanus_toxoid_id).val();

        //    if (confirm('Are you sure you want to update this data?')) {
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
                    url: "action/update_tt.php",
                    cache: false,
                    async: false,
                    data: {
                        tetanus_toxoid_id: $tetanus_toxoid_id,
                        tt1: $tt1,
                        tt2: $tt2,
                        tt3: $tt3,
                        tt4: $tt4,
                        tt5: $tt5,
                        ttl: $ttl,
                        edit: 1,
                    },
                    success: function () {
                        $('#edit_tetanus_toxoid' + $tetanus_toxoid_id).modal('hide');
//                        $('#alert').slideDown();
//                        $('#alerttext').text('Successfully updated Treatment!');
//                        setTimeout(function () {
//                            $('#alert').fadeOut('slow');
//                        }, 1500);
                            Swal.fire({
                              position: 'center',
                              icon: 'success',
                              title: 'Successfully updated Treatment!',
                              showConfirmButton: false,
                              timer: 1500
                            })
                        setTimeout(function () {
                            window.location.href = 'immunization_treatment?child_id=' + $child_id4 + '&&immunization_id=' + $immunization_id4;
                        }, 2500);
                    }

                });

            }
        });
        $('form').trigger('reset');
    });

    $(document).on('click', '#cancel4', function () {
        $('form').trigger('reset');
    });
});
