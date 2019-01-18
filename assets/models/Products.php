<?php

/**
 * 
 */
class Products
{
	
	/*выбор всех товаров из таблицы*/
	public function getProducts() {
		global $mysqli;
		$q = "SELECT * FROM `products`";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $result;
	}
	/*выбор 4-х товаров из таблицы*/
	public function getProducts4() {
		global $mysqli;
		$q = "SELECT * FROM `products` LIMIT 4";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $result;
	}
	/*выбор 4-х товаров из таблицы*/
	public function getSalesProducts() {
		global $mysqli;
		$q = "SELECT * FROM `products` WHERE `sale_id` > 0";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $result;
	}
	/*выбор 4-х товаров из таблицы*/
	public function getSalesProducts4() {
		global $mysqli;
		$q = "SELECT * FROM `products` WHERE `sale_id` > 0 LIMIT 4";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $result;
	}
	/*поиск товара по id*/
	public function getIdProduct($id) {
		global $mysqli;
		$q = "SELECT * FROM `products` WHERE product_id = $id";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}
}

?>