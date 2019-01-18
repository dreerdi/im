<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Интернет магазин</title>

    <!-- Bootstrap -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="container-fluid header-top">
      <div class="row">

      <nav role="navigation" class="navbar navbar-inverse">

        <div class="container">
          <div class="navbar-header header">

            <div class="container">
              
              <div class="row">
                
                <div class="col-lg-12">                  
                  <h1><a href="#">ЛесОк - Изделия из дерева</a></h1>
                  <p>Ближе к природе!</p>
                </div>

              </div>

            </div>
            
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

          </div>
          <div class="collapse navbar-collapse navbar-left">
            <div class="menu-vertical">
              <ul class="nav nav-pills">
                <li><a href="index.php?dispatch=catalogs">Каталог товаров</a>
                
                      <?php 

                        echo $categories->outTree();

                      ?>
                  
                </li>
              </ul>
            </div>
          </div>

          <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
            <ul class="nav nav-pills">
              <li><a href="index.php?dispatch=home">Главная</a></li>
              <!-- <li><a href="index.php?dispatch=catalogs">Каталог товаров</a></li> -->
              <li><a href="index.php?dispatch=basket">Корзина
                <?php 
                  if (isset($_SESSION['card']) ) {
                    echo "<span class='badge'>".count($_SESSION['card'])."</span>";
                  }
                ?>
                  
                </a></li>
              <li>
                <? echo (($login === 0 /*|| $error == 1*/) ? ("<a href='index.php?dispatch=form_auth'>Авторизоваться</a>") : ("<a href='index.php?dispatch=cabinet' class='inline-a'>Личный кабинет</a>" )); ?>                  
              </li>
              <li>
                <? 
                echo (($_SESSION['user_id'] > 0) ? ("<a href='index.php?dispatch=home&exit_user=1' class='inline-a'>(Выход)</a>" ) : ("")); 
                ?>                  
              </li>
              <li><a href="index.php?dispatch=contacts">Контакты</a></li>
              <li>
                <? 
                echo (($_SESSION['login'] === 'admin') ? ("<a href='index.php?dispatch=admin'>Админка</a>" ) : ("")); 
                ?>                  
              </li>
            </ul>
          </div>
        </div>
        
      </nav>

      </div>
    </div>
    <div class="wrapper">
    
      <div class="container">