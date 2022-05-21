<?php

if (isset($_POST['submit'])) {
  $fio = $_POST['fio'];
  $clientEmail = $_POST['email'];
  $tel = $_POST['tel'];
  $category = $_POST['category'];
  $comm = $_POST['comm'];

  $fio = htmlspecialchars($fio);
  $clientEmail = htmlspecialchars($clientEmail);
  $tel = htmlspecialchars($tel);
  $category = htmlspecialchars($category);
  $comm = htmlspecialchars($comm);

  $fio = urldecode($fio);
  $clientEmail = urldecode($clientEmail);
  $tel = urldecode($tel);
  $category = urldecode($category);
  $comm = urldecode($comm);

  $fio = trim($fio);
  $clientEmail = trim($clientEmail);
  $tel = trim($tel);
  $category = trim($category);
  $comm = trim($comm);

  $clientMessage = "Имя: " . $fio . "\n\n"
  . "Телефон: " . $tel . "\n\n"
  . "Категория: " . $category . "\n\n"  
  . "Комментарий: " . "\n" . $comm;

  $message = "Уважаемый " . $fio . "\n\n"
    . "Спасибо за обращение! Мы свяжемся с вами в ближайшее время!" . "\n\n"
    . "Вы обратились со следующим запросом: " . "\n" . $clientMessage . "\n\n"
    . "С уважением," . "\n" . "zecodein";
  $myEmail = "sales@zecodein.kz";
  $result1 = mail($myEmail, $category, $clientMessage, "From: " . $myEmail);
  $result2 = mail($clientEmail, "Запрос отправлен успешно", $message,"From: " . $myEmail);

  if ($result1 && $result2) {
      $success = "Ваше запрос был отправлен успешно!";
    } else {
      $failed = "Извините! Ваш запрос не был отправлен, проверьте данные и попробуйте отправить снова.";
    }
}
?>
