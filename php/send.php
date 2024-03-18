<?php
//Создание переменных и фильтрация данных в них
$fio = $_POST['fio']; //создание переменной
$email = $_POST['email']; //создание переменной
$message = $_POST['message']; //создание переменной

$fio = urldecode($fio); //декодировние от url
$email = urldecode($email); //декодировние от url
$message = urldecode($message); //декодировние от url

$fio = trim($fio); //удаление пробелов с начала и с конца
$email = trim($email); //удаление пробелов с начала и с конца
$message = trim($message); //удаление пробелов с начала и с конца

//Отправление полученных данных из формы HTML на почту
if (mail("daniilshindin_58@mail.ru", "Сообщение в поддержку", "ФИО:".$fio.". E-mail: ".$email. "Сообщение:".$message,"From: info@github.com \r\n"))
{
  echo "сообщение успешно отправлено";
} else {
  echo "при отправке сообщения возникла ошибка";
}?>