<?php
	class QuestionController{
		
		public function index(){
			
			$questions = Question::all();
			require_once('views/question/index.php');
		}
	}
?>