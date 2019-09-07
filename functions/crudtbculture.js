$(document).ready(function() {
  showTBCultureTable();
});

function showTBCultureTable() {
  $.ajax({
    url: "tables/resultstbculture.php",
    type: "POST",
    async: false,
    data: {
      show: 1
    },
    success: function(response) {
      $("#tbcultureTable").html(response);
      var table = $("#tbculturetable").DataTable();
    }
  });
}
