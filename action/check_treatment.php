<?php
$child_id = $_POST['child_id'];
$treatment_type = $_POST['treatment_type'];

require '../require/config.php';

$q1 = $conn->query ("SELECT * FROM `immunization_treatment` WHERE BINARY `treatment_type` = '$treatment_type' && `child_id` = '$child_id'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>