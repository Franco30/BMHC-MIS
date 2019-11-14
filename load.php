<?php

//load.php
require 'require/config2.php';

$data = array();

$query = "SELECT * FROM patient,prenatal_follow_up WHERE patient.patient_id = prenatal_follow_up.patient_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id'   => $row["follow_up_id"],
        'title'   => $row["patient_name"]." - ".$row["remarks"],
        'start'   => $row["follow_up_date_time"]
    );
}

echo json_encode($data);

?>