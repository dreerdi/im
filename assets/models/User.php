<?php

	class User
	{
		public function getUser($login) {
			global $mysqli;
			$q = "SELECT * FROM `users` WHERE `login` = '$login'";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_assoc($query);
			return $result;
		}	

		public function getOrdersUser($login) {
			global $mysqli;
			$q = "SELECT * FROM `orders` WHERE `user_id` = '$login'";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
			return $result;
		}	

		public function getUserId($user_id) {
			global $mysqli;
			$q = "SELECT `login`,`fio` FROM `users` WHERE `user_id` = '$user_id'";
			$query = mysqli_query($mysqli, $q);
			$result = mysqli_fetch_assoc($query);
			return $result;
		}
	}

?>