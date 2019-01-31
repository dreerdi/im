<?php
	
	$mysqli = mysqli_connect('localhost', 'root', '', 'im');

	
	/*var_dump($_REQUEST);
	if (isset($_REQUEST['delete'])) {
		echo "yes delete";
	} else {
		echo "no delete";
	}*/

	if($_REQUEST['order_id'] == 'NULL') { 
		require_once '../models/User.php';
		$user = new User;
		$query = mysqli_query($mysqli, "SELECT * FROM `orders`");
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		echo "
			<h2>Таблица: Заказы</h2>
			<table class='table_basket'>
			<tr>
				<th>Номер заказа</th>
				<th>Пользователь</th>
				<th>Дата</th>
				<th>Сумма</th>
				<th>Статус заказа</th>
				<th>Операции</th>
			</tr>
		";

		foreach ($result as $key => $value) {
	      	echo "<tr>";
				echo "<td><a href='index.php?dispatch=orders&order_id=".$value['order_id']."'>".$value['order_id']."</a></td>";
				echo "<td>";
					if ($value['user_id'] == 0) {
						echo "Неавторизованный пользователь";
					} else {					
						echo $user->getUserId($value['user_id'])['fio']."(".$user->getUserId($value['user_id'])['login'].")";
					}
				echo "</td>";
				echo "<td>".$value['date']."</td>";
				echo "<td>".$value['total']."</td>";
				echo "<td>".$value['status_id']."</td>";
	        	echo "<td><a href='index.php?dispatch=delete&order_id=".$value['order_id']."&delete&old_dispatch=".$dispatch."'>Удалить</a></td>";
	        echo "</tr>";
	    }
		echo "</table>";
	} else {
		require_once '../models/Products.php';
		$products = new Products;
		$order_id = $_REQUEST['order_id'];
		$query = mysqli_query($mysqli, "SELECT * FROM `order_products` WHERE `order_id` = '$order_id'");
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		echo "
			<h2>Заказ №".$order_id."</h2>
			<table class='table_basket'>
			<tr>
				<th>Название продукции</th>
				<th>Количество</th>
				<th>Цена</th>
				<th>Операции</th>
			</tr>
		";
		foreach ($result as $key => $value) {
		echo "<tr>";
				echo "<td>".$products->getIdProduct($value['product_id'])['name']."</td>";
				echo "<td>".$value['count']."</td>";
				echo "<td>".$value['price']."</td>";
	        	echo "<td><a href='index.php?dispatch=delete&old_dispatch=orders&order_id=".$_REQUEST['order_id']."&delete&product_id=".$value['product_id']."'>Удалить</a></td>";
	        echo "</tr>";
	    }
		echo "</table>";
	}
?>

