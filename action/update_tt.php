<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $tetanus_toxoid_id = $_POST['tetanus_toxoid_id'];
    $tt1 = $_POST['tt1'];
    $tt2 = $_POST['tt2'];
    $tt3 = $_POST['tt3'];
    $tt4 = $_POST['tt4'];
    $tt5 = $_POST['tt5'];
    $ttl = $_POST['ttl'];

    require '../require/config.php';

    $conn->query("UPDATE `tetanus_toxoid` SET `tt1` = '$tt1', `tt2` = '$tt2', `tt3` = '$tt3', `tt4` = '$tt4', `tt5` = '$tt5', `ttl` = '$ttl' WHERE `tetanus_toxoid_id` = '$tetanus_toxoid_id'") or die(mysqli_error());
}
?>