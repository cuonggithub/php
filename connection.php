<?php
	
	class Connection{
		
		public static function getInstance(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "exampledb";
			
			return new mysqli($servername, $username, $password, $dbname);
		}
	}
	
?>