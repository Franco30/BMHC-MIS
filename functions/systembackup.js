$(document).ready(function () {
    showDBActivity();
    //export
    $(document).on('click', '#export', function () {
        //        if(confirm('Are you sure you want to export database as SQL File?')){
        Swal.fire({
            title: 'Are you sure you want to add this new patient?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#E04B4A',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "dbbackup/exportdatabase.php",
                    success: function () {
                        //                        $('#alert').slideDown();
                        //                        $('#alerttext').html('<span class="fa fa-check"></span> Database Exported Successfully!');
                        //                        setTimeout(function () {
                        //                            $('#alert').fadeOut('slow');
                        //                        }, 1500);
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Database Exported Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        showDBActivity();
                    }
                });

            }
        });

    });
});



//show database backup activity
function showDBActivity() {
    $.ajax({
        url: 'tables/systembackupactivity.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#exportimportTable').html(response);
            var table = $('#exportimporttable').DataTable();
        }
    });
}
