<?php
	require_once("connection.php");
	
	class Question{
		
		public $id;
		public $name;
		public $email;
		public $gender;
		public $title;
		public $content;
		
		public function __construct($id, $name, $email, $gender, $title, $content){
			$this->id = $id;
			$this->name = $name;
			$this->email = $email;
			$this->gender = $gender;
			$this->title = $title;
			$this->content = $content;
		}
		
		public static function all(){
			$list = [];
			$conn = Connection::getInstance();
			$request = $conn->query("SELECT * FROM question ");
			
			while ($row = mysqli_fetch_assoc($request)){
				$list[] = new Question($row["id"], $row["name"], $row["email"], $row["gender"], $row["title"], $row["content"]);
			}
			
			return $list;
		}
		
		function insert($name, $email, $gender, $title, $content){
			
			$conn = Connection::getInstance();
			
			$sql = "Insert into question (name, email, gender, title, content)
					values ($name, $email, $gender, $title, $content)";
			
			if($conn->query($sql) === True){
				echo "New record created successfully";
			}else{
				echo "Error:" . $conn->error;
			}
		}
		
		public function __destruct(){
			
		}
		
	}
	
	
	
?>