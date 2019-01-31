<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6 share">
	<form action="index.php?dispatch=add_basket&handler=1&id=<?php echo $value['product_id']; ?>" method="POST">
		<a href="index.php?dispatch=product&id=<?php echo $value['product_id']; ?>">
			<img src="assets/img/<?php echo $value['img']; ?>" alt="товар 1">
			<div class="film_label"><?php echo $value['name']; ?></div>
		</a>
		<div class="row">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  	<span class="sale">Старая цена: <?php echo $value['price']; ?></span>
		  </div>

		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  	Цена со скидкой: <?php echo $value['price'] - $value['price']*$value['sale_id']/100; ?>
		  </div>
		</div>
		<div class="row">
			  <div>sale: <?php echo $value['sale_id']; ?>%</div>
		</div>
		<div class="row">
		  <?php require 'footer_info_product.php'; ?>
		</div>
	</form>

  

  

</div>