<?php
use PHPMailer\PHPMailer\PHPMailer;
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

// SMTP
$mail->isSMTP();
$mail->Host       = $_ENV['SMTP_HOST'];
$mail->Port       = $_ENV['SMTP_PORT'];
$mail->SMTPAuth   = true;
$mail->Username   = $_ENV['SMTP_USER'];
$mail->Password   = $_ENV['SMTP_PASS'];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// Email
$mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
