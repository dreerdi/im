<?php
	require_once 'Db.php';
	session_start();
	$login = $SESSION['login'];

	if ($login == NULL) {
		$auth = 0;
	} else {
		$auth = 1;
	}

	$current_page = substr(basename(__FILE__), 0, -4);    

	$dispatch = $_REQUEST['dispatch'];
	$cabinet_orders = $_REQUEST['cabinet_orders'];
	if (isset($_REQUEST['dispatch']) && $_REQUEST['dispatch'] != '') {
		$dispatch = $_REQUEST['dispatch'];
	} else {
		$dispatch = 'home';
	}


	if (!file_exists("assets/controllers/$dispatch.php")) {
		$dispatch = '404';
	} 
	$article_id = $_REQUEST['id'];
/*	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";*/

?>
<? require_once "assets/views/templates/header.php"; ?> 

<?  if ($dispatch != '404') {
		require_once "assets/controllers/$dispatch.php";
	} else {
		require_once "assets/views/templates/$dispatch.php";
	} 
?>

<? require_once "assets/views/templates/footer.php"; ?>   