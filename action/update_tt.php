<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $tetanus_toxoid_id = $conn -> real_escape_string($_POST['tetanus_toxoid_id']);
    $tt1 = $conn -> real_escape_string($_POST['tt1']);
    $tt2 = $conn -> real_escape_string($_POST['tt2']);
    $tt3 = $conn -> real_escape_string($_POST['tt3']);
    $tt4 = $conn -> real_escape_string($_POST['tt4']);
    $tt5 = $conn -> real_escape_string($_POST['tt5']);
    $ttl = $conn -> real_escape_string($_POST['ttl']);

    require '../require/config.php';

    $conn->query("UPDATE `tetanus_toxoid` SET `tt1` = '$tt1', `tt2` = '$tt2', `tt3` = '$tt3', `tt4` = '$tt4', `tt5` = '$tt5', `ttl` = '$ttl' WHERE `tetanus_toxoid_id` = '$tetanus_toxoid_id'") or die(mysqli_error());
}
?>