$(document).ready(function() {
  showDSTTable();
});

function showDSTTable() {
  $.ajax({
    url: "tables/resultsdst.php",
    type: "POST",
    async: false,
    data: {
      show: 1
    },
    success: function(response) {
      $("#dstTable").html(response);
      var table = $("#dsttable").DataTable();
    }
  });
}
