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
			$list = array();
			$conn = Connection::getInstance();
			$result = $conn->query("SELECT * FROM question ");
			if($result){
				while ($row = mysqli_fetch_assoc($result)){
					$list[] = new Question($row["id"], $row["name"], $row["email"], $row["gender"], $row["title"], $row["content"]);
				}
			}else{
				echo "Error:" . $conn->error;
				exit;
			}
			$conn->close();
			return $list;
		}
		
		function insert($name, $email, $gender, $title, $content){
			
			$conn = Connection::getInstance();
			
			$name = '\'' . $name .'\'';
			$email = '\'' . $email .'\'';
			$gender = '\'' . $gender .'\'';
			$title = '\'' . $title .'\'';
			$content = '\'' . $content .'\'';
			
<<<<<<< HEAD
			$sql = "INSERT INTO question (name, email, gender, title, content)
					VALUES ($name, $email, $gender, $title, $content)";
			
=======
			$sql = "INSERT IGNORE INTO question (name, email, gender, title, content)
					VALUES ($name, $email, $gender, $title, $content)";
			
			echo $sql;
			
>>>>>>> origin/master
			$id = "";
			if($conn->query($sql) === True){
				$id = $conn->insert_id;
			}else{
				echo "Error:" . $conn->error;
				exit;
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
				echo "Error:" . $conn->error;
				exit;
			}
			
			$conn->close();
			
			return $question;
		}
		
		public function __destruct(){
			
		}
	}
	
	
	
?>
