<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    $child_name = $_POST['child_name'];
    $gender2 = $_POST['gender2'];
    $mother_name = $_POST['mother_name'];
    $mother_education = $_POST['mother_education'];
    $mother_occupation = $_POST['mother_occupation'];
    $father_name = $_POST['father_name'];
    $father_education = $_POST['father_education'];
    $father_occupation = $_POST['father_occupation'];
    $date_first_seen = $_POST['date_first_seen'];
    $birthdate2 = $_POST['birthdate2'];
    $birth_weight = $_POST['birth_weight'];
    $place_of_delivery = $_POST['place_of_delivery'];
    $birth_register_date = $_POST['birth_register_date'];
    $purok2 = $_POST['purok2'];
    $street_address2 = $_POST['street_address2'];

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    $remarks = "Registered $child_name as new Child Patient";

    require '../require/config.php';
    $conn->query("INSERT INTO `patient_child` VALUES('', '$child_name', '$gender2', '$mother_name', '$mother_education', '$mother_occupation', '$father_name', '$father_education', '$father_occupation', '$date_first_seen', '$birthdate2', '$birth_weight', '$place_of_delivery', '$birth_register_date', '$purok2', '$street_address2', 'Registered', '$month', '$year')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>
