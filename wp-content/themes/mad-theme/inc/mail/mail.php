<?php
namespace App;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
ini_set('default_charset', 'UTF-8');
require '../vendor/autoload.php';
require 'mail/host.php';
require 'template.php';

$dataName = '';
$dataEmail = '';
$dataSubject = '';

foreach($_POST as $data => $value){
  if($data == 'Nome') {
    $dataName = $value;
  } else if($data == 'E-mail') {
    $dataEmail = $value;
  } else if($data == 'Assunto') {
    $dataSubject = $value;
  }
}

if ( empty($dataName) || empty($dataEmail)) ) {
  $err = 'Campos de E-mail ou Nome estão vazios.';
} else {
  $mail = new PHPMailer(true);
  $FROM = 'from@';
  $ADDRESS = "address@";
  $FROMNAME = 'Client Name';
  try {
    // PHPMailer Options
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('pt_br', '../vendor/phpmailer/phpmailer/language/phpmailer.lang-pt_br.php');

    //Server settings
    //$mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = $HOST; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $USERNAME; // SMTP username
    $mail->Password = $PASSWORD; // SMTP password
    $mail->SMTPSecure = $SECURE; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $PORT; // TCP port to connect to

    //Recipients
    $mail->setFrom($FROM, $FROMNAME);
    $mail->addAddress($ADDRESS, $FROMNAME); // Add a recipient
    $mail->addReplyTo($dataEmail, $dataName);
    $mail->addBCC('joel.santos@madgo.com.br');

    //Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = empty($dataSubject) ? "[{$FROMNAME}] Site - Lead" : $dataSubject;
    $mail->Body    = $template;

    $mail->send();
    echo "Mensagem foi enviada com sucesso!";
  } catch (Exception $e) {
    echo .= ' Erro: ' . $mail->ErrorInfo;
  }
}
exit();