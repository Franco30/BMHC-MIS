$(document).ready(function () {
    showPatient();

    $(document).on('click', '#addnew', function () {
        if ($('#date').val() == "" || $('#patient_name').val() == "" || $('#weight').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#age').val() == "" || $('#complaints').val() == "" || $('#from').val() == "" || $('#to').val() == "" || $('#origin').val() == "" || $('#destination').val() == "" || $('#referred_by').val() == "" || $('#designation').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $date = $('#date').val();
            $patient_name = $('#patient_name').val();
            $weight = $('#weight').val();
            $bp = $('#bp').val();
            $temp = $('#temp').val();
            $age = $('#age').val();
            $complaints = $('#complaints').val();
            $from = $('#from').val();
            $to = $('#to').val();
            $origin = $('#origin').val();
            $destination = $('#destination').val();
            $referred_by = $('#referred_by').val();
            $designation = $('#designation').val();

            if (confirm('Are you sure you want to add this new Referral?')) {
                $.ajax({
                    type: "POST",
                    url: "action/add_referral.php",
                    cache: false,
                    async: false,
                    data: {
                        date: $date,
                        patient_name: $patient_name,
                        weight: $weight,
                        bp: $bp,
                        temp: $temp,
                        age: $age,
                        complaints: $complaints,
                        from: $from,
                        to: $to,
                        origin: $origin,
                        destination: $destination,
                        referred_by: $referred_by,
                        designation: $designation,
                        add: 1,
                    },
                    success: function () {
                        $('#addreferral').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added new Referral!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        $(document).ajaxComplete(function () {
                            $(document).find('.datepicker').datepicker({
                                format: 'MM dd, yyyy',
                                language: 'en'
                            });
                        });
                        showPatient();
                    }

                });
            }
            $('form').trigger('reset');
        }

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
