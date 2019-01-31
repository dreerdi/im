<?php

	if ($_REQUEST['addBasketProduct'] == 'yes') {
		$basket->setAddProduct($_REQUEST['id']);
		$_SESSION['total_basket'] = $basket->getTotalBasket($_SESSION['card']);		
		(string) $old_dispatch = $_REQUEST['old_dispatch'];
		header("Location: ..\index.php?id=".$_REQUEST['id']."&dispatch=".$old_dispatch);
	}

?>