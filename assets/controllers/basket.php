<?php 
	
	require_once './assets/models/Basket.php';

	$basket = new Basket;
	
	//если корзина не пустая, то выводится одна страница, иначе другая
	
	if ($basket->getBasket() !== 0) {
		$array = $_SESSION['card'];
		require_once './assets/views/basket.php';
	} else {
		//если было добавление корзины в заказы, то выводится номер заказа
		if (isset($_REQUEST['add_number_order'])) {
			$text = 'Ваш заказ под номером '.$_REQUEST['add_number_order'].' зарегистрирован';
		} else {
			$text = 'Корзина пустая';
		}		
		require_once './assets/views/basket_NULL.php';
	}
	
?>