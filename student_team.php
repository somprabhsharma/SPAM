
    <?php
	
	include 'include/connect.php';


if($_POST['submit']=="submit")
{
	$a=$_POST['projectname'];
	$b=$_POST['branch'];
	$z=$_POST['Team_mem'];
	$ssid=substr(md5(uniqid(rand(1,6))),0,6);

	$c=$_POST['s_name15'];
	$d=$_POST['s_category15'];
	$e=$_POST['s_cid15'];
	$f=$_POST['s_cn15'];
	$g=$_POST['s_e_id15'];
	$h=$_POST['s_name25'];
	$i=$_POST['s_cid25'];
	$j=$_POST['s_cn25'];
	$k=$_POST['s_e_id25'];
	$l=$_POST['s_name35'];
	$m=$_POST['s_cid35'];
	$n=$_POST['s_cn35'];
	$o=$_POST['s_e_id35'];
	$p=$_POST['s_name45'];
	$q=$_POST['s_cid45'];
	$r=$_POST['s_cn45'];
	$s=$_POST['s_e_id45'];
	$t=$_POST['s_name55'];
	$u=$_POST['s_cid55'];
	$v=$_POST['s_cn55'];
	$w=$_POST['s_e_id55'];
	$x=$_POST['Tech'];
	$sql="insert into stud_reg values('','$a','$b','$c','$d','$e','$f','$g','','','','$h','$i','$j','$k','','','','$l','$m','$n','$o','','','','$p','$q','$r','$s','','','','$t','$u','$v','$w','','','','$z','$ssid','','$x','','','','','','','','','')";
		$result=mysql_query($sql);
		
		if($result)
		{
		
require ('class.phpmailer.php');

require ('class.smtp.php');
require 'PHPMailerAutoload.php';

$mail  = new PHPMailer();

$mail->IsSMTP();                    
$mail->Host = 'p3plcpnl0912.prod.phx3.secureserver.net';  // Specify main and backup server
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'support@somprabhsharma.com';                            // SMTP username
$mail->Password = 'war5625som';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;


$mail->From = 'support@somprabhsharma.com';
$mail->FromName = 'SPAM support';
$mail->addAddress($g);  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your confirmation link here';
$mail->Body    = 'Dear Students, <br> <br> your password = '.$ssid.'<br>' ;
$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}?>
<?php 
	echo "<script>alert('your registration is successfully done..... check your gmail id for password');
	window.location.href='index.php';</script>";
?>

         <?php
		  
		}

else
		{    
         
	echo "<script>alert('Check your details')</script>";

		}

}	
	?>
		
