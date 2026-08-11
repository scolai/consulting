<?php

require __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/src/SMTP.php';
require __DIR__ . '/vendor/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load secure config
$config = include '../secure/mail-config.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = $config['host'];
$mail->SMTPAuth = true;
$mail->Username = $config['username'];
$mail->Password = $config['password'];
$mail->Port = $config['port'];
$mail->SMTPSecure = $config['secure'];

$mail->setFrom($config['from_email'], $config['from_name']);
$mail->addReplyTo($config['from_email'], $config['from_name']);

$mail->isHTML(false);