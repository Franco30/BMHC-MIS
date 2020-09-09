$(document).ready(function () {
    //add patient ajax
    $(document).on('click', '#addfeeding', function () {
        if ($('#tof_date').val() == "") {
            $('#modallabel2').slideDown();
            $('#checkfield2').html('<span class="fa fa-exclamation-circle"></span> Date is required!');
            setTimeout(function () {
                $('#modallabel2').fadeOut('slow');
            }, 3500);
        } else {
            $child_id2 = $('#child_id2').val();
            $immunization_id2 = $('#immunization_id2').val();
            $tof_date = $('#tof_date').val();

            var ebf = ($('input:radio[name=ebf]:checked').val() || "");
            var mf = ($('input:radio[name=mf]:checked').val() || "");
            var bff = ($('input:radio[name=bff]:checked').val() || "");

            //            if (confirm('Are you sure you want to add this patient?')) {
            Swal.fire({
                title: 'Are you sure you want to add this treatment?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/addfeeding.php",
                        cache: false,
                        async: false,
                        data: {
                            immunization_id: $immunization_id2,
                            child_id: $child_id2,
                            ebf: ebf,
                            mf: mf,
                            bff: bff,
                            date: $tof_date,
                            add: 1,
                        },
                        success: function (response) {
                            $('#add_feeding').modal('hide');
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Type of Feeding Added Successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').text('Type of Feeding Added Successfully!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);
                            setTimeout(function () {
                                window.location.href = 'immunization_treatment?child_id=' + $child_id2 + '&&immunization_id=' + $immunization_id2;
                            }, 2500);
                        }
                    });

                }
            });
            $('form').trigger('reset');
        }
    });

    $(document).on('click', '#cancel2', function () {
        $('input[type="radio"]').prop('checked', false);
    });
});

function showFeeding() {
    $.ajax({
        url: 'immunization_treatment.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#fuck').html(response);
            var table = $('#typeoffeedingtable').DataTable();
        }
    });
}
