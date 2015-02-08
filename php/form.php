<?php
header('Content-Type: text/html; charset=utf-8');

$to      = 'tatyana.simonenko@gmail.com';
$subject = 'DragonLasers!';
$message = 'Заказ с сайта на '.$_GET['item_name'].'! '.'Начальная цена = '.$_GET['original_price'] . ' Р. ';
$accs = $_GET['accessory'];
  if(!empty($accs)) {
    $message.='Аксессуары:';
	for($i=0; $i < count($accs); $i++) {
		$message .= " " . $accs[$i];
		if ($i < count($accs)-1) {
			$message .= ",";
		}
    }
	$message.='. ';
  };
$message.='Итоговая сумма = '.$_GET['total_cost'] . '. '; 
if(isset($_GET['name'])) $message.='Имя заказчика '.$_GET['name'] . '. '; 
if(isset($_GET['phone'])) $message.='Телефон заказчика '.$_GET['phone'] . '. ';
$message.='Отправлено со страницы: '.$_GET['locattion'] . '. ';
$message.='Форма отправлена по кнопке: '.$_GET['click_from'] . '. ';
mail($to, $subject, $message,"Content-type: text/plain");
?>