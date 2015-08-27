//Girilen mail bilglerinin post edildigi ve gonderme isleminin yapildigi sayfa

<?php

include 'class.phpmailer.php';
$mail = new PHPMailer();

$from = $_POST["from"];
$to = $_POST["to"];
$subject = $_POST["subject"];
$mail_text = $_POST["mail"];

$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE; //SMTP Kimlik Doğrulamayı Etkinleştirelim
$mail->SMTPSecure = "tls"; 






?>
