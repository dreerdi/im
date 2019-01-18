<div class="row">
  <form action="index.php?dispatch=add_basket_is_order&handler=1" method="POST">
    <div class="col-lg-8 col-lg-push-2">

      <h2>Корзина:</h2>
      <table class="table_basket">
        <tr>
          <th>№ п/п</th>
          <th>Наименование товара</th>
          <th>Стоимость</th>
          <th>Количество</th>
          <th>Сумма</th>
          <th>Удалить</th>
        </tr>

        <?php 
            $i = 1;
            foreach ($array as $key) {

              require 'templates/basket_product.php';
              $i++;
            }
        ?>
        
      </table>

      <p>К оплате: <?php echo $_SESSION['total_basket'];?> рублей</p>
      <button type="submit" class="btn btn-warning" name="addBasketIsOrder" value="1">Оформить покупку</button>

      <div class="margin-8"></div>

    </div>
  </form>
</div>