$(document).ready(function () {
    showPatient();

    //check availability of patient name

    //add patient ajax
    $(document).on('click', '#addnew', function () {
        if ($('#type_of_acceptor').val() == "" || $('#prevmethod').val() == "" || $('#datetime').val() == "" || $('#patient_education').val() == "" || $('#spouse_name').val() == "" || $('#spouse_birthdate').val() == "" || $('#spouse_education').val() == "" || $('#spouse_occupation').val() == "" || $('#monthly_income').val() == "" || $('#no_living_children').val() == "" || $('#planmorechildren').val() == "" || $('#reason').val() == "" || $('#method_accepted').val() == "") {
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $purok = $('#purok').val();
            $type_of_acceptor = $('#type_of_acceptor').val();
            $prevmethod = $('#prevmethod').val();
            $datetime = $('#datetime').val();
            $patient_education = $('#patient_education').val();
            $spouse_name = $('#spouse_name').val();
            $spouse_birthdate = $('#spouse_birthdate').val();
            $spouse_education = $('#spouse_education').val();
            $spouse_occupation = $('#spouse_occupation').val();
            $monthly_income = $('#monthly_income').val();
            $no_living_children = $('#no_living_children').val();
            $planmorechildren = $('#planmorechildren').val();
            $reason = $('#reason').val();
            //            $method_accepted = $('#method_accepted').val();
            var method_accepted = [];

            $('#method_accepted option:selected').each(function (i) {
                method_accepted[i] = $(this).val();
            });

            if (confirm('Are you sure you want to add this patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addfamilyplanning.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        type_of_acceptor: $type_of_acceptor,
                        prevmethod: $prevmethod,
                        datetime: $datetime,
                        patient_education: $patient_education,
                        spouse_name: $spouse_name,
                        spouse_birthdate: $spouse_birthdate,
                        spouse_education: $spouse_education,
                        spouse_occupation: $spouse_occupation,
                        monthly_income: $monthly_income,
                        no_living_children: $no_living_children,
                        planmorechildren: $planmorechildren,
                        reason: $reason,
                        method_accepted: method_accepted,
                        purok: $purok,
                        add: 1
                    },
                    success: function () {
                        console.log($purok);
                        $('form').trigger('reset');
                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'familyplanning';
                        }, 2500);
                        showPatient();
                    }
                });
            }
        }

    });
});

function showPatient() {
    $.ajax({
        url: 'tables/fp_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#fppatientTable').html(response);
            var table = $('#fppatienttable').DataTable();
        }
    });
}
