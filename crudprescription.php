<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `medicine` GROUP BY medicine_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['medicine_name'];
	$q1 = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['medicine']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script>
  $('#grid_table').jsGrid({

    width: "100%",
    height: "460px",

    filtering: true,
    inserting: true,
    editing: true,
    sorting: true,
    paging: true,
    autoload: true,
    pageSize: 10,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete data?",

    controller: {
      loadData: function(filter) {
        return $.ajax({
          type: "GET",
          url: "action/fetch_data.php",
          data: filter
        });
      },
      insertItem: function(item) {
        return $.ajax({
          type: "POST",
          url: "action/fetch_data.php",
          data: item
        });
      },
      updateItem: function(item) {
        return $.ajax({
          type: "PUT",
          url: "action/fetch_data.php",
          data: item
        });
      },
      deleteItem: function(item) {
        return $.ajax({
          type: "DELETE",
          url: "action/fetch_data.php",
          data: item
        });
      },
    },

    fields: [{
        name: "id",
        type: "hidden",
        css: 'hide'
      },
      {
        name: "medicine",
        type: "select",
        items: [{
            Name: "",
            Id: ''
          },
          {
            Name: "celine",
            Id: 'Celine'
          },
          {
            Name: "paracetamol",
            Id: 'Paracetamol'
          }
        ],
        valueField: "Id",
        textField: "Name",
        validate: "required"
      },
      {
        name: "breakfast",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        name: "lunch",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        name: "dinner",
        type: "text",
        width: 50,
        validate: function(value) {
          if (value > 0) {
            return true;
          }
        }
      },
      {
        type: "control"
      }
    ]

  });

</script>
