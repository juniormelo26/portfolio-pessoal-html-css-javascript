<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "contato@juniormelo.dev.br";
        //$receiver = "juniormelo26@hotmail.com";
        $subject = "Contato pelo site: $subject";
        $body = "Nome: $name\nEmail: $email\nAssunto: $subject\nMensagem: $message";
        $sender = "From: $email" . "\n" .
            "Reply-To: $email" . "\n";
        $sender .= "MIME-Version: 1.0" . "\r\n";
        $sender .= "Content-type:text/html;charset=UTF-8" . "\r\n"; //FORMATA O CABEÇALHO PARA RECEBER CARACTERES ESPECIAIS

        if (mail($receiver, $subject, $body, $sender)) {
            echo "Mensagem enviada com sucesso\nEm breve te responderemos, Obrigado!";
            include_once("telegram.php");
        } else {
            echo "Ops, falha ao enviar a mensagem!";
        }
    } else {
        echo "Informe um email válido!";
    }
} else {
    echo "Preencha todos os campos!";
}
