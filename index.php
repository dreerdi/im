<?php
	$current_page = substr(basename(__FILE__), 0, -4);    

	$dispatch = $_REQUEST['dispatch'];
	$lkzakaz = $_REQUEST['lkzakaz'];
	if (count($_REQUEST) == 0) {
		$dispatch = 'home';
	};
	if (!file_exists("assets/controllers/$dispatch.php")) {
		$dispatch = '404';
	} 
	$article_id = $_REQUEST['id'];
?>
<? require_once "templates/header.php"; ?> 

<? require_once "assets/controllers/$dispatch.php";?>

<? require_once "templates/footer.php"; ?>   