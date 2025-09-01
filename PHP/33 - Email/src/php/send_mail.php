<?php
session_start();

require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Carrega as variáveis do .env
$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

$mensagem = $_SESSION['message'];

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USERNAME'];
    $mail->Password   = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $_ENV['SMTP_PORT'];

    //Recipients
    $mail->setFrom($_ENV['SMTP_USERNAME'], 'APP-SEND-MAIL');
    $mail->addAddress($mensagem['destiny']);

    //Content
    $mail->isHTML(true);
    $mail->Subject = $mensagem['title'];
    $mail->Body    = $mensagem['body'];
    $mail->AltBody = "É necessario utilizar um cliente que suporte HTML para obter a experiência total";

    $mail->send();

    // Define o fuso horário do Brasil e formata a data/hora do envio
    date_default_timezone_set('America/Recife');
    $dataHora = date('d/m/Y, H:i:s');
    $_SESSION['sucess'] = "Email enviado com sucesso, Hora de envio: {$dataHora}.";
} catch (Exception $e) {
    $_SESSION['error'] = "Erro ao enviar email: " . $mail->ErrorInfo;
}

// Redireciona de volta para o index
header('Location: ../../index.php');
exit();
