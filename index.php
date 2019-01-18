<?php
	require_once 'Db.php';
	session_start();

	require_once 'assets/controllers/handlers/authorization.php';

	//формирование меню
	require_once './assets/models/Categories.php';
	$categories = new Categories;	
	$menu_categories = $categories->getMenuCategories();
	$category_arr = $categories->getMenuCategories();
	//конец формирования меню

	$current_page = substr(basename(__FILE__), 0, -4);    

	$dispatch = $_REQUEST['dispatch'];

	$cabinet_orders = $_REQUEST['cabinet_orders'];

	//
	if (isset($_REQUEST['dispatch']) && $_REQUEST['dispatch'] != '') {
		$dispatch = $_REQUEST['dispatch'];
	} else {
		$dispatch = 'home';
	}
	//проверка на необходимость обработчика
	if (isset($_REQUEST['handler']) && $_REQUEST['handler'] == 1) {
			require_once './assets/models/Basket.php';
			$basket = new Basket;

			require_once "assets/controllers/handlers/$dispatch.php";
	}
	//проверка, существует ли страница в проекте
	if (!file_exists("assets/controllers/$dispatch.php")) {
		$dispatch = '404';
	} 
	//
	$article_id = $_REQUEST['id'];
	//если корзина существует, то идет подсчет стоимости всей корзины
	if (isset($_SESSION['card'])){
		require_once './assets/models/Basket.php';
		$basket = new Basket;
		$_SESSION['total_basket'] = $basket->getTotalBasket($_SESSION['card']);
	}

	
/*	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";
	echo "<pre>";
	var_dump($_REQUEST);
	echo "</pre>";*/
?>
<? require_once "assets/views/templates/header.php"; ?> 

<?  if ($dispatch != '404') {
		require_once "assets/controllers/$dispatch.php";
	} else {
		require_once "assets/views/templates/$dispatch.php";
	} 
?>

<? require_once "assets/views/templates/footer.php"; ?>   