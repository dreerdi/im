<?php

	if (isset($_SESSION['card_product_id'])) {
		if (in_array($value['product_id'], $_SESSION['card_product_id'])) {
			echo "в <a href='index.php?dispatch=basket'>корзине</a>";
		} else {
		  	echo "<button name='addBasketProduct' value='yes' class='col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1 btn btn-warning'>в корзину</button>";
 		}
	} else {
		echo "<button name='addBasketProduct' value='yes' class='col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1 btn btn-warning'>в корзину</button>";
	}
	

?>