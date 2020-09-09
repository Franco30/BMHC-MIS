$(document).ready(function () {
    showUserAccount();
    //add call log

    $("#fullname").keyup(function () {
        var fullname = $("#fullname").val().trim();
        if (fullname != '') {
            $("#cname_response").show();

            $.ajax({
                url: 'action/checkname.php',
                type: 'post',
                data: {
                    fullname: fullname
                },
                success: function (response) {
                    if (response > 0) {
                        $("#cname_response").html("<span class='label label-danger'>Name already exist in database</span>");
                        $("#addnew").attr("disabled", true);

                    } else {
                        $("#cname_response").html("");
                        $("#addnew").attr("disabled", false);
                    }
                }
            });
        } else {
            $("#cname_response").hide();
        }
    });

    $("#username").keyup(function () {
        var username = $("#username").val().trim();
        if (username != '') {
            $("#uname_response").show();

            $.ajax({
                url: 'action/checkusername.php',
                type: 'post',
                data: {
                    username: username
                },
                success: function (response) {
                    if (response > 0) {
                        $("#uname_response").html("<span class='label label-danger'>Username already exist in database</span>");
                        $("#addnew").attr("disabled", true);

                    } else {
                        $("#uname_response").html("");
                        $("#addnew").attr("disabled", false);
                    }
                }
            });
        } else {
            $("#uname_response").hide();
        }
    });

    $(document).on('click', '#addnew', function () {
        if ($('#fullname').val() == "" || $('#license').val() == "" || $('#position').val() == "" || $('#username').val() == "" || $('#password').val() == "") {
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function () {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $fullname = $('#fullname').val();
            $license = $('#license').val();
            $position = $('#position').val();
            $username = $('#username').val();
            $password = $('#password').val();

            //            if (confirm('Are you sure you want to add this user?')) {
            Swal.fire({
                title: 'Are you sure you want to add this user?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "action/adduseraccount.php",
                        cache: false,
                        async: false,
                        data: {
                            fullname: $fullname,
                            license: $license,
                            position: $position,
                            username: $username,
                            password: $password,
                            add: 1,
                        },
                        success: function () {
                            $('#newuser').modal('hide');
                            //                        $('#alert').slideDown();
                            //                        $('#alerttext').html('<span class="fa fa-check"></span> New User Added Successfully!');
                            //                        setTimeout(function () {
                            //                            $('#alert').fadeOut('slow');
                            //                        }, 1500);

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'New User Added Successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUserAccount();
                            notificationNewUser();
                            notificationBadgeUser();
                        }
                    });

                }
            });
            $('form').trigger('reset');
        }

    });

});



//show dispatch
function showUserAccount() {
    $.ajax({
        url: 'tables/usertable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#userTable').html(response);
            var table = $('#usertable').DataTable();
        }
    });
}
