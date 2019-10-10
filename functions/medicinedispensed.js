$(document).ready(function () {
    showDispensedMedicine();
    $(document).on('click', '#addnew', function () {
        if ($('#purpose').val() == "" || $('#medicine_name').val() == "" || $('#quantity').val() == "" || $('#received').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $purpose = $('#purpose').val();
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
                        purpose: $purpose,
                        medicine_name: $medicine_name,
                        quantity: $quantity,
                        received: $received,
                        add: 1,
                    },
                    success: function (quantity) {
                        if (quantity == 'not ok') {
                            $('#modallabel').slideDown();
                            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Not enough medicine to dispense');
                            setTimeout(function () {
                                $('#modallabel').fadeOut('slow');
                            }, 3500);
                        } else {
                            $('#dispensed').modal('hide');
                            $('#alert').slideDown();
                            $('#alerttext').html('<span class="fa fa-check"></span> Successfully dispensed medicine!');
                            setTimeout(function () {
                                $('#alert').fadeOut('slow');
                            }, 1500);
                            showDispensedMedicine();
                        }
                    }

                });
            }
            $('form').trigger('reset');
        }

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
