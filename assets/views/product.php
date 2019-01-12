<div class="row">
  
  <form action="index.php?dispatch=product&id=<?php echo $_REQUEST['id']; ?>" method="POST">
    <div class="col-lg-8 col-lg-push-2">
      
      <div class="row">
        <div class="col-lg-6 col-lg-push-3">
          <h2><?php echo $idProduct['name']; ?></h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-lg-push-4">
          <img src="assets/img/<?php echo $idProduct['img']; ?>" alt="товар 1">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-lg-push-3">
          <?php echo $idProduct['description']; ?>  
        </div>
      </div>      
      <div class="row">
        <div class="col-lg-4 col-lg-push-4">
          Цена: <?php echo $idProduct['price']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-push-3">
          <button name="addBasketProduct" value="yes" class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1 btn btn-warning">в корзину</button>
        </div>
      </div>    

    </div>    
  </form>
      

</div>