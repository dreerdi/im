<?php
	
	//если пользователь вышел, то идет обнуление логина и id в сессии
	if($_REQUEST['exit_user'] == 1) {
		$_SESSION['login'] = NULL;
		$_SESSION['user_id'] = NULL;
	}

	//если пользователь авторизуется в системе, то происходит проверка наличия данных в БД
	if(isset($_REQUEST['auth'])) {
		require_once 'assets/models/User.php';
		$user = new User;
		if($user->getUser($_REQUEST['exampleInputLogin1'])[login] != NULL) {
			$_SESSION['login'] = $user->getUser($_REQUEST['exampleInputLogin1'])[login];
			$_SESSION['user_id'] = $user->getUser($_REQUEST['exampleInputLogin1'])[user_id];
		}
	}

	if ($_SESSION['login'] == NULL) {
		$login = 0;
		$_SESSION['login'] = 0;
		$_SESSION['user_id'] = 0;
	} else {
		$login = $_SESSION['login'];
	}

?>