<div class="row  product">
  
  <form action="index.php?dispatch=add_basket&old_dispatch=product&handler=1&id=<?php echo $_REQUEST['id']; ?>" method="POST">
    <div class="col-lg-12">
      
      <div class="row">
        <div class="col-lg-12">
          <h2><?php echo $value['name']; ?></h2>
        </div>
      </div>


          <img src="assets/img/<?php echo $value['img']; ?>" alt="товар 1">


      <div class="row">
        <div class="col-lg-12">
          <?php echo $value['description']; ?>  
        </div>
      </div>      
      <div class="row">
        <div class="col-lg-12">
          Цена: <?php echo $value['price']; ?>
        </div>
      </div>
      <div class="row">
        <?php require 'templates/footer_info_product.php'; ?>
      </div>    

    </div>    
  </form>
      

</div>