<?php
require_once dirname(__FILE__).'/../config.php';
require_once dirname(__FILE__).'/../../vendor/autoload.php';

class SMTPClient {

  private $mailer;

  public function __construct(){
    $transport = (new Swift_SmtpTransport(Config::SMTP_HOST(), Config::SMTP_PORT(), 'tls'))
      ->setUsername(Config::SMTP_USER())
      ->setPassword(Config::SMTP_PASSWORD());

    $this->mailer = new Swift_Mailer($transport);
  }

  public function send_register_user_token($user){
    $message = (new Swift_Message('Confirm your account'))
      ->setFrom(['admin@poguraj.me' => 'Poguraj me'])
      ->setTo([$user['email']])
      ->setBody('Here is the confirmation link: http://localhost/pogurajme/api/confirm/'.$user['token']);

    $this->mailer->send($message);
  }

  public function send_user_recovery_token($user){
    $message = (new Swift_Message('Reset Your Password'))
      ->setFrom(['admin@poguraj.me' => 'Poguraj me'])
      ->setTo([$user['email']])
      ->setBody('Here is the recovery token: '.$user['token']);

    $this->mailer->send($message);
  }

}
?>
