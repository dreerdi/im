<?php

	if ($_POST['addBasketIsOrder'] == 1) {
		$number = $basket->setAddBasketIsOrder();
		$_SESSION['card'] = NULL;
		header("Location: ..\index.php?dispatch=basket&add_number_order=$number");
	}

?>