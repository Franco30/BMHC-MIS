$(document).ready(function () {
    showUser()
    $('#btn_delete').click(function () {
        if (confirm("Are you sure you want to delete this?")) {
            var id = [];

            $('.deleteuser:checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });

            if (id.length == 0) {
                alert("Please Select atleast one checkbox");
            } else {
                $.ajax({
                    url: 'action/usermanagement.delete.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function () {
                        alert("User Account Deleted Successfully");
                        showUser();
                    }

                });
            }

        } else {
            return false;
        }
    });

});

$(document).ready(function () {
    $(document).on('click', '.updateuser', function () {
        $user_id = $(this).val();
        $fullname = $('#fullname' + $user_id).val();
        $license = $('#license' + $user_id).val();
        $position = $('#position' + $user_id).val();
        $username = $('#username' + $user_id).val();
        $password = $('#password' + $user_id).val();
        $.ajax({
            type: "POST",
            url: "action/edituser.php",
            data: {
                user_id: $user_id,
                fullname: $fullname,
                license: $license,
                position: $position,
                username: $username,
                password: $password,
                edit: 1,
            },
            success: function () {
                $('#alert').slideDown();
                $('#alerttext').text('User Information Edited Successfully');
                setTimeout(function () {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showUser();
            }
        });
    });
});

$(document).ready(function () {

    $('#btn_activate').click(function () {

        if (confirm("Are you sure you want to Activate this?")) {
            var id = [];

            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });

            if (id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            } else {
                $.ajax({
                    url: 'action/usermanagement.activate.php',
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function () {
                        alert("User Account Activated Successfully");
                        showUser();
                    }

                });
            }

        } else {
            return false;
        }
    });

});
$(document).ready(function () {

    $('#btn_deactivate').click(function () {

        if (confirm("Are you sure you want to Deactivate this?")) {
            var id = [];

            $(':checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });

            if (id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            } else {
                $.ajax({
                    url: 'action/usermanagement.deactivate.php',
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function () {
                        alert("User Account Deactivated Successfully");
                        showUser();
                    }

                });
            }

        } else {
            return false;
        }
    });

});

function showUser() {
    $.ajax({
        url: 'tables/usermanagementtable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#usermanagementTable').html(response);
            var table = $('#usermanagementtable').DataTable();
        }
    });
}
