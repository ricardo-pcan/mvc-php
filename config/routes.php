<?php 
	$router = new \Klein\Klein();

	// Routes
		$router->response('GET', '/', HomeController::index());

	$router->dispatch();
?>