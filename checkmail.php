<html>
<head>
</head>
<body>
<?php
require ('class.phpmailer.php');
require ('class.smtp.php');

$mail = new PHPMailer();

$mail->isSMTP();                    
$mail->Host = 'p3plcpnl0912.prod.phx3.secureserver.net';  // Specify main and backup server
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'support@somprabhsharma.com';                            // SMTP username
$mail->Password = 'war5625som';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;


$mail->From = 'support@somprabhsharma.com';
$mail->FromName = 'som';
$mail->addAddress('thewarlocksom@gmail.com');  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<p style="color:#ffffff">This is the HTML message body in bold!</p>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent'?>
</body>
</html>