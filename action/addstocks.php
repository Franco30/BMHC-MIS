<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
	$medicine_name = $_POST['med_name'];
    $quantity = $_POST['quantity2'];

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');	
    $time=date("g:i a");
    //$date=date("F j, Y");
    $date = date("m-d-y"); 
    $month=date("F");
    $date_time=date("F j, Y g:i a");

    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$received'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $query1 = $conn->query("SELECT * FROM `medicine` WHERE `medicine_id` = '$medicine_name'") or die(mysqli_error());
    $fetch1 = $query1->fetch_array();
    $patient_name =  $fetch['patient_name'];
    $md_name =  $fetch1['medicine_name'];
    $remarks = "added $quantity pieces of $md_name to stocks";

   	$conn->query("INSERT INTO `medicine_stocks` VALUES('', '$medicine_name', '$quantity', '$date $time')") or die(mysqli_error());
	
	$conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` + '$quantity' WHERE `medicine_id` = '$medicine_name'") or die(mysqli_error());
	
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>
