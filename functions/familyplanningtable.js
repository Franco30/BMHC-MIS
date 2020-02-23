$(document).ready(function () {
    showFPPatient();
});

function showFPPatient() {
    $.ajax({
        url: 'tables/fp_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#fppatientTable').html(response);
            var table = $('#fppatienttable').DataTable({
                "aaSorting": [[4, 'asc']]
            });
        }
    });
}
