//Girilen mail bilglerinin post edildigi ve gonderme isleminin yapildigi sayfa

<?php

include 'class.phpmailer.php'; //PHPMailer sinifimizi import ettik
$mail = new PHPMailer(); 

$from = $_POST["from"];  //Bu dort satirda formdan gelen verileri degiskenlere aktardik   
$to = $_POST["to"];
$subject = $_POST["subject"];
$mail_text = $_POST["mail"];

$mail->IsSMTP(); //Maili gonderecegimiz yolu belirledik
$mail->SMTPDebug = 1; Debug islemi. 1 degeri hata ve mesaj icinken 2 degeri ile sadece mesaj olusturuluyor 
$mail->SMTPAuth = TRUE; //SMTP kimlik dogrulamayi etkinlestirdik
$mail->SMTPSecure = 'ssl'; //Guvenli baglanti icin ssl'i tercih ettim, 'tls' de kullanilabiliyor
$mail->Host = 'smtp.gmail.com'; //Gmail sunucusu uzerinden islem yapacagimi belirttim
$mail->Port = 465; //587 normal baglanti icin gerekli port numarasi, guvenli baglanti icin 465'i kullaniyoruz.
$mail->CharSet = 'UTF-8'; //Dil ayarlari icin UTF-8 i kullaniyoruz.
$mail->Username = $from; //mailin gonderilecegi adres
$mail->Password = '********'; //mailin gonderildigi adresin sifresi
$mail->SetFrom($mail->Username, $from);
$mail->Subject = $subject; //konu
$mail->AddAddress($to); //mailin gideceği adres
$mail -> MsgHTML($mail_text); //mailin icerigi


//Asagıdaki kod blogunda mailin gonderilip gonderilmedigini kontrol ediyoruz. 

if(!$mail->Send())

{
    echo "Mailer Error: ".$mail->ErrorInfo;
}
else
{
    echo "Sent";
}

?>
