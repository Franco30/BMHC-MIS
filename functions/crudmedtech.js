$(document).ready(function () {
    showMedtech();
    $(document).on('click', '#addnew', function () {
        if ($('#mname').val() == "" || $('#fblink').val() == "" || $('#ig').val() == "" || $('#bp').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $mname = $('#mname').val();
            $fblink = $('#fblink').val();
            $ig = $('#ig').val();
            $bp = $('#bp').val();

            if (confirm('Are you sure you want to add this chick?')) {
                $.ajax({
                    type: "POST",
                    url: "action/addmedtech.php",
                    cache: false,
                    async: false,
                    data: {
                        mname: $mname,
                        fblink: $fblink,
                        ig: $ig,
                        bp: $bp,
                        add: 1,
                    },
                    success: function (mname) {
                        if (mname == 'Medtech name already exist!') {
                            $('#modallabel').slideDown();
                            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Chicks name is already exist!');
                            setTimeout(function () {
                                $('#modallabel').fadeOut('slow');
                            }, 3500);
                        } else {
                            $('#new_medtech').modal('hide');
                            $('#alert').slideDown();
                            $('#alerttext').html('<span class="fa fa-check"></span> Chicks Added Successfully!');
                            setTimeout(function () {
                                $('#alert').fadeOut('slow');
                            }, 1500);
                            showMedtech();
                        }
                    }

                });
            }
            $('form').trigger('reset');
        }

    });


    //update chicks
    $(document).on('click', '.updatemedtech', function () {
        $chicks_id = $(this).val();
        $mname = $('#mname' + $chicks_id).val();
        $fblink = $('#fblink' + $chicks_id).val();
        $ig = $('#ig' + $chicks_id).val();
        $bp = $('#bp' + $chicks_id).val();
        $.ajax({
            type: "POST",
            url: "action/editmedtech.php",
            data: {
                chicks_id: $chicks_id,
                mname: $mname,
                fblink: $fblink,
                ig: $ig,
                bp: $bp,
                edit: 1,
            },
            success: function () {
                $('#alert').slideDown();
                $('#alerttext').text('Medtech Student Information Edited Successfully');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showMedtech();
            }
        });
    });

    $('#btn_delete').click(function () {
        if (confirm("Are you sure you want to delete this?")) {
            var id = [];

            $('.delete_chicks:checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });

            if (id.length == 0) {
                alert("Please Select atleast one checkbox");
            } else {
                $.ajax({
                    url: 'action/chicks.delete.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function () {
                        alert("Medtech Student Deleted Successfully");
                        showMedtech();
                    }

                });
            }

        } else {
            return false;
        }
    });
});

function showMedtech() {
    $.ajax({
        url: 'tables/medtechtable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#medtechTable').html(response);
            var table = $('#medtechtable').DataTable();
        }
    });
}
