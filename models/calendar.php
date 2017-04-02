<?php
	
	require_once('connection.php');

	class calendar{
		
		public $id;
		public $inputDate;
		public $inputDate1;
		
		public function __construct($id, $inputDate, $inputDate1){
			$this->id = $id;
			$this->inputDate = $inputDate;
			$this->inputDate1 = $inputDate1;
		}
		
		public static function all(){
			$list = array();
			$conn = Connection::getInstance();
			$result = $conn->query('select * from calendar');
			
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					$list[] = new calendar($row['id'], $row['inputDate'], $row['inputDate1']);
				}
			}else{
				echo 'Error:' . $conn->error;
				exit;
			}
			$conn->close();
			return $list;
		}
		
		public function insert($inputDate, $inputDate1){
			$conn = Connection::getInstance();
			
			$inputDate = '\'' . $inputDate .'\'';
			$inputDate1 = '\'' . $inputDate1 .'\'';
			
			$sql = "INSERT INTO calendar (inputDate, inputDate1) VALUES ($inputDate, $inputDate1)";
			
			$id = "";
			
			if($conn->query($sql) === true){
				$id = $conn->insert_id;
			}else{
				$calendar = new calendar();
				echo "Error:" . $conn->error;
				exit;
			}
			$conn->close();
			return $id;
		}
		
		public static function detail($id){
			$conn = Connection::getInstance();
			$result = $conn->query("SELECT * FROM calendar WHERE id = $id");
			if($result){
				$calendar = $result->fetch_object();
			}else{
				$calendar = new calendar();
				echo "Error:" . $conn->error;
				exit;
			}
			
			$conn->close();
			
			return $calendar;
		}
	}
?>