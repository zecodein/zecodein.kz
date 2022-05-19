<?php

$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$category = $_POST['category'];
$comm = $_POST['comm'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$category = htmlspecialchars($category);
$comm = htmlspecialchars($comm);

$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$category = urldecode($category);
$comm = urldecode($comm);

$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);
$category = trim($category);
$comm = trim($comm);

$client = "Client Name: " . $fio . "\n\n"
. "Phone number: " . $tel . "\n\n"
. "Client message: " . "\n" . $comm;

$message = "Уважаемый " . $fio . "\n\n"
 . "Спасибо за обращение! Мы свяжемся с вами в ближайшее время!" . "\n\n"
 . "Вы обратились со следующим запросом: " . "\n" . $comm . "\n\n"
 . "С уважением," . "\n" . "zecodein";

$result1 = mail("sales@zecodein.kz",$category,$client,"From: " . $email);
$result2 = mail($email,"Запрос отправлен успешно",$message,"From: sales@zecodein.kz");

if ($result1 && $result2) {
    $success = "Ваше запрос был отправлен успешно!";
  } else {
    $failed = "Извините! Ваш запрос не был отправлен, проверьте данные и попробуйте отправить снова.";
  }
?>