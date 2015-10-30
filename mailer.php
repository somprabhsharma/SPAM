<?php

$q= "select * from stud_reg";
$sql=mysql_query($q);
$result=mysql_fetch_array($sql);
$gu=$result["guide"];
if($_POST['submit']=="submit")
{

require ('class.phpmailer.php');

require ('class.smtp.php');
require 'PHPMailerAutoload.php';

$mail  = new PHPMailer();

$mail->IsSMTP();                    
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
 // debugging: 1 = errors and messages, 2 = messages only

    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'sharmasomprabh@gmail.com';                            // SMTP username
$mail->Password = 'war5625som';                           // SMTP password

$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;

$e=$result["l_email"];
$mail->From = 'sharmasomprabh@gmail.com';
$mail->FromName = 'SPAM Support';
$mail->addAddress($e);  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Regarding Report';
$mail->Body    = 'Dear Students, <br> <br> Here by you are inform that your synopsis has not been submitted yet.<br> so kindly submit you synopsis before last date.<br></br>From<br>'.$gu.'</br>';

$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else
echo "<script>alert('Mail has been send');window.location.href='guide_page2.php';</script>";
}
?>