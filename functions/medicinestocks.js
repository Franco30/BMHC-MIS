$(document).ready(function () {
    medicinestocks();
    $(document).on('click', '#addstocks', function () {
        if ($('#med_name').val() == "" || $('#quantity2').val() == "") {
            $('#modallabel2').slideDown();
            $('#checkfield2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel2').fadeOut('slow');
            }, 3500);
        } else {
            $medicine_name = $('#med_name').val();
            $quantity = $('#quantity2').val();

            if (confirm('Are you sure you want to add new stocks for this medicine?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addstocks.php",
                    cache: false,
                    async: false,
                    data: {
                        med_name: $medicine_name,
                        quantity2: $quantity,
                        add: 1,
                    },
                    success: function () {
                        $('#add_stock').modal('hide');
                        $('#alert2').slideDown();
                        $('#alerttext2').html('<span class="fa fa-check"></span> Successfully added new Stocks');
                        setTimeout(function () {
                            $('#alert2').fadeOut('slow');
                        }, 1500);
                        medicinestocks();

                    }

                });
            }
            $('form').trigger('reset');
        }

    });

});

function medicinestocks() {
    $.ajax({
        url: 'tables/mstocks.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#mStocks').html(response);
            var table = $('#mstocks').DataTable({
                "aaSorting": [[2, 'desc']]
            });
        }
    });
}
