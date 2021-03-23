<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    
//    $chicks_id = $_POST['chicks_id'];
//    $mname = $_POST['mname'];
//    $fblink = $_POST['fblink'];
//    $ig = $_POST['ig'];
//    $bp = $_POST['bp'];
    
    $chicks_id = $conn->real_escape_string($_POST['chicks_id']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $fblink = $conn->real_escape_string($_POST['fblink']);
    $ig = $conn->real_escape_string($_POST['ig']);
    $bp = $conn->real_escape_string($_POST['bp']);

    require '../require/config.php';
    
    $stmt = $conn->prepare("UPDATE `chicks` SET `mname` = ?, `fblink` = ?, `ig` = ?, `bp` = ? WHERE `chicks_id` = ?") or die(mysqli_error());
    $stmt->bind_param("ssssi", $mname, $fblink, $ig, $bp, $chicks_id);
    $stmt->execute();

//    $conn->query("UPDATE `chicks` SET `mname` = '$mname', `fblink` = '$fblink', `ig` = '$ig', `bp` = '$bp' WHERE `chicks_id` = '$chicks_id'") or die(mysqli_error());
    
}

?>