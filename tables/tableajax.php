<?php

require "require/config.php";

$myArray = array();
if ($result = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'")) {

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
$myArray[] = $row;
}
echo json_encode($myArray);
}
