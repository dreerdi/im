<?php 
	
	require_once './assets/models/Products.php';

	$products = new Products;
	if (isset($_REQUEST['id'])) {
		$value = $products->getIdProduct($_REQUEST['id']);
	
	}

	if ($_REQUEST['addBasketProduct'] == 'yes') {
		require_once './assets/models/Basket.php';
		$basket = new Basket;
		$basket->setAddProduct($_REQUEST['id']);
	}

	require_once './assets/views/product.php';

?>