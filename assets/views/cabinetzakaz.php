<div class="row">
  
  <div class="col-lg-8 col-lg-push-2">
    
    <h3><a href="index.php?dispatch=cabinet">Личный кабинет покупателя</a>&nbsp&nbsp&nbsp&nbsp&nbspЛичный кабинет - заказы</h3>

    <table class="table table-striped">
      <tr>
        <th>№ заказа</th>
        <th>Дата оформления заказа</th> 
        <th>Сумма заказа</th>
        <th>Статус исполнения заказа</th>
      </tr>

      <?php
        foreach ($user->getOrdersUser($_SESSION['user_id']) as $key => $value) {
          echo "<tr>
                  <td><a href='index.php?dispatch=order&order_id=".$value['order_id']."'>".$value['order_id']."</a></td>
                  <td>".$value['date']."</td>
                  <td>".$value['total']."</td>
                  <td>".$value['status_id']."</td>       
                </tr>";
        }
      ?>

    </table>      
   
  </div>
  
</div>