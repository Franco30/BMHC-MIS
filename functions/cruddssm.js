$(document).ready(function() {
  showDSSMTable();
});

function showDSSMTable() {
  $.ajax({
    url: "tables/resultsdssm.php",
    type: "POST",
    async: false,
    data: {
      show: 1
    },
    success: function(response) {
      $("#dssmTable").html(response);
      var table = $("#dssmtable").DataTable();
    }
  });
}
