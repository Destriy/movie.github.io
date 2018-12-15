<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv='refresh' content='6; url=../index.html'>
<meta charset="UTF-8" />
</head>
<body>

  <?php
  if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
  if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
  if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}

  if (isset($name) && isset($email) && isset($message){

  $address = "artem.sheremeta@mail.ru";
  $mes = "Имя: $name \nE-mail: $email  \nТекст: $message";
  $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
  if ($send == 'true')
  {echo "Сообщение отправлено успешно, через 6 секунд где сможете продолжить ваш просмотр";}
  else {echo "Ошибка, сообщение не отправлено!";}

  }
  else
  {
  echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
  }
  ?>
</body>
</html>
