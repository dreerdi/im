<?php 

	require_once './assets/models/Products.php';

	$products = new Products;
	$product = $products->getProducts();

	if ($_REQUEST['addBasketProduct'] == 'yes') {
		require_once './assets/models/Basket.php';
		$basket = new Basket;
		$basket->setAddProduct($_REQUEST['id']);
	}

	require_once './assets/views/home.php';

?>