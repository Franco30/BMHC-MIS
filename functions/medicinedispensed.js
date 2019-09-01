$(document).ready(function () {
    showDispensedMedicine();
    $(document).on('click', '#addnew', function () {
        if ($('#medicine_name').val() == "" || $('#quantity').val() == "" || $('#received').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $medicine_name = $('#medicine_name').val();
            $quantity = $('#quantity').val();
            $received = $('#received').val();

            if (confirm('Are you sure you want to dispense this medicines?')) {
                $.ajax({
                    type: "POST",
                    url: "action/dispensedmedicine.php",
                    cache: false,
                    async: false,
                    data: {
                        medicine_name: $medicine_name,
                        quantity: $quantity,
                        received: $received,
                        add: 1,
                    },
                    success: function () {
                            $('#dispensed').modal('hide');
                            $('#alert').slideDown();
                            $('#alerttext').html('<span class="fa fa-check"></span> Successfully dispensed medicine!');
                            setTimeout(function () {
                                $('#alert').fadeOut('slow');
                            }, 1500);
                            showDispensedMedicine();
                        
                    }

                });
            }
            $('form').trigger('reset');
        }

    });


    $(document).on('click', '.updatemedicine', function () {
        $medicine_id = $(this).val();
        $medicine_name = $('#medicine_name' + $medicine_id).val();
        $quantity = $('#quantity' + $medicine_id).val();
        $received = $('#received' + $medicine_id).val();
        $.ajax({
            type: "POST",
            url: "action/editmedicine.php",
            data: {
                medicine_id: $medicine_id,
                medicine_name: $medicine_name,
                quantity: $quantity,
                received: $received,
                edit: 1,
            },
            success: function () {
                $('#alert').slideDown();
                $('#alerttext').text('Successfully updated medicine!');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showDispensedMedicine();
            }
        });
    });
});

function showDispensedMedicine() {
    $.ajax({
        url: 'tables/mdtable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#mdTable').html(response);
            var table = $('#mdtable').DataTable();
        }
    });
}
