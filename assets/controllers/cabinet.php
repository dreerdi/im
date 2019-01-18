<?php 
	
	require_once './assets/models/User.php';
	$user = new User;

	if ($cabinet_orders == NULL) {
		require_once './assets/views/cabinet.php';
	} else {
		require_once './assets/views/cabinetzakaz.php';
	}

?>