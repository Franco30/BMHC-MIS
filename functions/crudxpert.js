$(document).ready(function() {
  showXpertTable();
});

function showXpertTable() {
  $.ajax({
    url: "tables/resultsxpert.php",
    type: "POST",
    async: false,
    data: {
      show: 1
    },
    success: function(response) {
      $("#xpertTable").html(response);
      var table = $("#xperttable").DataTable();
    }
  });
}
