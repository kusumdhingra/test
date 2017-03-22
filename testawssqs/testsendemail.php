<?php
require 'PHPMailer/PHPMailerAutoload.php';
 include_once('PHPMailer/class.phpmailer.php');

 require_once('PHPMailer/class.smtp.php');
//PHPMailer Object
echo 11;
//$mail = new PHPMailer;
$mail = new PHPMailer(true);
print_r($mail);
if($mail) echo 22;
try {
$mail->IsSMTP(true);   

         // use SMTP
$mail->IsHTML(true);

//$mail->Host       = "tls://smtp.yourwebsite.com"; // SMTP host email-smtp.eu-west-1.amazonaws.com

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPDebug  = 2;
$mail->SMTPSecure = 'ssl';

$mail->Host = "smtp.gmail.com"; // specify main and backup server
$mail->Port = 25; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "kusumdhingra@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "ssdn12345";
/*$mail->Host       = "tls://email-smtp.eu-west-1.amazonaws.com";
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "AKIAJ7I5BMSG3CHXIQIA";  // SMTP  username
$mail->Password   = "LIZyw6q0m+Rmex3e/SQvAipo0oqXSESb8nT3srQb";  // SMTP password*/
$from = "kusumdhingra@gmail.com";
$subject ="hello";
$to = "kusum.dhingra@birlasoft.com";
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($from,'From Name');
$mail->Subject    = $subject;
$mail->MsgHTML("testing aws");
$mail->isHTML(true);                            // Set email format to HTML


$mail->Subject = 'ORDER';
$mail->Body    = '<span style="font-family:calibri;"><br>You Can Track Your Order With This </span>';
$address = $to;
$mail->AddAddress($address, $to); echo "55";
	if(!$mail->SmtpSend()){
	echo "Mailer Error: " . $mail->ErrorInfo; 
	} else {
	echo "Message has been sent";
	} 
	echo 77;

} catch (phpmailerException $e) {echo 88;
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {echo 99;
  echo $e->getMessage(); //Boring error messages from anything else!
}
echo 33;
/*$to = "kusum.dhingra@birlasoft.com";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$headers = "From: kusumdhingra@gmail.com" . "\r\n";
if (mail($to, $subject, $body, $headers)) {
    echo ("Message successfully sent!");
} else {
    echo ("Message delivery failed...");
}*/
?>
