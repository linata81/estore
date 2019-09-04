<div class="col-md-3 col-lg-2"> 
  <ul class="nav">
    <!-- мой вариант навигации -->
    <!-- <li class="nav__element"><a href="index.php" class="nav__link">Все товары</a></li>
    <li class="nav__element"><a href="index.php?productCategory=Телефоны" class="nav__link">Телефоны</a></li>
    <li class="nav__element"><a href="index.php?productCategory=Планшеты" class="nav__link">Планшеты</a></li>
    <li class="nav__element"><a href="index.php?productCategory=Ноутбуки" class="nav__link nav__link--active">Ноутбуки</a></li>
    <li class="nav__element"><a href="index.php?productCategory=Компьютеры" class="nav__link">Компьютеры</a></li> -->

    <!-- вариант Ключевского -->
    <li class="nav__element"><a href="index.php" class="nav__link">Все товары</a></li>
    <!-- <li class="nav__element"><a href="index.php?category=Телефоны" class="nav__link">Телефоны</a></li> -->
    <!-- <li class="nav__element"><a href="index.php?category=Планшеты" class="nav__link">Планшеты</a></li> -->

    <?php if(isset($_GET['category']) && $_GET['category'] == 'Телефоны'): ?>
      <li class="nav__element"><a href="index.php?category=Телефоны" class="nav__link nav__link--active">Телефоны</a></li>
    <?php else:?>
      <li class="nav__element"><a href="index.php?category=Телефоны" class="nav__link">Телефоны</a></li>
    <?php endif?>
    
    <?php if(isset($_GET['category']) && $_GET['category'] == 'Планшеты'): ?>
      <li class="nav__element"><a href="index.php?category=Планшеты" class="nav__link nav__link--active">Планшеты</a></li>
    <?php else:?>
      <li class="nav__element"><a href="index.php?category=Планшеты" class="nav__link">Планшеты</a></li>
    <?php endif?>
    <?php if(isset($_GET['category']) && $_GET['category'] == 'Ноутбуки'): ?>
      <li class="nav__element"><a href="index.php?category=Ноутбуки" class="nav__link nav__link--active">Ноутбуки</a></li>
    <?php else:?>
      <li class="nav__element"><a href="index.php?category=Ноутбуки" class="nav__link">Ноутбуки</a></li>
    <?php endif?>
    <?php if(isset($_GET['category']) && $_GET['category'] == 'Компьютеры'): ?>
      <li class="nav__element"><a href="index.php?category=Компьютеры" class="nav__link nav__link--active">Компьютеры</a></li>
    <?php else:?>
      <li class="nav__element"><a href="index.php?category=Компьютеры" class="nav__link">Компьютеры</a></li>
    <?php endif?>

    <!-- <li class="nav__element"><a href="index.php?category=Компьютеры" class="nav__link">Компьютеры</a></li> -->
  </ul>
</div>