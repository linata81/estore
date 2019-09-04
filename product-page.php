<?php
  require_once('config.php');
  $pageTitle = "Все товары";

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
        <div class="col-md-9">
          <!-- Ч/з переменную осуществляем запросы к БД -->
          <?php
            $currentPoductId = intval($_GET['productId']); /*Заведем переменную с текущ,значением id*/

            $sql = "SELECT * FROM `products` WHERE id='$currentPoductId'";
            $result = $db->query($sql);
            $product = $result->fetch(PDO::FETCH_ASSOC);
          ?>

          <div class="product-title"><?php echo $product['title']?></div>

          <div class="row">
            <div class="col-6">
              <img src="img/products/<?php echo $product['img']?>" alt="">
            </div>
            <div class="col-6">
              <div class="product-price"><?php echo $product['price']?> руб</div>
              <a href="order.php?productId=<?php echo $product['id']?>" class="product-btn-order">Сделать заказ</a>
              <div class="product-desc">
                <?php echo $product['description']?>
              </div>

            </div>
          </div>

        </div>
        <!-- // Center Part -->
      </div>
      <!-- content block -->
    </div>
  </div>
  <!-- // white-plate -->
  <?php include('./templates/_footer.php');?>