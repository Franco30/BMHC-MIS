$(document).ready(function () {
    showPatientPrenatal();
});

function showPatientPrenatal() {
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
