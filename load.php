<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=bmhc', 'root', '');

$data = array();

$query = "SELECT * FROM patient,follow_up WHERE patient.patient_id = follow_up.patient_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id'   => $row["follow_up_id"],
        'title'   => $row["patient_name"]." ".$row["patient_service"],
        'start'   => $row["follow_up_date"]
    );
}

echo json_encode($data);

?>