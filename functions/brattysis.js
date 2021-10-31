$(document).ready(function () {
    showBrattysis();
    $(document).on('click', '#addnew', function () {
        if ($('#name').val() == "" || $('#gender').val() == "" || $('#birthdate').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $child_id = $('#child_id').val();
            $name = $('#name').val();
            $gender = $('#gender').val();
            $birthdate = $('#birthdate').val();

            if (confirm('Are you sure you want to add this as a Sibling?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addbrattysis.php",
                    cache: false,
                    async: false,
                    data: {
                        child_id: $child_id,
                        name: $name,
                        gender: $gender,
                        birthdate: $birthdate,
                        add: 1,
                    },
                    success: function () {
                        $('#add_brattysis').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Successfully added Sibling!');
                        setTimeout(function () {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showBrattysis();
                        // setTimeout(function () {
                        //     window.location.href = 'patient_overview_child?child_id=' + $child_id;
                        // }, 1500);
                    }

                });
                $("#gender").val('default');
                $('#gender').selectpicker('refresh');
                $('form').trigger('reset');
            }

        }

    });

    $(document).on('click', '#cancel', function () {
        $('form').trigger('reset');
        $("#gender").val('default');
        $('#gender').selectpicker('refresh');
    });

});

function showBrattysis() {
    $child_id = $('#child_id').val();
    $.ajax({
        url: 'tables/brattysis.php',
        type: 'POST',
        async: false,
        data: {
            child_id: $child_id,
            show: 1
        },
        success: function (response) {
            $('#brattysisTable').html(response);
            var table = $('#brattysistable').DataTable({
                "aaSorting": [
                    [2, 'desc']
                ]
            });
        }
    });
}