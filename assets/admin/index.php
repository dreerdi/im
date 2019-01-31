<?php
	
	session_start();

	$current_page = substr(basename(__FILE__), 0, -4);    

	if (isset($_REQUEST['dispatch']) && $_REQUEST['dispatch'] != '') {
		$dispatch = $_REQUEST['dispatch'];
	} else {
		$dispatch = 'home';
	}


	$mysqli = mysqli_connect('localhost', 'root', '', 'im');
	if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
	}
	var_dump($_REQUEST);

	require_once 'header.php';


	require "$dispatch.php";

	//require_once 'footer.php';
?>