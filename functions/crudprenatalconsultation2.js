$(document).ready(function () {
    showPatient();
    $(document).on('click', '#addnew', function () {
        if ($('#date').val() == "" || $('#doctors_order_advice').val() == "" || $('#presentation').val() == "" || $('#complaints').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#weight').val() == "" || $('#fh').val() == "" || $('#fhb').val() == "" || $('#aog').val() == "") {

            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);

        } else {
            $patient_id = $('#patient_id').val();
            $prenatal_id = $('#prenatal_id').val();
            $date = $('#date').val();
            $doctors_order_advice = $('#doctors_order_advice').val();
            $presentation = $('#presentation').val();
            $complaints = $('#complaints').val();
            $fh = $('#fh').val();
            $fhb = $('#fhb').val();
            $bp = $('#bp').val();
            $weight = $('#weight').val();
            $aog = $('#aog').val();

            //            if (confirm('Are you sure you want to add this Prenatal Consultation?')) {
            Swal.fire({
                title: 'Are you sure you want to add this Prenatal Consultation?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/addprenatalconsultation2.php",
                        cache: false,
                        async: false,
                        data: {
                            patient_id: $patient_id,
                            prenatal_id: $prenatal_id,
                            date: $date,
                            doctors_order_advice: $doctors_order_advice,
                            presentation: $presentation,
                            complaints: $complaints,
                            fh: $fh,
                            fhb: $fhb,
                            bp: $bp,
                            weight: $weight,
                            aog: $aog,
                            add: 1,
                        },
                        success: function () {
                            $('#add_consultation').modal('hide');
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Prenatal Consultation Added Successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').text('Prenatal Consultation Added Successfully!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);
                            setTimeout(function () {
                                window.location.href = 'prenatal_record?patient_id=' + $patient_id + '&&prenatal_id=' + $prenatal_id;
                            }, 2500);
                            $('form').trigger('reset');
                        }
                    });

                }
            });
        }

    });
});

function showPatient() {
    $.ajax({
        url: 'tables/prenatal_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#prenatalpatientTable').html(response);
            var table = $('#prenatalpatienttable').DataTable();
        }
    });
}
