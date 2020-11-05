<?php
require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; 

use Symfony\Component\Dotenv\Dotenv;

$dotenv=new Dotenv();
$dotenv->load(__DIR__.'/.env');

$mail = new Nette\Mail\Message;
$mail->setFrom('Matěj Kneifl <kneficz@seznam.cz>')
	->addTo('matej.kneifl@seznam.cz')
	->setSubject('První zpráva při použití NETTE MAILERU')
    ->setBody("Dobrý den,\n Moc moc moc se těším na školní server!");

$mailer = new Nette\Mail\SmtpMailer([
    'host' => $_ENV['EMAIL_HOST'],
    'port' => $_ENV['EMAIL_PORT'],
	'username' => $_ENV['EMAIL_USERNAME'],
	'password' => $_ENV['EMAIL_PASSWORD'],
	'secure' => $_ENV['EMAIL_SECURE'],
]);
$mailer->send($mail);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mailer</title>
</head>
<body>
    <?php
       
    ?>
</body>
</html>