<?php

class Patient {
    public $patient_id;
    public $patient_name;
}


class PatientRepository {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    private function read($row) {
        $result = new Patient();
        $result->patient_id = $row["patient_id"];
        $result->patient_name = $row["patient_name"];
        return $result;
    }

    public function getAll() {
        $sql = "SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]' ";
        $q = $this->db->prepare($sql);
        $q->execute();
        $rows = $q->fetchAll();

        $result = array();
        foreach($rows as $row) {
            array_push($result, $this->read($row));
        }
        return $result;
    }

}



$db = new PDO('mysql:host=localhost;dbname=bmhc', 'root', '');
$patients = new PatientRepository($db);


switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $patients->getAll();
        break;
}


header("Content-Type: application/json");
echo json_encode($result);

?>
