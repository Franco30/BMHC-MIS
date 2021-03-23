<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $patient_id = $conn -> real_escape_string($_POST['patient_id']);
    $patient_name = $conn -> real_escape_string($_POST['patient_name']);
    $birthdate = $conn -> real_escape_string($_POST['birthdate']);
    $age = $conn -> real_escape_string($_POST['age']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $civilstatus = $conn -> real_escape_string($_POST['civilstatus']);
    $streetaddress = $conn -> real_escape_string($_POST['streetaddress']);
    $purok = $conn -> real_escape_string($_POST['purok']);
    $height = $conn -> real_escape_string($_POST['height']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $contact_no = $conn -> real_escape_string($_POST['contact_no']);
    $region_province = $conn -> real_escape_string($_POST['region_province']);
    $occupation = $conn -> real_escape_string($_POST['occupation']);
    $philhealth_no = $conn -> real_escape_string($_POST['philhealth_no']);
    $contact_person = $conn -> real_escape_string($_POST['contact_person']);
    $emergency_no = $conn -> real_escape_string($_POST['emergency_no']);
    $status = $conn -> real_escape_string($_POST['status']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    $remarks = "Edited $patient_name Patient Profile";

    require '../require/config.php';
    
    $stmt = $conn->prepare("UPDATE `patient` SET `patient_name` = ?, `civil_status` = ?, `age` = ?, `gender` = ?, `street_address` = ?, `purok` = ?, `birthdate` = ?, `height` = ?, `weight` = ?, `contact_no` = ?, `region_province` = ?, `occupation` = ?, `philhealth_no` = ?, `contact_person` = ?, `emergency_no` = ?, `status` = ? WHERE `patient_id` = ?") or die(mysqli_error());
    $stmt->bind_param("ssissssiisssssssi", $patient_name, $civilstatus, $age, $gender, $streetaddress, $purok, $birthdate, $height, $weight, $contact_no, $region_province, $occupation, $philhealth_no, $contact_person, $emergency_no, $status, $patient_id);
    $stmt->execute();
    
//    $conn->query("UPDATE `patient` SET `patient_name` = '$patient_name', `civil_status` = '$civilstatus', `birthdate` = '$birthdate', `age` = '$age', `gender` = '$gender', `purok` = '$purok', `street_address` = '$streetaddress', `height` = '$height', `weight` = '$weight', `contact_no` = '$contact_no', `region_province` = '$region_province', `occupation` = '$occupation', `philhealth_no` = '$philhealth_no', `contact_person` = '$contact_person', `emergency_no` = '$emergency_no', `status` = '$status' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>