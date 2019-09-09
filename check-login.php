<?php
  require_once('config.php');

  $secretPassword = 'admin';

  if ($_POST['password'] == $secretPassword) {
    $_SESSION['Login'] = 'on';
    header('Location: admin.php');
  } else {
    header('Location: index.php');
  }


?>