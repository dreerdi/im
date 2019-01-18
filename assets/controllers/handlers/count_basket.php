<?php

	// уменьшение/прибавление кол-ва товара, удаление позиции из корзины

	$basket->getCountBasket($_REQUEST['number_basket'] - 1, $_REQUEST['flug']);
	header("Location: ..\index.php?dispatch=basket");
			

?>