<?php 
	
	require_once './assets/models/Basket.php';

	$basket = new Basket;
	//проверка на нажатие клавиш в корзине, уменьшение/прибавление кол-ва товара, удаление позиции из корзины
	if ($_REQUEST['count_basket'] == 1) {
		$basket->getCountBasket($_REQUEST['number_basket'] - 1, $_REQUEST['flug']);
	}
	//если корзина существует, то идет подсчет стоимости всей корзины
	if (isset($_SESSION['card'])){
		$_REQUEST['total_basket'] = $basket->getTotalBasket($_SESSION['card']);
	}
	

	if ($_POST['addBasketIsOrder'] == 1) {
		$basket->setAddBasketIsOrder();
		$_SESSION['card'] = NULL;
	//если корзина не пустая, то выводится одна страница, иначе другая
	}
	if ($basket->getBasket() !== 0) {
		$array = $_SESSION['card'];
		require_once './assets/views/basket.php';
	} else {
		require_once './assets/views/basket_NULL.php';
	}
	
?>