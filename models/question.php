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
			$result = $conn->query("SELECT * FROM question ");
			if($result){
				while ($row = mysqli_fetch_assoc($result)){
					$list[] = new Question($row["id"], $row["name"], $row["email"], $row["gender"], $row["title"], $row["content"]);
				}
			}
			$conn->close();
			return $list;
		}
		
		function insert($name, $email, $gender, $title, $content){
			
			$conn = Connection::getInstance();
			
			$sql = "Insert into question (name, email, gender, title, content)
					values ($name, $email, $gender, $title, $content)";
			$id = "";
			if($conn->query($sql) === True){
				$id = $conn->insert_id;
			}else{
				echo "Error:" . $conn->error;
			}
			$conn->close();
			
			return $id;
		}
		
		public static function detail($id){
			
			$conn = Connection::getInstance();
			$result = $conn->query("SELECT * FROM question WHERE id = $id");
			
			if($result){
				$question = $result->fetch_object();
			}else{
				$question = new Question();
			}
			
			$conn->close();
			
			return $question;
		}
		
		public function __destruct(){
			
		}
	}
	
	
	
?>