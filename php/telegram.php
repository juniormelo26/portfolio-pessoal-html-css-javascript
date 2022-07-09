<?php
include_once("sendForm.php");
$data = date("d/m/Y H:i:s");
$chat_id = 'XXXXXXXXXX'; // INSERIR AQUI O SEU CHAT_ID DO TELEGRAM OU DA PESSOA QUE VAI RECEBER
$token = '764398XS3:AAHDujovb74-_AVr77bKGdAk-vL0uB1UuOo'; // INSERIR AQUI TOKEN DO BOT TELEGRAM
$mensagemTelegram = "Nova mensagem de: $name  -  $message em $data";
$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $mensagemTelegram . ""; //PEGA O CHAT ID DO CLIENTE E ENVIA A MENSAGEM
//$ur = "https://api.telegram.org/bot" . $token . "/sendLocation?chat_id=" . $chat_id . "&latitude=" . $latitude . "&longitude=" . $longitude . ""; //ENVIA LATITUDE E LONGITUDE PELO TELEGRAM
$execucao = file_get_contents($url);
//$execucao1 = file_get_contents($ur);
