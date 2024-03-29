<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    require '../require/config.php';
    
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
    $today = date("Y-m-d"); 
    $remarks = "Registered $child_name as new Child Patient";
    
    $finaladdress = "$street_address2, Mansilingan";
    $status = "Registered";

    require '../require/config.php';
    
    $stmt = $conn->prepare("INSERT INTO `patient_child` (child_name, gender, mother_name, mother_education, mother_occupation, father_name, father_education, father_occupation, date_first_seen, birthdate, birth_weight, place_of_delivery, birth_register_date, purok, street_address, status, month, year, date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)") or die(mysqli_error());
    $stmt->bind_param("sssssssssssssssssss", $child_name, $gender2, $mother_name, $mother_education, $mother_occupation, $father_name, $father_education, $father_occupation, $date_first_seen, $birthdate2, $birth_weight, $place_of_delivery, $birth_register_date, $purok2, $finaladdress, $status, $month, $year, $today);
    $stmt->execute();
    
//    $conn->query("INSERT INTO `patient_child` VALUES('', '$child_name', '$gender2', '$mother_name', '$mother_education', '$mother_occupation', '$father_name', '$father_education', '$father_occupation', '$date_first_seen', '$birthdate2', '$birth_weight', '$place_of_delivery', '$birth_register_date', '$purok2', '$street_address2, Mansilingan', 'Registered', '$month', '$year', '$today')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>
