$(document).ready(function () {
    //    $.datepicker.setDefaults({
    //        dateFormat: 'mm-dd-yy'
    //    });
//    $(function () {
//        $("#From").datepicker({
//            format: 'mm-dd-yyyy',
//            language: 'en'
//        });
//        $("#to").datepicker({
//            format: 'mm-dd-yyyy',
//            language: 'en'
//        });
//    });
    $('#range').click(function () {
        var From = $('#From').val();
        var to = $('#to').val();
        if (From != '' && to != '') {
            $.ajax({
                url: "tables/patient_daterange.php",
                method: "POST",
                data: {
                    From: From,
                    to: to
                },
                success: function (data) {
                    $('#patient_daterange').html(data);
                }
            });
        } else {
            //					alert("Please Select the Date");
            $('#alert').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Please Select the Date');
            setTimeout(function () {
                $('#alert').fadeOut('slow');
            }, 3500);
        }
    });
});
