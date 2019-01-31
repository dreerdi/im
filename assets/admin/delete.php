<?php

	if ($_REQUEST['old_dispatch'] == 'orders') {

		if (isset($_REQUEST['order_id']) && !isset($_REQUEST['product_id'])) {
			echo "удалим заказ № ".$_REQUEST['order_id']."<br>";
			require "../models/Orders.php";
			$orders = new Orders;
			echo $orders->getDeleteOrder($_REQUEST['order_id']);
		}
		if (isset($_REQUEST['product_id'])) {
			echo "удалим товар № ".$_REQUEST['product_id']." из заказа ".$_REQUEST['order_id'];
		}
	}
//header("Location: ..\index.php?dispatch=form_auth&auth-error=login");
?>

