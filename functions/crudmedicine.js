$(document).ready(function () {
    showMedicine();
    $(document).on('click', '#addnew', function () {
        if ($('#medicine_name').val() == "" || $('#medicine_type').val() == "" || $('#medicine_description').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $medicine_name = $('#medicine_name').val();
            $medicine_type = $('#medicine_type').val();
            $medicine_description = $('#medicine_description').val();

            if (confirm('Are you sure you want to add this new medicine?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addmedicine.php",
                    cache: false,
                    async: false,
                    data: {
                        medicine_name: $medicine_name,
                        medicine_type: $medicine_type,
                        medicine_description: $medicine_description,
                        add: 1,
                    },
                    success: function (medicine_name, medicine_type) {
                        if (medicine_name == 'Medicine already exist!') {
                            $('#modallabel').slideDown();
                            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Medicine is already exist!');
                            setTimeout(function () {
                                $('#modallabel').fadeOut('slow');
                            }, 3500);
                        } else {
                            $('#new_medicine').modal('hide');
                            $('#alert').slideDown();
                            $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new medicine!');
                            setTimeout(function () {
                                $('#alert').fadeOut('slow');
                            }, 1500);
                            showMedicine();
                        }
                    }

                });
            }
            $('form').trigger('reset');
        }

    });


    $(document).on('click', '.updatemedicine', function () {
        $medicine_id = $(this).val();
        $medicine_name = $('#medicine_name' + $medicine_id).val();
        $medicine_type = $('#medicine_type' + $medicine_id).val();
        $medicine_description = $('#medicine_description' + $medicine_id).val();
        $.ajax({
            type: "POST",
            url: "action/editmedicine.php",
            cache: false,
            async: false,
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
                showMedicine();
            }
        });
    });
});

function showMedicine() {
    $.ajax({
        url: 'tables/medicinetable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#medicineTable').html(response);
            var table = $('#medicinetable').DataTable();
        }
    });
}
