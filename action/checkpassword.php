<?php
require '../require/config.php';
$password = $_POST['password'];

$pass = mysqli_real_escape_string($conn,$password);
    
           $pass1 = sha1($pass);
           $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
           $pass1 = $salt.$pass1;

$q1 = $conn->query ("SELECT * FROM `users` WHERE `password` = '$pass1'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>