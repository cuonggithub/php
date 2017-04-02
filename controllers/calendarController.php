<?php
	
	require_once('models/calendar.php');

	class calendarController{
		
		public function index(){
			$calendars = Calendar::all();
			require_once('views/calendar/index.php');
		}
		
		public function newC(){
			
			$inputDate = "";
			
			if($_SERVER["REQUEST_METHOD"] != "POST"){
				require_once('views/calendar/new.php');
				return;
			}
			
			$inputDate = $_POST['inputdate'];
			$inputDate1 = $_POST['inputdate1'];
			
			if(!empty($inputDate) || !empty($inputDate1)){
				$id = Calendar::insert($inputDate, $inputDate1);
				header("Location: ./index.php?controller=calendar&action=detail&id=$id", true);
			}
		}
		
		public function detail(){
			
			$record = Calendar::detail($_GET['id']);
			require_once('views/calendar/detail.php');
		}
	}
?>