<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-5">
	<form action="index.php?dispatch=home&id=<?php echo $value['product_id']; ?>" method="POST">
		<img src="assets/img/<?php echo $value['img']; ?>" alt="товар 1">
		<div class="film_label"><?php echo $value['name']; ?></div>
		<div class="row">
		  <div class="col-lg-6 col-lg-push-3 col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 col-xs-12">Цена:<?php echo $value['price']; ?></div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?dispatch=product&id=<?php echo $value['product_id']; ?>">подробнее</a>
			</div>
		</div>
		<div class="row">
		  <button name="addBasketProduct" value="yes" class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1 btn btn-warning">в корзину</button>
		</div>
	</form>
</div>