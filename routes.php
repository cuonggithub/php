<?php 
	$controllers = array('question' => ['index', 'new', 'detail', 'delete']);
	
	if(array_key_exists($controller, $controllers)){
		if(in_array($action, $controllers[$controller])){
			call($controller, $action);
		} 
	}
	
	function call($controller, $action){
		require_once('controllers/' . $controller . 'Controller.php');
		
		switch($controller){
			case 'question' : 
				require_once('models/question.php');
				$controller = new questionController();
		}
		
		$controller ->{ $action }();
	}
?>