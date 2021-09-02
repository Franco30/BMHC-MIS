$(document).ready(function () {
    showUser();
    $('#btn_delete').click(function () {
        //        if (confirm("Are you sure you want to delete this?")) {
        Swal.fire({
            title: 'Are you sure you want to delete this?',
            icon: 'danger',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                var id = [];

                $('.deleteuser:checkbox:checked').each(function (i) {
                    id[i] = $(this).val();
                });

                if (id.length == 0) {
                    alert("Please Select atleast one checkbox");
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Please Select atleast one checkbox',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    $.ajax({
                        url: 'action/usermanagement.delete.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function () {
                            //                            alert("User Account Deleted Successfully");
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'User Account Deleted Successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUser();
                        }

                    });
                }
                //                else {
                //                    return false;
                //                }
            }
        });
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
        Swal.fire({
            title: 'Are you sure you want to update this account?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
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
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'User Information Updated Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        //                                $('#alert').slideDown();
                        //                                $('#alerttext').text('User Information Edited Successfully');
                        //                                setTimeout(function () {
                        //                                    $('#alert').fadeOut('slow');
                        //                                }, 1500);
                        $(document).ajaxComplete(function () {
                            $(document).find('.select').selectpicker();
                        });
                        showUser();
                    }
                });
            }
        });
    });
});

$(document).ready(function () {

    $('#btn_activate').click(function () {

        //        if (confirm("Are you sure you want to Activate this?")) {
        Swal.fire({
            title: 'Are you sure you want to Activate this?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                var id = [];

                $(':checkbox:checked').each(function (i) {
                    id[i] = $(this).val();
                });

                if (id.length === 0) //tell you if the array is empty
                {
                    //                    alert("Please Select atleast one checkbox");
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Please Select atleast one checkbox',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    $.ajax({
                        url: 'action/usermanagement.activate.php',
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function () {
                            //                            alert("User Account Activated Successfully");
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'User Account Activated Successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUser();
                        }

                    });
                }


            }
        });
        //        else {
        //            return false;
        //        }
    });

});

$(document).ready(function () {

    $('#btn_deactivate').click(function () {

        //        if (confirm("Are you sure you want to Deactivate this?")) {
        Swal.fire({
            title: 'Are you sure you want to Deactivate this?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                var id = [];

                $(':checkbox:checked').each(function (i) {
                    id[i] = $(this).val();
                });

                if (id.length === 0) //tell you if the array is empty
                {
                    //                    alert("Please Select atleast one checkbox");
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Please Select atleast one checkbox',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    $.ajax({
                        url: 'action/usermanagement.deactivate.php',
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function () {
                            //                        alert("User Account Deactivated Successfully");
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'User Account Deactivated Successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUser();
                        }

                    });
                }

            }
        });
        //        else {
        //            return false;
        //        }
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
