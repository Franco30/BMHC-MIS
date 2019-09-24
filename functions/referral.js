$(document).ready(function () {
    showPatient();

    
    $(document).on('click', '.updatemedicine', function () {
        $medicine_id = $(this).val();
        $medicine_name = $('#medicine_name' + $medicine_id).val();
        $medicine_type = $('#medicine_type' + $medicine_id).val();
        $medicine_description = $('#medicine_description' + $medicine_id).val();
        $.ajax({
            type: "POST",
            url: "action/editmedicine.php",
            data: {
                medicine_id: $medicine_id,
                medicine_name: $medicine_name,
                medicine_type: $medicine_type,
                medicine_description: $medicine_description,
                edit: 1,
            },
            success: function () {
                $('#alert').slideDown();
                $('#alerttext').text('Successfully updated medicine!');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showfollow_up_tb();
                showfollow_up_prenatal();
                showfollow_up_familyplanning();
            }
        });
    });
});


function showPatient() {
    $.ajax({
        url: 'tables/referral_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#referralpatientTable').html(response);
            var table = $('#referralpatienttable').DataTable();
        }
    });
}