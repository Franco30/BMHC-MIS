$(document).ready(function () {
    showPrescription();
    $(document).on('click', '#addnew', function () {
        if ($('#medicine_category').val() == "" || $('#medname').val() == "" || $('#qty').val() == "" || $('#recommendation').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $consultation_id = $('#consultation_id').val();
            $patient_id = $('#patient_id').val();
            //$medicine_category = $('#medicine_category').val();
            $medname = $('#medname').val();
            $qty = $('#qty').val();
            $recommendation = $('#recommendation').val();

            var sixam = ($('input:radio[name=6am]:checked').val() || "");
            var eightam = ($('input:radio[name=8am]:checked').val() || "");
            var twelvenoon = ($('input:radio[name=12nn]:checked').val() || "");
            var twopm = ($('input:radio[name=2pm]:checked').val() || "");
            var fourpm = ($('input:radio[name=4pm]:checked').val() || "");
            var sixpm = ($('input:radio[name=6pm]:checked').val() || "");
            var eightpm = ($('input:radio[name=8pm]:checked').val() || "");

            if (confirm('Are you sure you want to add this Prescription?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addprescription.php",
                    cache: false,
                    async: false,
                    data: {
                        consultation_id: $consultation_id,
                        medname: $medname,
                        patient_id: $patient_id,
                        //                        medicine_category: $medicine_category,
                        medname: $medname,
                        sixam: sixam,
                        eightam: eightam,
                        twelvenoon: twelvenoon,
                        twopm: twopm,
                        fourpm: fourpm,
                        sixpm: sixpm,
                        eightpm: eightpm,
                        qty: $qty,
                        recommendation: $recommendation,
                        add: 1,
                    },
                    success: function () {
                        $('#add_prescription').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added Prescription!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                                window.location.href = 'consultation_treatment?patient_id=' + $patient_id + '&&consultation_id=' + $consultation_id;
                        }, 1500);
                        showPrescription();
                    }

                });
                $("#medname").val('default');
                $('#medname').selectpicker('refresh');
                $('input[type="radio"]').prop('checked', false);
                $('form').trigger('reset');
            }
            //            $("#medicine_category").val('default');
            //            $('#medicine_category').selectpicker('refresh');
        }

    });

    $(document).on('click', '#cancel', function () {
        $('input[type="radio"]').prop('checked', false);
        $('form').trigger('reset');
        $('#medname').selectpicker('refresh');
    });

    $(document).on('click', '.updatemedicine', function () {
        $medicine_id = $(this).val();
        $medicine_name = $('#medicine_name' + $medicine_id).val();
        $medicine_type = $('#medicine_type' + $medicine_id).val();
        $medicine_category = $('#medicine_category' + $medicine_id).val();
        if (confirm('Are you sure you want to edit this medicine?')) {
            $.ajax({
                type: "POST",
                url: "action/editmedicine.php",
                cache: false,
                async: false,
                data: {
                    medicine_id: $medicine_id,
                    medicine_name: $medicine_name,
                    medicine_type: $medicine_type,
                    medicine_category: $medicine_category,
                    edit: 1,
                },
                success: function () {
                    $('#alert').slideDown();
                    $('#alerttext').text('Successfully updated medicine!');
                    setTimeout(function () {
                        $('#alert').fadeOut('slow');
                    }, 1500);

                    $(document).ajaxComplete(function () {
                        $(document).find('.select').selectpicker();
                    });
                    showMedicine();
                }
            });
        }
    });
});

function showPrescription() {
    $.ajax({
        url: 'tables/consultation_treatment_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#prescriptionTable').html(response);
            var table = $('#prescriptiontable').DataTable();
        }
    });
}
