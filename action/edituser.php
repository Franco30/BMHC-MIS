<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $license = $_POST['license'];
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userid=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    if ($password ==""){
        require '../require/config.php';
        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `license` = '$license', `position` = '$position', `username` = '$username' WHERE `user_id` = '$user_id'") or die(mysqli_error());
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());
    }
    else {
        $pass1 = sha1($password);
        $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
        $pass2 = $salt.$pass1;
        

        require ('../require/config.php');
        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `license` = '$license', `position` = '$position', `username` = '$username',  `password` = '$pass2' WHERE `user_id` = '$user_id'") or die(mysqli_error());
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());

    }
}
?>