<?php 
	
	$controllers = array("question" => array("index","newQ","detail","delete"),
							"calendar" => array("index", "newC", "detail") );
	
	if(array_key_exists($controller, $controllers)){
		if(in_array($action, $controllers[$controller])){
			call($controller, $action);
		} 
	}
	
	function call($controller, $action){
		require_once('controllers/' . $controller . 'Controller.php');
		
		switch($controller){
			case 'question' : 
				$controller = new questionController();
				break;
			case 'calendar' :
				$controller = new calendarController();
				break;
		}
		
		$controller ->{ $action }();
	}
?>
