$(document).ready(function () {

    $(document).on('click', '#addassessment', function () {
        if ($('#dateoflastdelivery').val() == "" || $('#typeoflastdelivery').val() == "" || $('#pregnancies').val() == "" || $('#fullterm').val() == "" || $('#premature').val() == "" || $('#abortions').val() == "" || $('#livingchildren').val() == "" || $('#pastmenstrualperiod').val() == "" || $('#lastmenstrualperiod').val() == "" || $('#stirisk').val() == "" || $('#dcmenstrualbleeding').val() == "" || $('#bp').val() == "" || $('#weight').val() == "" || $('#height').val() == "" || $('#pr').val() == "" || $('#referredrisks').val() == "" || $('#mass').val() == "" || $('#uterinedepth').val() == "") {
            $('#alert2').slideDown();
            $('#alerttext2').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#alert2').fadeOut('slow');
            }, 3500);
        } else {
            $patient_id = $('#patient_id').val();
            $family_planning_id = $('#family_planning_id').val();

            //Medical History
            var heent = [];
            $('#heent option:selected').each(function (i) {
                heent[i] = $(this).val();
            });
            var chestheart = [];
            $('#chestheart option:selected').each(function (i) {
                chestheart[i] = $(this).val();
            });
            var abdomen = [];
            $('#abdomen option:selected').each(function (i) {
                abdomen[i] = $(this).val();
            });
            var genital = [];
            $('#genital option:selected').each(function (i) {
                genital[i] = $(this).val();
            });
            var extremities = [];
            $('#extremities option:selected').each(function (i) {
                extremities[i] = $(this).val();
            });
            var history = [];
            $('#history option:selected').each(function (i) {
                history[i] = $(this).val();
            });
            $skin = $('#skin').val();

            //STI Risks
            $stirisk = $('#stirisk').val();
            var forwomen = [];
            $('#forwomen option:selected').each(function (i) {
                forwomen[i] = $(this).val();
            });
            var formen = [];
            $('#formen option:selected').each(function (i) {
                formen[i] = $(this).val();
            });

            //Obstetrical History
            $dateoflastdelivery = $('#dateoflastdelivery').val();
            $typeoflastdelivery = $('#typeoflastdelivery').val();
            $pregnancies = $('#pregnancies').val();
            $fullterm = $('#fullterm').val();
            $premature = $('#premature').val();
            $abortions = $('#abortions').val();
            $livingchildren = $('#livingchildren').val();
            $pastmenstrualperiod = $('#pastmenstrualperiod').val();
            $lastmenstrualperiod = $('#lastmenstrualperiod').val();
            var history2 = [];
            $('#history2 option:selected').each(function (i) {
                history2[i] = $(this).val();
            });
            $dcmenstrualbleeding = $('#dcmenstrualbleeding').val();

            //Physical Examination
            $bp = $('#bp').val();
            $weight = $('#weight').val();
            $height = $('#height').val();
            $pr = $('#pr').val();
            var conjuntiva = [];
            $('#conjuntiva option:selected').each(function (i) {
                conjuntiva[i] = $(this).val();
            });
            var neck = [];
            $('#neck option:selected').each(function (i) {
                neck[i] = $(this).val();
            });
            var breast = [];
            $('#breast option:selected').each(function (i) {
                breast[i] = $(this).val();
            });
            var thorax = [];
            $('#thorax option:selected').each(function (i) {
                thorax[i] = $(this).val();
            });
            var abdomen2 = [];
            $('#abdomen2 option:selected').each(function (i) {
                abdomen2[i] = $(this).val();
            });
            var extremities2 = [];
            $('#extremities2 option:selected').each(function (i) {
                extremities2[i] = $(this).val();
            });

            //Risk for Violence
            var risks = [];
            $('#risks option:selected').each(function (i) {
                risks[i] = $(this).val();
            });
            $referredrisks = $('#referredrisks').val();
            $risksothers = $('#risksothers').val();

            //Pelvic Examination
            var perineum = [];
            $('#perineum option:selected').each(function (i) {
                perineum[i] = $(this).val();
            });
            var vagina = [];
            $('#vagina option:selected').each(function (i) {
                vagina[i] = $(this).val();
            });
            var cervix = [];
            $('#cervix option:selected').each(function (i) {
                cervix[i] = $(this).val();
            });
            var consistency = [];
            $('#consistency option:selected').each(function (i) {
                consistency[i] = $(this).val();
            });
            var position = [];
            $('#position option:selected').each(function (i) {
                position[i] = $(this).val();
            });
            var size = [];
            $('#size option:selected').each(function (i) {
                size[i] = $(this).val();
            });
            $mass = $('#mass').val();
            $uterinedepth = $('#uterinedepth').val();
            var adnexa = [];
            $('#adnexa option:selected').each(function (i) {
                adnexa[i] = $(this).val();
            });

            if (confirm('Are you sure you want to add this patient?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addfpassessment.php",
                    cache: false,
                    async: false,
                    data: {
                        patient_id: $patient_id,
                        family_planning_id: $family_planning_id,

                        //Medical History
                        heent: heent,
                        chestheart: chestheart,
                        abdomen: abdomen,
                        genital: genital,
                        extremities: extremities,
                        history: history,
                        skin: $skin,

                        //STI Risk
                        stirisk: $stirisk,
                        forwomen: forwomen,
                        formen: formen,

                        //Obstetrical History
                        dateoflastdelivery: $dateoflastdelivery,
                        typeoflastdelivery: $typeoflastdelivery,
                        pregnancies: $pregnancies,
                        fullterm: $fullterm,
                        premature: $premature,
                        abortions: $abortions,
                        livingchildren: $livingchildren,
                        pastmenstrualperiod: $pastmenstrualperiod,
                        lastmenstrualperiod: $lastmenstrualperiod,
                        history2: history2,
                        dcmenstrualbleeding: $dcmenstrualbleeding,

                        //Physical Examination
                        bp: $bp,
                        weight: $weight,
                        height: $height,
                        pr: $pr,
                        conjuntiva: conjuntiva,
                        neck: neck,
                        breast: breast,
                        thorax: thorax,
                        abdomen2: abdomen2,
                        extremities2: extremities2,

                        //Risk for Violence
                        risks: risks,
                        referredrisks: $referredrisks,
                        risksothers: $risksothers,

                        //Pelvic Examination
                        perineum: perineum,
                        vagina: vagina,
                        cervix: cervix,
                        consistency: consistency,
                        position: position,
                        size: size,
                        mass: $mass,
                        uterinedepth: $uterinedepth,
                        adnexa: adnexa,
                        add: 1
                    },
                    success: function () {
                        $('form').trigger('reset');
                        $('#alert').slideDown();
                        $('#alerttext').text('Patient Added Successfully!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function () {
                            window.location.href = 'patient_familyplanning?patient_id=' + $patient_id;
                        }, 2500);
                    }
                });
            }
        }

    });
});
