$(document).ready(function () {

    $(document).on('click', '.endtreatment', function () {
        $immunization_id = $(this).val();
        $child_id = $('#child_id333').val();
        var status = ($('input:radio[name=status]:checked').val() || "");

        //        if (confirm('Are you sure you want to end this treatment?')) {
        Swal.fire({
            title: 'Are you sure you want to end this treatment?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/endtreatment.php",
                    cache: false,
                    async: false,
                    data: {
                        immunization_id: $immunization_id,
                        child_id: $child_id,
                        status: status,
                        edit: 1,
                    },
                    success: function () {
                        $('#end_treatment' + $immunization_id).modal('hide');
                        //                    $('#alert').slideDown();
                        //                    $('#alerttext').text('Successfully ended treatment!');
                        //                    setTimeout(function () {
                        //                        $('#alert').fadeOut('slow');
                        //                    }, 1500);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully ended treatment!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function () {
                            window.location.href = 'immunization_table';
                        }, 2500);
                    }
                });

            }
        });
    });
});
