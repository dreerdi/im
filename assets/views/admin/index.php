<?php

	session_start();

	$mysqli = mysqli_connect('localhost', 'root', '', 'im');
	if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
	}

	$q = "SHOW TABLES FROM im";
	$query = mysqli_query($mysqli, $q);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	
	/*echo "<pre>";
	var_dump($result);
	echo "</pre>";*/

	//echo $result[0]['Tables_in_im'];
	foreach ($result as $key => $value) {
		//$_SESSION['$key'] = $value['Tables_in_im'];
		//var_dump($value);
		echo "<a href='view.php?dispatch=".$value['Tables_in_im']."'>".$value['Tables_in_im']."</a><br>";

	}
	(string) $i = $result[1]['Tables_in_im'];
	$q1 = "SHOW FIELDS FROM `$i`"; //SHOW FULL COLUMNS FROM
	//var_dump($q1);
	$query1 = mysqli_query($mysqli, $q1);
	echo "<pre>";
	var_dump($query1);
	echo "</pre>";
	$result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC);
	echo "<pre>";
	var_dump($result1);
	//echo $result1[0]['Field'];
	echo "</pre>";
?>