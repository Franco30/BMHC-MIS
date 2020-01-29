<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    require '../require/config.php';

    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $name = $conn -> real_escape_string($_POST['name']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $birthdate = $conn -> real_escape_string($_POST['birthdate']);

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");

    require '../require/config.php';
    $conn->query("INSERT INTO `brothers_and_sisters` VALUES('', '$child_id', '$name', '$gender', '$birthdate')") or die(mysqli_error());
}
?>
