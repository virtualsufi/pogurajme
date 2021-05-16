<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__).'/../vendor/autoload.php';

/** GMAIL SETUP
*$mail->Port       = 587;
*$mail->Host       = "smtp.gmail.com";
*$mail->Username   = "your-email@gmail.com";
*$mail->Password   = "your-gmail-password";
*
* Make sure that Less secure app access is enabled on your GMAIL account.
*/
// Create the Transport
$transport = (new Swift_SmtpTransport('mail.privateemail.com', 587, 'tls'))
  ->setUsername('mustaphamond@gmx.com')
  ->setPassword('Selam1976..!')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Selam pasha moj dobri'))
  ->setFrom(['mustaphamond@gmx.com' => 'Mustapha'])
  ->setTo(['amustafic@gmail.com'])
  ->setBody('Okanoooo jesi mi dobaaaar')
  ;

// Send the message
$result = $mailer->send($message);

print_r($result);
?>
