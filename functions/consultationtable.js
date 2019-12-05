$(document).ready(function () {
    showPatientConsultation();
});

function showPatientConsultation() {
    $.ajax({
        url: 'tables/consultation_patient_table.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#consultationpatientTable').html(response);
            var table = $('#consultationpatienttable').DataTable();
        }
    });
}
