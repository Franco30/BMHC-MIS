<?php
//delete.php
require '../require/config.php';

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM `users` WHERE `user_id` = '".$id."'";
  mysqli_query($conn, $query);
 }
}
?>