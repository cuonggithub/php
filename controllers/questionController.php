<?php
	require_once('models/question.php');
	
	class QuestionController{
		
		public function index(){
			
			$questions = Question::all();
			require_once('views/question/index.php');
		}
		
		public function newQ(){
			
			$name = $email = $gender = $title = $content = "";
			$nameError = $emailError = $genderError = $titleError = $contentError = "";
			$isError = false;
			
			if($_SERVER["REQUEST_METHOD"] != "POST"){
				require_once('views/question/new.php');
				return;
			}
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			if(array_key_exists("gender", $_POST)){
				$gender = $_POST["gender"];
			}
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			if(strlen($name) > 20){
				$nameError = "20文字以内";
				$isError = true;
			}else if(empty($name)){
				$nameError = "必須";
				$isError = true;
			}
			
			if(empty($email)){
				$emailError = "必須";
				$isError = true;
			}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailError = "正しくないメールアドレスです";
			}
			
			if(empty($gender)){
				$genderError = "必須";
				$isError = true;
			}
			
			if($isError){
				require_once('views/question/new.php');
				return;
			}
			
			$id = Question::insert($name, $email, $gender, $title, $content);
			
			header("Location: ./index.php?controller=question&action=detail&id=$id", true);
		}
		
		public static function detail(){
			
			$record = Question::detail($_GET['id']);
			require_once('views/question/detail.php');
		}
	}
?>
