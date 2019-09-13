$(document).ready(function () {
    showfollow_up_tb();
    showfollow_up_prenatal();
    showfollow_up_familyplanning();
    
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

function showfollow_up_tb() {
    $.ajax({
        url: 'tables/tbfollowuptable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#tbfollowupTable').html(response);
        }
    });
}

function showfollow_up_prenatal() {
    $.ajax({
        url: 'tables/mdtable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#MDTable').html(response);
        }
    });
}

function showfollow_up_familyplanning() {
    $.ajax({
        url: 'tables/fp_follow_up_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#fpfollowupTable').html(response);
        }
    });
}