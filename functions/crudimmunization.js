$(document).ready(function () {
    showPatient();

    //check availability of patient name

    //add patient ajax
    $(document).on('click', '#addnew', function () {
        if ($('#philhealth').val() == "" || $('#birthtime').val() == "" || $('#birthweight').val() == "" || $('#phonenumber').val() == "" || $('#gravida').val() == "" || $('#para').val() == "" || $('#abortion').val() == "" || $('#mage').val() == "" || $('#fage').val() == "" || $('#placeprenatal').val() == "" || $('#placedelivery').val() == "" || $('#typedelivery').val() == "") {

            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);

        } else {

            $child_id = $('#child_id').val();
            $philhealth = $('#philhealth').val();
            $birthtime = $('#birthtime').val();
            $birthweight = $('#birthweight').val();
            $phonenumber = $('#phonenumber').val();
            $gravida = $('#gravida').val();
            $para = $('#para').val();
            $abortion = $('#abortion').val();
            $mage = $('#mage').val();
            $fage = $('#fage').val();
            $placeprenatal = $('#placeprenatal').val();
            $placedelivery = $('#placedelivery').val();
            $typedelivery = $('#typedelivery').val();

            if (confirm('Are you sure you want to add this patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addimmunization.php",
                    cache: false,
                    async: false,
                    data: {
                        child_id: $child_id,
                        philhealth: $philhealth,
                        birthtime: $birthtime,
                        birthweight: $birthweight,
                        phonenumber: $phonenumber,
                        gravida: $gravida,
                        para: $para,
                        abortion: $abortion,
                        mage: $mage,
                        fage: $fage,
                        placeprenatal: $placeprenatal,
                        placedelivery: $placedelivery,
                        typedelivery: $typedelivery,
                        add: 1,
                    },
                    success: function () {

                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'immunization_table';
                        }, 2500);
                    }
                });
            }
            $('form').trigger('reset');
        }

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
