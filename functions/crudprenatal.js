$(document).ready(function () {
    showPatient();
    $(document).on('click', '#addnew', function () {
        if ($('#date').val() == "" || $('#husband').val() == "" || $('#menstrual_hx').val() == "" || $('#menarch').val() == "" || $('#cycle').val() == "" || $('#flow').val() == "" || $('#duration').val() == "" || $('#dysmenorrhea').val() == "" || $('#obgynehx').val() == "" || $('#past_medical_hx').val() == "" || $('#bloodtype').val() == "") {
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $date = $('#date').val();
            $husband = $('#husband').val();
            $menstrual_hx = $('#menstrual_hx').val();
            $menarch = $('#menarch').val();
            $cycle = $('#cycle').val();
            $flow = $('#flow').val();
            $duration = $('#duration').val();
            $dysmenorrhea = $('#dysmenorrhea').val();
            $obgynehx = $('#obgynehx').val();
            $past_medical_hx = $('#past_medical_hx').val();
            $bloodtype = $('#bloodtype').val();
            $tt1 = $('#tt1').val();
            $tt2 = $('#tt2').val();
            $tt3 = $('#tt3').val();
            $tt4 = $('#tt4').val();
            $tt5 = $('#tt5').val();
            $purok = $('#purok').val();

            if (confirm('Are you sure you want to add this new patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addprenatal.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        date: $date,
                        husband: $husband,
                        menstrual_hx: $menstrual_hx,
                        menarch: $menarch,
                        cycle: $cycle,
                        flow: $flow,
                        duration: $duration,
                        dysmenorrhea: $dysmenorrhea,
                        obgynehx: $obgynehx,
                        past_medical_hx: $past_medical_hx,
                        bloodtype: $bloodtype,
                        tt1: $tt1,
                        tt2: $tt2,
                        tt3: $tt3,
                        tt4: $tt4,
                        tt5: $tt5,
                        purok: $purok,
                        add: 1,
                    },
                    success: function () {
                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'prenatal';
                        }, 2500);
                        $('form').trigger('reset');
                    }
                });
            }
        }

    });
});

function showPatient() {
    $.ajax({
        url: 'tables/prenatal_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#prenatalpatientTable').html(response);
            var table = $('#prenatalpatienttable').DataTable();
        }
    });
}
