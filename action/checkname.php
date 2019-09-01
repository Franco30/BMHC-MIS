<?php

$fullname = $_POST['fullname'];

require '../require/config.php';

$q1 = $conn->query ("select * from `users` where `fullname` = '$fullname'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>