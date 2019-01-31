<?php
	
	$error = "";
	if ($_REQUEST['auth-error'] == 'login') {
		$error = "Такого пользователя нет";
	}
	if ($_REQUEST['auth-error'] == 'password') {
		$error = "Введен не корректный пароль";
	}
	require_once './assets/views/form_auth.php';

?>