<?php

	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass', '');
	define('db_name', 'bmhc');
	
	class Database{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
		
		public function __construct(){
			$this->connect();
		}
		
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
        
        
		public function checkmedicine($medicine_name,$medicine_type){
			$stmt = $this->conn->prepare("SELECT * FROM `medicine` WHERE `medicine_name` = '$medicine_name' && `medicine_type` = '$medicine_type'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
                $fetch = $result->fetch_array();
                return array(
					'medicine_name'=> $fetch['medicine_name'],
                    'medicine_type'=> $fetch['medicine_type'],
					'count'=>$valid
				);
                
			}	
		}
		
		public function read(){
			$data = array();
			$stmt = $this->conn->prepare("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$result->fetch_all(MYSQLI_ASSOC);
				foreach ($result as $row) {
					$data[] = $row;
				}
				return $data;
			}	
		}
		
		
		public function totalRowCount(){
            $stmt = $this->conn->prepare("SELECT * FROM `medicine`") or die($this->conn->error);
            if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'medicine_id'=> $fetch['medicine_id'],
					'count'=>$valid
				);
			}
            $stmt->execute();
            $t_rows = $stmt->rowCount();
            return $t_rows;
        }
		
		public function getUserById($medicine_id){
			$stmt = $this->conn->prepare("SELECT * FROM `medicine` WHERE `medicine_id` = '$medicine_id'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array(MYSQLI_ASSOC);
				return $fetch;
			}	
		}
		
		public function insert($medicine_name,$medicine_type,$medicine_category){
            require '../require/logincheck.php';
            $user_id=$_SESSION['user_id'];
            $year = date("Y", strtotime("+8 HOURS"));
            date_default_timezone_set('Asia/Manila');	
            $time=date("g:i a");
            $date=date("F j, Y");
            $new_date_format = date('F j, Y g:i a');
            $date_time=date("F j, Y - g:i a");
            $remarks = "Added $medicine_name as new medicine";
            $rb = 0;
            
			$stmt = $this->conn->prepare("INSERT INTO `medicine` (medicine_name, medicine_type, medicine_category, running_balance, date_time_call) VALUES(?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $medicine_name, $medicine_type, $medicine_category, $rb, $date_time);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
            
            $stmt = $this->conn->prepare("INSERT INTO `users_activity_log` VALUES(?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $user_id, $remarks, $date_time);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
		public function update($medicine_id,$medicine_name,$medicine_type,$medicine_category,$running_balance){
			$stmt = $this->conn->prepare("UPDATE students SET medicine_name=?, medicine_type=?, medicine_category=?, running_balance=? WHERE medicine_id=?") or die($this->conn->error);
			$stmt->bind_param("ssssi", $medicine_name, $medicine_type, $medicine_category, $running_balance, $medicine_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
	}	
?>