<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    $medicine_name = $conn -> real_escape_string($_POST['medicine_name']);
    $medicine_type = $conn -> real_escape_string($_POST['medicine_type']);
    $medicine_category = $conn -> real_escape_string($_POST['medicine_category']);

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');	
    $time=date("g:i a");
    $date=date("F j, Y");
    $new_date_format = date('F j, Y g:i a');
    $date_time=date("F j, Y - g:i a");
    $remarks = "Added $medicine_name as new medicine";

    require '../require/config.php';

        $q1 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_name` = '$medicine_name'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $check = $q1->num_rows;

        $q2 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_type` = '$medicine_type'") or die(mysqli_error());
        $f2 = $q2->fetch_array();
        $check2 = $q2->num_rows;

    if($check > 0 && $check2 > 0){
        echo "Medicine already exist!";
    }else{

    $conn->query("INSERT INTO `medicine` VALUES('', '$medicine_name', '$medicine_type', '$medicine_category', '', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    $conn->close();
}
}
?>
