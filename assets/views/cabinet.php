<div class="row">
  
  <div class="col-lg-8 col-lg-push-2">

    <h3>Личный кабинет покупателя&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php?dispatch=cabinet&cabinet_orders=1" class="disabled">Личный кабинет - заказы</a></h3> 
    <br><br>
    <table class="table_cabinet">
      <tr>
        <td>ФИО</td>
        <td><?php echo $user->getUser($login)['fio']; ?></td> 
      </tr>
      <tr>
        <td>Логин</td>
        <td><?php echo $user->getUser($login)['login']; ?></td>       
      </tr>
      <tr>
        <td>Пароль</td>
        <td><?php echo $user->getUser($login)['password']; ?><a href="#">Изменить пароль</a></td>       
      </tr>
    </table>

  </div>

</div>