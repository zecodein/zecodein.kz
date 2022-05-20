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

  $clientMessage = "Client Name: " . $fio . "\n\n"
  . "Phone number: " . $tel . "\n\n"
  . "Client message: " . "\n" . $comm;

  $message = "Уважаемый " . $fio . "\n\n"
    . "Спасибо за обращение! Мы свяжемся с вами в ближайшее время!" . "\n\n"
    . "Вы обратились со следующим запросом: " . "\n" . $comm . "\n\n"
    . "С уважением," . "\n" . "zecodein";
  $myEmail = "sales@zecodein.kz";
  $result1 = mail("sales@zecodein.kz", $category, $clientMessage, "From: " . $clientEmail);
  $result2 = mail($clientEmail, "Запрос отправлен успешно", $message,"From: " . $myEmail);

  if ($result1 && $result2) {
      $success = "Ваше запрос был отправлен успешно!";
    } else {
      $failed = "Извините! Ваш запрос не был отправлен, проверьте данные и попробуйте   отправить снова.";
    }
}
?>