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

            //            if (confirm('Are you sure you want to add this patient?')) {
            Swal.fire({
                title: 'Are you sure you want to add this patient?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
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
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').text('Patient Added Successfully!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Patient Added Successfully!',
                                showConfirmButton: false,
                                timer: 2000
                            })
                            setTimeout(function () {
                                window.location.href = 'familyplanning';
                            }, 2500);
                            showPatient();
                        }
                    });

                }
            });
        }

    });

    $(document).on('click', '.updatefp', function () {
        $patient_id = $('#patient_id').val();
        $family_planning_id = $(this).val();
        $purok = $('#purok' + $family_planning_id).val();
        //        $type_of_acceptor = $('#type_of_acceptor' + $family_planning_id).val();
        $prevmethod = $('#prevmethod' + $family_planning_id).val();
        $datetime = $('#datetime' + $family_planning_id).val();
        $patient_education = $('#patient_education' + $family_planning_id).val();
        $spouse_name = $('#spouse_name' + $family_planning_id).val();
        $spouse_birthdate = $('#spouse_birthdate' + $family_planning_id).val();
        $spouse_education = $('#spouse_education' + $family_planning_id).val();
        $spouse_occupation = $('#spouse_occupation' + $family_planning_id).val();
        $monthly_income = $('#monthly_income' + $family_planning_id).val();
        $no_living_children = $('#no_living_children' + $family_planning_id).val();
        $planmorechildren = $('#planmorechildren' + $family_planning_id).val();
        $reason = $('#reason' + $family_planning_id).val();
        var method_accepted = [];
        $('#method_accepted option:selected').each(function (i) {
            method_accepted[i] = $(this).val();
        });
        //        if (confirm('Are you sure you want to edit this Family Planning?')) {
        Swal.fire({
            title: 'Are you sure you want to edit this Family Planning?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "action/editfp.php",
                    cache: false,
                    async: false,
                    data: {
                        family_planning_id: $family_planning_id,
                        //                    type_of_acceptor: $type_of_acceptor,
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
                        edit: 1,
                    },
                    success: function () {
                        //                    $('#alert').slideDown();
                        //                    $('#alerttext').text('Successfully updated Family Planning!');
                        //                    setTimeout(function () {
                        //                        $('#alert').fadeOut('slow');
                        //                    }, 1500);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Successfully updated Family Planning!',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        console.log(method_accepted);
                        setTimeout(function () {
                            window.location.href = 'patient_familyplanning?patient_id=' + $patient_id;
                        }, 2500);
                        showPatient();
                    }
                });

            }
        });
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
