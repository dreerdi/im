<?php

/**
 * 
 */
class Products
{
	

	public function getProducts() {
		global $mysqli;
		$q = "SELECT * FROM `products`";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $result;
	}

	public function getIdProduct($id) {
		global $mysqli;
		$q = "SELECT * FROM `products` WHERE product_id = $id";
		$query = mysqli_query($mysqli, $q);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}
}

?>