<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $type_of_feeding_2_id = $_POST['type_of_feeding_2_id'];
    $vit_a = $_POST['vit_a'];
    $six_months = $_POST['six_months'];
    $one_year = $_POST['one_year'];
    $nbs = $_POST['nbs'];
    $vit_k = $_POST['vit_k'];

    require '../require/config.php';

    $conn->query("UPDATE `type_of_feeding_2` SET `vit_a` = '$vit_a', `6_months` = '$six_months', `1_year` = '$one_year', `nbs` = '$nbs', `vit_k` = '$vit_k' WHERE `type_of_feeding_2_id` = '$type_of_feeding_2_id'") or die(mysqli_error());
}
?>