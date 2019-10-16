<?php

class Medicine {
    public $medicine_id;
    public $medicine_name;
}


class MedicineRepository {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    private function read($row) {
        $result = new Medicine();
        $result->medicine_id = $row["medicine_id"];
        $result->medicine_name = $row["medicine_name"];
        return $result;
    }

    public function getAll() {
        $sql = "SELECT * FROM medicine";
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
$medicines = new MedicineRepository($db);


switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $medicines->getAll();
        break;
}


header("Content-Type: application/json");
echo json_encode($result);

?>
