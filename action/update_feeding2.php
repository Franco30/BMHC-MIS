<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $type_of_feeding_2_id = $conn -> real_escape_string($_POST['type_of_feeding_2_id']);
    $vit_a = $conn -> real_escape_string($_POST['vit_a']);
    $six_months = $conn -> real_escape_string($_POST['six_months']);
    $one_year = $conn -> real_escape_string($_POST['one_year']);
    $nbs = $conn -> real_escape_string($_POST['nbs']);
    $vit_k = $conn -> real_escape_string($_POST['vit_k']);

    require '../require/config.php';

    $conn->query("UPDATE `type_of_feeding_2` SET `vit_a` = '$vit_a', `6_months` = '$six_months', `1_year` = '$one_year', `nbs` = '$nbs', `vit_k` = '$vit_k' WHERE `type_of_feeding_2_id` = '$type_of_feeding_2_id'") or die(mysqli_error());
}
?>