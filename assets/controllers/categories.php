<?php

	require_once './assets/models/Products.php';
	require_once './assets/models/Categories.php';

	$products = new Products;
	$product = $products->getProducts();
	

	$categories = new Categories;
	if ($categories->getIssetParent('2') > 0) {
		require_once './assets/views/products.php';
	} else {
		$idProduct = $products->getIdProduct($_REQUEST['id']);
		require_once './assets/views/product.php';
	}
?>