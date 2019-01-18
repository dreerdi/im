<?php

	if ($_REQUEST['addBasketProduct'] == 'yes') {
		$basket->setAddProduct($_REQUEST['id']);
		$_SESSION['total_basket'] = $basket->getTotalBasket($_SESSION['card']);		
		
		header("Location: ..\index.php?dispatch=home");
	}

?>