<?php
header('Content-Type: text/html; charset=utf-8');

$to      = 'info@stronglaser.ru';
$subject = 'DragonLasers!';
$clicker = $_GET['click_from'];
if ($clicker == 'Заказать лазер') $clicker = "Кнопка из блока с видео";
if ($clicker == 'Оставить заявку') $clicker = "Всплывающая кнопка";
$message = 'Имя посетителя: '.$_GET['name'].'! '.'Телефон: '.$_GET['phone'].'. '.$_GET['message'].'. Отправлено со страницы: '.$_GET['locattion'].'. Форма отправлена по кнопке: '.$clicker;
mail($to, $subject, $message,"Content-type: text/plain");
?>