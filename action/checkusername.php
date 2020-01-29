<?php
require '../require/config.php';
$username = $conn -> real_escape_string($_POST['username']);

require '../require/config.php';

$q1 = $conn->query ("select * from `users` where `username` = '$username'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>