<?php
$adminEmail="linata81@gmail.com";
$adminSubject = "Создан новый заказ";
$adminMailText = "<p>На сайтк техноМаркет был совершен новый заказ:</p>"; 
$adminMailText .= "<p>ID продуктa: " . $_POST['productId'] . "<br>";
$adminMailText .= "Продукт:" . $_POST['productTitle'] . "<br>";
$adminMailText .= "Стоимость:" . $_POST['productPrice'] . "</p>";
$adminMailText .= "<h2>Данные покупателя:</h2>";
$adminMailText .= "<p>Имя:" .  $_POST['name'] . "<br>";
$adminMailText .= "Email:" .  $_POST['email'] . "<br>";
$adminMailText .= "Телефон:" .  $_POST['phone'] . "<br>";
$adminMailText .= "Адрес:" .  $_POST['address'] . "</p>";

$headers= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($adminEmail, $adminSubject, $adminMailText, $headers);


$userEmail =$_POST['email'];
$userSubject ="Ваш заказ успешно получен!";
$userMailText = "<h2>Спасибо за заказ! Скоро мы с вами свяжемся.</h2>";

mail($userEmail, $userSubject, $userMailText, $headers);

header('Location: order-succes.php');
?>






