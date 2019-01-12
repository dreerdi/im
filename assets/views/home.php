<div class="row">
  
  <div class="col-lg-8 col-lg-push-2">
    
    <h2>Товар</h2>
    <hr>

    <div class="row">

      <?php 
        
        /*for($i = 0; $i < 4; $i++)*/
        foreach ($product as $key => $value) {
          require 'templates/best_offer.php';

        }
      ?>

    </div>

    <div class="margin-8"></div>

    <a href="index.php?dispatch=sale"><h2>Акция</h2></a>
    <hr>

    <div class="row">
      <?php 
          for($i = 0; $i < 4; $i++) {
            require 'templates/share.php';
          }
      ?>
    </div>

    <div class="margin-8"></div>

  </div>

</div>