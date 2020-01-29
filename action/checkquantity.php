<?php
require '../require/config.php';

$quantity = $conn -> real_escape_string($_POST['quantity']);
$medicine_name = $conn -> real_escape_string($_POST['medicine_name']);

require '../require/config.php';

$q1 = $conn->query ("SELECT * FROM `medicine` WHERE `running_balance` <= '$quantity' && `medicine_id` = '$medicine_name' ") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>