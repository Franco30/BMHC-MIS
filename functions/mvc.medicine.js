$(document).ready(function () {

    showMedicine();

function showMedicine() {
    $.ajax({
        url: 'tables/medicinetable.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#medicineTable').html(response);
            var table = $('#medicinetable').DataTable({
                "aaSorting": [[4, 'desc']]
            });
        }
    });
}

        $("#medicine_name").blur(function () {
        var medicine_type = $("#medicine_type").val().trim();
        var medicine_name = $("#medicine_name").val().trim();
        if (medicine_type != '') {
            $("#medicine_name_response").show();
            $("#medname").removeClass('has-error');
            $.ajax({
                url: 'controller/controller.medicine.php',
                type: 'post',
                data: {
                    medicine_name: medicine_name,
                    medicine_type: medicine_type
                },
                success: function (response) {
                    if (response > 0) {
                        console.log(response);
                        $("#medicine_name_response").show();
                        $("#medicine_name_response").html("<span style='color:#d93025;'><span class='fa fa-exclamation-circle'></span> Medicine is already exist!</span>");
                        $("#insert").attr("disabled", true);
                        $("#medname").addClass('has-error');

                    } else {
                        console.log(response);
                        $("#medicine_name_response").html("");
                        $("#insert").attr("disabled", false);
                    }
                }
            });
        } 
    });
    
    // insert ajax request
    $("#insert").click(function (e) {
        if ($("#medicine")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to add this new medicine?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "controller/controller.medicine.php",
                        type: "POST",
                        data: $("#medicine").serialize() + "&action=insert",
                        success: function (response) {
                            console.log(response);
                            Swal.fire({
                            title: 'Successfully updated Patient Profile',
                            icon: 'success',
                            confirmButtonColor: '#95b75d',
                            confirmButtonText: 'Ok'
                            })
                            $("#new_medicine").modal('hide');
                            $("#medicine")[0].reset();
                            showMedicine();
                        }
                    });
                }
            });
        }
    });

    // Edit User
    $("body").on("click", ".editBtn", function (e) {
        e.preventDefault();
        edit_id = $(this).attr('id');
        $.ajax({
            url: "controller/controller.medicine.php",
            type: "POST",
            data: {
                edit_id: edit_id
            },
            success: function (response) {
                data = JSON.parse(response);
                
                $.each(data, function(data) {
                    $('#medicine_category').append($('<option>').text(value).attr('value', value));
                });
                
                 console.log(value);
                
                $("#id").val(data.medicine_id);
                $("#medicine_type2").val(data.medicine_type);
                $("#medicine_name2").val(data.medicine_name);
//                $("#medicine_category").val(data.category);
                console.log(data);
            }
        });
    });

    // update ajax request
    $("#update").click(function (e) {
        if ($("#medicines")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to update this medicine?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#E04B4A',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#edit-form-data").serialize() + "&action=update",
                        success: function (response) {
                            Swal.fire({
                                title: 'User updated successfully!',
                                icon: 'success',
                                confirmButtonColor: '#95b75d',
                                confirmButtonText: 'Ok'
                            })
                            $("#editmedicine").modal('hide');
                            $("#medicines")[0].reset();
                            showMedicine();
                        }
                    });
                }
            });
        }
    });

    // Delete ajax request
    $("body").on("click", ".delBtn", function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {
                        del_id: del_id,
                        },
                    success: function (response) {
                        showMedicine();
                        tr.css('background-color', '#ff6666');
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'User deleted Successfully!',
                            icon: 'success'
                        })
                        //                            Swal.fire(
                        //                                'Deleted!',
                        //                                'User deleted Successfully!',
                        //                                'success'
                        //                            )
                        showMedicine();
                    }
                });
            }
        });
    });

    //show user details
    $("body").on("click", ".infoBtn", function (e) {
        e.preventDefault();
        info_id = $(this).attr('id');
        $.ajax({
            url: "action.php",
            type: "POST",
            data: {
                info_id: info_id
            },
            success: function (response) {
                //                console.log(response);
                data = JSON.parse(response);
                Swal.fire({
                    title: '<strong>User Info : ID(' + data.id + ')</strong>',
                    icon: 'info',
                    html: '<b>First Name : </b>' + data.first_name + '<br><b>Last Name : </b>' + data.last_name + '<br><b>Email : </b>' + data.email + '</br><b>Phone : </b>' + data.phone,
                    showCancelButton: true
                })
            }
        });
    });

});
