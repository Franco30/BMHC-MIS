<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $child_id = $_POST['child_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");

    require '../require/config.php';
    $conn->query("INSERT INTO `brothers_and_sisters` VALUES('', '$child_id', '$name', '$gender', '$birthdate')") or die(mysqli_error());
}
?>
