<?php

	/**
	 * 
	 */
	class Basket
	{
		/*функция по определению корзины*/
		public function getBasket() {
			if ($_SESSION['card']) {
				return 1;
			} else {
				return 0;
			}
		}
		/*если нажата кнопка "удалить", то удаляется товар, иначе проверяется уменьшение или увеличение кол-ва товара*/
		public function getCountBasket($number, $flug) {
			if ($flug == "delete_product_basket") {
				$_SESSION['total_basket'] = $_SESSION['total_basket'] - $_SESSION['card'][$number]['total']*$_SESSION['card'][$number]['count'];
				unset($_SESSION['card'][$number]);
				unset($_SESSION['card_product_id'][$number]);
			} else {
				if ($flug == "up_count") {
					$_SESSION['total_basket'] = $_SESSION['total_basket'] - $_SESSION['card'][$number]['total'];
					$_SESSION['card'][$number]['count'] = $_SESSION['card'][$number]['count'] - 1;
				} elseif ($flug == "down_count") {
					$_SESSION['card'][$number]['count'] = $_SESSION['card'][$number]['count'] + 1;
					$_SESSION['total_basket'] = $_SESSION['total_basket'] + $_SESSION['card'][$number]['total'];
				}			

				$_SESSION['card'][$number]['total'] = $_SESSION['card'][$number]['count'] * $_SESSION['card'][$number]['price'];
			}

		}
		/*подсчет общей суммы товара в корзине*/
		public function getTotalBasket($array) {
			$total = 0;
			$array = $_SESSION['card'];
			foreach ($array as $key => $value) {
				$total = $total + $_SESSION['card'][$value['№']-1]['total'];
			}
			return $total;
		}

		/*Добавление товара в заказы*/
		public function setAddBasketIsOrder() {
			global $mysqli;
			(float) $total_basket = $_SESSION['total_basket'];
			$user_id = $_SESSION['user_id'];

			$q = "INSERT INTO `orders` VALUES (NULL, '$user_id', NOW(), '$total_basket', 1)";

			$query = mysqli_query($mysqli, $q);

			$index = mysqli_insert_id($mysqli);

			for ($i = 0; $i < count($_SESSION['card']); $i++) {
				$id = $_SESSION['card'][$i]['product_id'];

				$count = $_SESSION['card'][$i]['count'];

				(integer) $price = $_SESSION['card'][$i]['price'];

				$q1 = "INSERT INTO `order_products` VALUES ('$index', '$id', '$count', '$price')";
				$query = mysqli_query($mysqli, $q1);
			}
			return $index;

		}

		/*добавление товара в корзину*/
		public function setAddProduct($id) {
			global $mysqli;
			$q = "SELECT * FROM `products` WHERE product_id = $id";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_assoc($query);
			$coincidence = 0;
			for ($i = 0; $i < count($_SESSION['card']); $i++) {
				if ($result['product_id'] == $_SESSION['card'][$i]['product_id']) {
					$coincidence = 1;
				}
			}
			$i = count($_SESSION['card']);
			if ($coincidence == 0) {
			$_SESSION['card'][$i]['№'] = $i + 1;
			$_SESSION['card'][$i]['name_product'] = $result['name'];
			$_SESSION['card'][$i]['price'] = $result['price'] - $result['price']*$result['sale_id']/100;
			$_SESSION['card'][$i]['count'] = 1;
			$_SESSION['card'][$i]['total'] = $_SESSION['card'][$i]['price']*$_SESSION['card'][$i]['count'];
			$_SESSION['card'][$i]['product_id'] = $result['product_id'];
			}
			return $result;
		}

	}

?>