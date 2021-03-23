<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    
    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $child_name = $conn -> real_escape_string($_POST['child_name']);
    $gender2 = $conn -> real_escape_string($_POST['gender2']);
    $mother_name = $conn -> real_escape_string($_POST['mother_name']);
    $mother_education = $conn -> real_escape_string($_POST['mother_education']);
    $mother_occupation = $conn -> real_escape_string($_POST['mother_occupation']);
    $father_name = $conn -> real_escape_string($_POST['father_name']);
    $father_education = $conn -> real_escape_string($_POST['father_education']);
    $father_occupation = $conn -> real_escape_string($_POST['father_occupation']);
    $date_first_seen = $conn -> real_escape_string($_POST['date_first_seen']);
    $birthdate2 = $conn -> real_escape_string($_POST['birthdate2']);
    $birth_weight = $conn -> real_escape_string($_POST['birth_weight']);
    $place_of_delivery = $conn -> real_escape_string($_POST['place_of_delivery']);
    $birth_register_date = $conn -> real_escape_string($_POST['birth_register_date']);
    $purok2 = $conn -> real_escape_string($_POST['purok2']);
    $street_address2 = $conn -> real_escape_string($_POST['street_address2']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    $remarks = "Edited $child_name Child Patient Profile";

    require '../require/config.php';
    
    $stmt = $conn->prepare("UPDATE `patient_child` SET `child_name` = ?, `gender` = ?, `mother_name` = ?, `mother_education` = ?,  `mother_occupation` = ?, `father_name` = ?, `father_education` = ?, `father_occupation` = ?, `date_first_seen` = ?, `birthdate` = ?, `birth_weight` = ?, `place_of_delivery` = ?, `birth_register_date` = ?, `purok` = ?, `street_address` = ? WHERE `child_id` = ?") or die(mysqli_error());
    $stmt->bind_param("sssssssssssssssi", $child_name, $gender2, $mother_name, $mother_education, $mother_occupation, $father_name, $father_education, $father_occupation, $date_first_seen, $birthdate2, $birth_weight, $place_of_delivery, $birth_register_date, $purok2, $street_address2, $child_id);
    $stmt->execute();
    
//    $conn->query("UPDATE `patient_child` SET `child_name` = '$child_name', `gender` = '$gender2', `mother_name` = '$mother_name', `mother_education` = '$mother_education', `mother_occupation` = '$mother_occupation', `father_name` = '$father_name', `father_education` = '$father_education', `father_occupation` = '$father_occupation', `date_first_seen` = '$date_first_seen', `birthdate` = '$birthdate2', `birth_weight` = '$birth_weight', `place_of_delivery` = '$place_of_delivery', `birth_register_date` = '$birth_register_date', `purok` = '$purok2', `street_address` = '$street_address2' WHERE `child_id` = '$child_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>