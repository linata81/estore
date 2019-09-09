<?php
  require_once('config.php');

  unset($_SESSION['Login']);
  header('Location: index.php');

?>