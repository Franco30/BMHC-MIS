<?php
session_start();
require ('../require/config.php');
if(ISSET($_POST['login']))
{	
	$username = $_POST['username'];
	$password = $_POST['password'];
	date_default_timezone_set('Asia/Manila');
	$date=date("F j, Y, g:i a");

	$user = mysqli_real_escape_string($conn,$username);
	$pass = mysqli_real_escape_string($conn,$password);
	
	//    --- When A User Wants To Sign In ---
	//1 ---> Get Input From User Which Is The User`s Password
	//2 ---> Fetch The Hashed Password From Your Database
	//3 ---> Compare The User`s Input And The Hashed Password

	$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `users` WHERE BINARY `username` = '$user' && `status` = '1'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$hashed_password = $fetch['password'];
      
    $valid = $query->num_rows;
    $position = $fetch['position'];
    $user_id = $fetch['user_id'];
        
    if(password_verify($pass,$hashed_password))
	{
      if($valid > 0)
         {	
            if ($position == 'Midwife' || $position == 'Medical Officer' || $position == 'Nurse') 
                  {
                     echo "Login Successfully";
                     $_SESSION['user_id'] = $fetch['user_id'];
                     $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `user_id` = '$user_id'") or die(mysqli_error());
                  }
		
		    if ($position != 'Midwife' && $position != 'Nurse' && $position != 'Medical Officer') 
                  {
                   echo "ok2";
                   $_SESSION['user_id'] = $fetch['user_id'];
                   $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `user_id` = '$user_id'") or die(mysqli_error());
                  }			
	     } 
	}
    else
	{
         echo "Username or Password does not exist"; // wrong details 
	}		

}	
?>