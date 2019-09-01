<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $medicine_id = $_POST['medicine_id'];
    $medicine_name = $_POST['medicine_name'];
    $medicine_type = $_POST['medicine_type'];
    $medicine_description = $_POST['medicine_description'];

    require '../require/config.php';

    $conn->query("UPDATE `medicine` SET `medicine_name` = '$medicine_name', `medicine_type` = '$medicine_type', `medicine_description` = '$medicine_description' WHERE `medicine_id` = '$medicine_id'") or die(mysqli_error());
}
?>