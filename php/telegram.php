<?php

error_reporting(0);

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$messanger = $_POST['user_messenger'];
$message1 = $_POST['user_message1'];
$token = "5795166676:AAERkP1XSUaPTlG8XUFnrB-DllWnhL6FSjo";
$chat_id = "-890368323";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Мессенджер: ' => $messanger,
  'Сообщение: ' => $message1
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../pages/thank-you.php');
} else {
  echo "Error";
}
?>