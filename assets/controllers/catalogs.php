<?php 

	require_once './assets/models/Categories.php';

	$categories = new Categories;
	
	$menu_categories = $categories->getMenuCategories();
	$category_arr = $categories->getMenuCategories();
	

	require_once './assets/views/catalogs.php';

?>