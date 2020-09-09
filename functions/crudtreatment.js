$(document).ready(function () {

    $("#treatment_type").change(function () {
        var treatment_type = $("#treatment_type").val().trim();
        var child_id = $("#child_id").val().trim();
        if (treatment_type != '') {
            $("#ttype_response").show();
            $.ajax({
                url: 'action/check_treatment.php',
                type: 'post',
                data: {
                    treatment_type: treatment_type,
                    child_id: child_id
                },
                success: function (response) {
                    if (response > 0) {
                        console.log(response);
                        $("#ttype_response").html("<span class='label label-danger'>Treatment Type is Already Exist!</span>");
                        $("#addnew").attr("disabled", true);

                    } else {
                        console.log(response);
                        $("#ttype_response").html("");
                        $("#addnew").attr("disabled", false);
                    }
                }
            });
        } else {
            $("#ttype_response").hide();
        }
    });

    // || $('#treatment_age').val() == "" || $('#treatment_weight').val() == "" || $('#treatment_height').val() == ""
    //add patient ajax
    $(document).on('click', '#addnew', function () {
        if ($('#treatment_type').val() == "" || $('#treatment_date').val() == "") {

            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 2500);

        } else {

            $child_id = $('#child_id').val();
            $immunization_id = $('#immunization_id').val();
            $treatment_type = $('#treatment_type').val();
            $treatment_date = $('#treatment_date').val();
            $treatment_age = $('#treatment_age').val();
            $treatment_weight = $('#treatment_weight').val();
            $treatment_height = $('#treatment_height').val();
            $treatment_temp = $('#treatment_temp').val();
            $treatment_remarks = $('#treatment_remarks').val();

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
                        url: "action/addtreatment.php",
                        cache: false,
                        async: false,
                        data: {
                            child_id: $child_id,
                            immunization_id: $immunization_id,
                            treatment_type: $treatment_type,
                            treatment_date: $treatment_date,
                            treatment_age: $treatment_age,
                            treatment_weight: $treatment_weight,
                            treatment_height: $treatment_height,
                            treatment_temp: $treatment_temp,
                            treatment_remarks: $treatment_remarks,
                            add: 1,
                        },
                        success: function (response) {
                            if (response == '1') {
                                $('#modallabel').slideDown();
                                $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Treatment Type is already exist!');
                                setTimeout(function () {
                                    $('#modallabel').fadeOut('slow');
                                }, 3500);
                            } else {
                                $('#add_treatment').modal('hide');
                                //                                $('#alert').slideDown();
                                //                                $('#alerttext').text('Treatment Added Successfully!');
                                //                                setTimeout(function () {
                                //                                    $('#alert').fadeOut('slow');
                                //                                }, 1500);
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Treatment Added Successfully!',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                setTimeout(function () {
                                    window.location.href = 'immunization_treatment?child_id=' + $child_id + '&&immunization_id=' + $immunization_id;
                                }, 2500);
                            }
                        }
                    });

                }
            });
            $('form').trigger('reset');
        }

    });

    $(document).on('click', '#cancel2', function () {
        $("#treatment_type").val('default');
        $('#treatment_type').selectpicker('refresh');
    });
});

function showPatient() {
    $.ajax({
        url: 'tables/immunization_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#immunizationpatientTable').html(response);
            var table = $('#immunizationpatienttable').DataTable();
        }
    });
}
