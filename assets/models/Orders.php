<?php

	/**
	 * 
	 */
	class Orders
	{
	
		public function getDeleteOrder($order_id) {
			global $mysqli;
			$q = "DELETE FROM `orders` WHERE `order_id` = '$order_id'";
			$query = mysqli_query($mysqli, $q);

			$q1 = "DELETE FROM `order_products` WHERE `order_id` = '$order_id'";
			$query1 = mysqli_query($mysqli, $q1);

			return "Заказ удален";
		}

	}

?>