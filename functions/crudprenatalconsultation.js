$(document).ready(function () {
    showPatient();
    $(document).on('click', '#addnew', function () {
        if ($('#date').val() == "" || $('#doctors_order_advice').val() == "" || $('#presentation').val() == "" || $('#complaints').val() == "" || $('#lmp').val() == "" || $('#edc').val() == "" || $('#gravida').val() == "" || $('#para').val() == "" || $('#ft').val() == "" || $('#pt').val() == "" || $('#a').val() == "" || $('#lb').val() == "" || $('#fh').val() == "" || $('#fhb').val() == "" || $('#bp').val() == "" || $('#temp').val() == "" || $('#weight').val() == "" || $('#height').val() == "" || $('#aog').val() == "") {
            
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
            
        } else {
            $patient_id = $('#patient_id').val();
            $prenatal_id = $('#prenatal_id').val();
            $date = $('#date').val();
            $doctors_order_advice = $('#doctors_order_advice').val();
            $presentation = $('#presentation').val();
            $complaints = $('#complaints').val();
            $lmp = $('#lmp').val();
            $edc = $('#edc').val();
            $gravida = $('#gravida').val();
            $para = $('#para').val();
            $ft = $('#ft').val();
            $pt = $('#pt').val();
            $a = $('#a').val();
            $lb = $('#lb').val();
            $fh = $('#fh').val();
            $fhb = $('#fhb').val();
            $bp = $('#bp').val();
            $temp = $('#temp').val();
            $weight = $('#weight').val();
            $height = $('#height').val();
            $aog = $('#aog').val();

            if (confirm('Are you sure you want to add this Prenatal Consultation?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addprenatalconsultation.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        prenatal_id: $prenatal_id,
                        date: $date,
                        doctors_order_advice: $doctors_order_advice,
                        presentation: $presentation,
                        complaints: $complaints,
                        lmp: $lmp,
                        edc: $edc,
                        gravida: $gravida,
                        para: $para,
                        ft: $ft,
                        pt: $pt,
                        a: $a,
                        lb: $lb,
                        fh: $fh,
                        fhb: $fhb,
                        bp: $bp,
                        temp: $temp,
                        weight: $weight,
                        height: $height,
                        aog: $aog,
                        add: 1,
                    },
                    success: function () {
                        $('#alert').slideDown();
                        $('#alerttext').text('Prenatal Consultation Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'prenatal_record?patient_id=' + $patient_id + '&&prenatal_id=' + $prenatal_id;
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
