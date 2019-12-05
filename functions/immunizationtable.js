$(document).ready(function () {
    showPatientImmunization();
});

function showPatientImmunization() {
    $.ajax({
        url: 'tables/immunization_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#immunizationpatientTable').html(response);
            var table = $('#immunizationpatienttable').DataTable();
        }
    });
}
