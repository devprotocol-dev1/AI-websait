<?php
// УКАЖИ СВОЮ ПОЧТУ ЗДЕСЬ:
$to = "auelovaldiyar@gmail.com";

$subject = "Новая заявка с лендинга ИИ-ассистента";

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$comment = trim($_POST['comment'] ?? '');

$message = "Имя и компания: $name\n"
         . "Телефон: $phone\n"
         . "E-mail: $email\n"
         . "Комментарий: $comment\n"
         . "Дата: " . date('d.m.Y H:i');

$headers = "From: no-reply@your-domain.ru\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "OK";
} else {
    http_response_code(500);
    echo "ERROR";
}