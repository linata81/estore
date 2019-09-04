<?php
  require_once('config.php');
  if(isset($_GET['category'])){
    $pageTitle = $_GET['category'];
  }
  else {
    $pageTitle = "Главная страница";
  }
?>
<?php include('./templates/_head.php');?>

  <!-- white-plate -->
  <div class="white-plate">
    <div class="container-fluid">

      <!-- header -->
      <?php include('./templates/_header.php');?>
      <!-- // header -->

      <div class="line-between"></div>

      <!-- content block -->
      <div class="row">

        <!-- Left aside -->
        <?php include('./templates/_aside.php');?>
        <!-- // Left aside -->

        <!-- Center Part -->
        <div class="col-md-9 col-lg-10">
          <div class="row">

          <?php

              // 2.Ч/з переменную осуществляем запросы к БД

              // вывести все данные из БД
              // $sql = "SELECT * FROM `products`";
              // $result = $db->query($sql);
              // $products = $result->fetchAll(PDO::FETCH_ASSOC);


              // Мой вариант вывода категорий
              // $currentProductCategory = $_GET['productCategory']; /*Заведем переменную с текущ,значением category*/

              // if($currentProductCategory =='Компьютеры'){
              //   $sql = "SELECT * FROM `products` WHERE category = 'Компьютеры'";
              // }
              // elseif($currentProductCategory =='Телефоны'){
              //   $sql = "SELECT * FROM `products` WHERE category = 'Телефоны'";
              // }
              // elseif($currentProductCategory =='Планшеты'){
              //   $sql = "SELECT * FROM `products` WHERE category = 'Планшеты'";
              // }
              // elseif($currentProductCategory =='Ноутбуки'){
              //   $sql = "SELECT * FROM `products` WHERE category = 'Ноутбуки'";
              // }
              // else{
              //   $sql = "SELECT * FROM `products`";
              //  }
              // $result = $db->query($sql);
              // $products = $result->fetchAll(PDO::FETCH_ASSOC);

              // foreach($products as $product) {
              //   include('./templates/_product-item.php');
              // }


              // Вариант Ключевского  если есть такой созданный элемент "категория" в массиве гет,то запрос будет с выбором по категориям

              if(isset($_GET['category'])) {
                // $categoryName = $_GET['category'];// если написать до проверки, то выдает ошибку, что на этой странице нет такой переменной, поэтому проверяем:
                // $sql = "SELECT * FROM `products` WHERE category = '$categoryName'";//так можно взломать БД...
                $sql = "SELECT * FROM `products` WHERE category = :categoryTitle";
                $stmt = $db->prepare($sql);
                $stmt-> bindValue(':categoryTitle', $_GET['category']);
                $stmt-> execute();
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
               else{
                $sql = "SELECT * FROM `products`";
                $result = $db->query($sql);
                $products = $result->fetchAll(PDO::FETCH_ASSOC);
              }


              foreach($products as $product) {
                include('./templates/_product-item.php');
              }
          ?>

          </div>
        </div>
        <!-- // Center Part -->

      </div>
      <!-- content block -->

    </div>
  </div>
  <!-- // white-plate -->
  <?php include('./templates/_footer.php');?>
