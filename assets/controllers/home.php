<?php 

	require_once './assets/models/Products.php';

	$products = new Products;
	$product = $products->getProducts4();

	require_once './assets/views/home.php';

?>