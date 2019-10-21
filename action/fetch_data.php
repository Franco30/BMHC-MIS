<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':date_time'   => "%" . $_GET['date_time'] . "%",
  ':medicine'   => "%" . $_GET['medicine'] . "%",
  ':breakfast'   => "%" . $_GET['breakfast'] . "%",
  ':lunch'     => "%" . $_GET['lunch'] . "%",
  ':dinner'    => "%" . $_GET['dinner'] . "%"
 );
 $query = "SELECT * FROM consultation WHERE date_time LIKE :date_time AND  medicine LIKE :medicine AND breakfast LIKE :breakfast AND lunch LIKE :lunch AND dinner LIKE :dinner ORDER BY consultation_id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'consultation_id'    => $row['consultation_id'],   
   'date_time'  => $row['date_time'],
   'medicine'  => $row['medicine'],
   'breakfast'   => $row['breakfast'],
   'lunch'    => $row['lunch'],
   'dinner'   => $row['dinner']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':date_time'  => $_POST['date_time'],
  ':medicine'  => $_POST['medicine'],
  ':breakfast'  => $_POST["breakfast"],
  ':lunch'    => $_POST["lunch"],
  ':dinner'   => $_POST["dinner"]
 );

 $query = "INSERT INTO consultation (date_time, medicine, breakfast, lunch, dinner) VALUES (:date_time, :medicine, :breakfast, :lunch, :dinner)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':consultation_id'   => $_PUT['consultation_id'],
  ':date_time'  => $_PUT['date_time'],
  ':medicine' => $_PUT['medicine'],
  ':breakfast' => $_PUT['breakfast'],
  ':lunch'   => $_PUT['lunch'],
  ':dinner'  => $_PUT['dinner']
 );
 $query = "UPDATE consultation 
 SET  date_time = :date_time, 
 medicine = :medicine, 
 breakfast = :breakfast, 
 lunch = :lunch, 
 dinner = :dinner 
 WHERE consultation_id = :consultation_id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM consultation WHERE consultation_id = '".$_DELETE["consultation_id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>