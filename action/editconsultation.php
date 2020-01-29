<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $consultation_id = $conn -> real_escape_string($_POST['consultation_id']);
    $date_today = $conn -> real_escape_string($_POST['date_today']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $height = $conn -> real_escape_string($_POST['height']);
    $temp = $conn -> real_escape_string($_POST['temp']);
    $headfamily = $conn -> real_escape_string($_POST['headfamily']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $rr = $conn -> real_escape_string($_POST['rr']);
    $pr = $conn -> real_escape_string($_POST['pr']);
    $complaints = $conn -> real_escape_string($_POST['complaints']);
    $pefindings = $conn -> real_escape_string($_POST['pefindings']);
    $diagnosis = $conn -> real_escape_string($_POST['diagnosis']);
    $labrequest = $conn -> real_escape_string($_POST['labrequest']);
    
//        $C = "";
//    foreach($complaints as $value) {
//        $C .= $value . ", ";  
//    }
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Edited $patient_name Consultation Form";

    require '../require/config.php';
//    $C = substr($C, 0, -2);
    $conn->query("UPDATE `consultation` SET `consultation_date` = '$date_today', `head_of_the_family` = '$headfamily', `weight` = '$weight', `height` = '$height', `bp` = '$bp', `temp` = '$temp', `rr` = '$rr', `pr` = '$pr', `complaints` = '$complaints', `pe_findings` = '$pefindings', `diagnosis` = '$diagnosis', `lab_request` = '$labrequest' WHERE `consultation`.`consultation_id` = '$consultation_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
