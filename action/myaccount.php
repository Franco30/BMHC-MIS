<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $userid=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    if ($password ==""){
        require ('../require/config.php');
        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `username` = '$username' WHERE `user_id` = '$userid'") or die(mysqli_error());
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());
    }
    else {
//        $pass = sha1($password);
//        $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
//        $pass1 = $salt.$pass;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        require ('../require/config.php');
        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `username` = '$username',  `password` = '$hashed_password' WHERE `user_id` = '$userid'") or die(mysqli_error());

        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());

    }

}
?>