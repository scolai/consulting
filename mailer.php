$config = include '../secure/mail-config.php';

$mail->Host = $config['host'];
$mail->Username = $config['username'];
$mail->Password = $config['password'];