<?php
  require_once('config.php');
  $pageTitle = "Оформить заказ"
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

          <div class="title-1">Сделать заказ</div>
          <!-- Ч/з переменную осуществляем запросы к БД -->
          <?php
            $currentPoductId = intval($_GET['productId']); /*Заведем переменную с текущ,значением id*/

            $sql = "SELECT * FROM `products` WHERE id='$currentPoductId'";
            $result = $db->query($sql);
            $product = $result->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="order-item">
            <div class="order-img">
              <img class="order-img" src="img/products/<?php echo $product['img']?>">
            </div>
            <div class="order-desc">
              <h4 class="order-title"><?php echo $product['title']?></h4>
              <div class="order-price"><?php echo $product['price']?> ₽</div>
            </div>
          </div>

          <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Имя и Фамилия">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Телефон">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Адрес">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Оформить заказ</button>
            </div>
          </form>

        </div>
        <!-- // Center Part -->
      </div>
      <!-- content block -->
    </div>
  </div>
  <!-- // white-plate -->
  <?php include('./templates/_footer.php');?>

