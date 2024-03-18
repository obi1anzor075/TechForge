<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Получаем данные из формы
$fio = $_POST['fio'];
$email = $_POST['email'];
$message = $_POST['message'];

// Создание нового объекта PHPMailer
$mail = new PHPMailer(true);

try {
    // Устанавливаем параметры SMTP для Mail.ru
    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'daniilshindin_58@mail.ru'; // Ваш логин от почты Mail.ru
    $mail->Password = 'fast192837465'; // Ваш пароль от почты Mail.ru
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Устанавливаем отправителя и получателя
    $mail->setFrom($email, $fio); // Используем данные из формы: email и имя пользователя
    $mail->addAddress('ПОЛУЧАТЕЛЬ@АДРЕС.КОМ', 'ИМЯ_ПОЛУЧАТЕЛЯ');

    // Устанавливаем тему письма и его содержимое
    $mail->Subject = 'Тема письма';
    $mail->Body    = $message;

    // Отправляем письмо
    $mail->send();
    echo 'Письмо успешно отправлено';
} catch (Exception $e) {
    echo "Ошибка при отправке письма: {$mail->ErrorInfo}";
}
?>
