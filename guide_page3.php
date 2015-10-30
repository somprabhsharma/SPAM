<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to your Loggedin page</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
</head>

<body style="background-color:#F8F7DF;">

<?php
	include 'include/connect.php';
	session_start();
	
				if(!isset($_SESSION['email']))
				{

					echo "<script> alert('Login First!!');</script>";
                   echo "<script> window.location='index.php'</script>";
				
					
					

				}
				else 
				{
					$c=$_SESSION['email'];


?>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">SPAM</a></h1>
      <p>Student Project Allocation Management</p>
    </div>
    <div class="fl_right">
       <h2>Welcome <?php echo $c ;?></h2>
      <ul>
        <li class="last"><a href="#">Search</a></li>
        <li><a href="www.google.com">Online Support</a></li>
        <li><a href="www.ecajmer.ac.in">College Board</a></li>
      </ul>
      <p>Tel: +91-0145-267 1800 |</p><p> Mail: principal@ecajmer.ac.in</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2" style="padding-left:175px; width:auto;">
  <div id="cssmenu">
    <ul>
       
        
      </li>
      <li class="has-sub"><a href="#">Co-ordinator List</a>
        <ul>
          <li><a href="co-it.php">Information Technology</a></li>
                    <li><a href="co-cs.php">Computer Science</a></li>
                     <li><a href="co-ec.php">Electronics & communication</a></li>
                            <li><a href="co-eic.php">EIC</a></li>
                    <li><a href="co-e.php">Electrical</a></li>
            <li><a href="co-m.php">mechanical</a></li>
 </ul>
      </li>
      <li class="has-sub"><a href="#">Guide List</a>
        <ul>
              <li><a href="gu-it.php">Information Technology</a></li>
                    <li><a href="gu-cs.php">Computer Science</a></li>
                     <li><a href="gu-ec.php">Electronics & communication</a></li>
                            <li><a href="gu-eic.php">EIC</a></li>
                    <li><a href="gu-e.php">Electrical</a></li>
            <li><a href="gu-m.php">mechanical</a></li>
        </ul>
      </li>
      
      <li class="has-sub"><a href="#">Student List</a>
       <ul>
     <li><a href="st-it.php">Information Technology</a></li>
                    <li><a href="st-cs.php">Computer Science</a></li>
                     <li><a href="st-ec.php">Electronics & communication</a></li>
                            <li><a href="st-eic.php">EIC</a></li>
                    <li><a href="st-e.php">Electrical</a></li>
            <li><a href="st-m.php">mechanical</a></li>          </ul></li>
            
            
            
           <li class="has-sub"><a href="#">Projects</a>
        <ul>
        
          <li><a href="cs.php">Computer Science</a></li>
          <li><a href="eee.php">Electrical</a></li>
          <li><a href="ec.php">Electronics & Communication</a></li>
            <li><a href="eic.php">EIC</a></li>
              <li><a href="it.php">Information Technology</a></li>
                <li><a href="mech.php">Mechanical</a></li>
                  <li><a href="civil.php">Civil</a></li>
                 
        </ul>
      </li>

      <li class="last"><a href="change_pass_gu.php">Change Password</a></li>
            <li class="last"><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<?php
$pn1=$_SESSION['email'];
$q1="select * from spam_sign_in where email= '$pn1' ";

$sql1=mysql_query($q1);

while($result1=mysql_fetch_array($sql1))
{
	$e=$result1['name'];
}

$q= "select * from stud_reg where guide='$e' ";
$sql=mysql_query($q);
$count2=1;

while($result=mysql_fetch_array($sql))
{
$count=1;

	@$c=$result['leader name'];
	
	


	?>
	<table align="center" border="1" style="width:auto; border-width:3px; border-color:#8080FF; height:auto;">
   <div id="t" style="text-align:center;"> <tr align="center"> <h1><b>Project Name : <?php echo $result['project_name'];?></b></h1></tr></div>

<tr>
<th  height="20px" align="center">S. No.</th>
<th  height="20px" align="center"> Student's names</th>
<th  height="20px" align="center">College ID</th>
<th  height="20px" align="center">Contact No.</th>
<th  height="20px" align="center">Email Id</th>
<th  height="20px" align="center">Branch(Batch)</th>

</tr>



<tr>
<td> 
<?php
echo $count;

?></td>
    <td style="padding-left:15px;" >
    <?php
	echo $c."(Team Leader)";
	
	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["l_cid"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["l_contact"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["l_email"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["branch"];

$count++;
?>
</td>
</tr>


  <tr>
<td> 
<?php
echo $count;

?></td>
</td>
    <td style="padding-left:15px;" >
    <?php
	echo $result["mem2_name"];
	
	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem2_c_id"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem2_contact"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem2_email"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["branch"];
$count++;

?>
</td>
</tr>
<tr>
<td> 
<?php
echo $count;

?></td>

    <td style="padding-left:15px;" >
    <?php
	echo $result["mem3_name"];
	
	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem3_c_id"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem3_contact"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem3_email"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["branch"];

$count++;
?>
</td>
</tr>
<?php
if($result["mem4_c_id"]==0)
{
}
else
{
?>
<tr>
<td> 
<?php
echo $count;

?></td>

    <td style="padding-left:15px;" >
    <?php
	echo $result["mem4_name"];
	
	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem4_c_id"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem4_contact"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem4_email"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["branch"];

$count++;
?>
</td>
</tr>
<?php
if($result["mem5_c_id"]==0)
{
}
else
{
?>
<tr>

<td> 
<?php
echo $count;

?></td>
    <td style="padding-left:15px;" >
    <?php
	echo $result["mem5_name"];
	
	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem5_c_id"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem5_contact"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["mem5_email"];

	
?>
</td>
 <td style="padding-left:15px;" >
    <?php
	echo $result["branch"];
$count++;
}}
?>
</td>
</tr>
</table>
<div align="center"><b>
Download report of first week &raquo; </b>
<?php
$x1=$result['1week'];
if($x1==null)
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button disabled>Download</button></a> 
<?php
}
else
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button >Download</button></a> 
<?php
}
?>
</div>
<hr />
<div align="center"><b>
Download report of second week &raquo; </b>
<?php
$x2=$result['2week'];
if($x2==null)
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button disabled>Download</button></a> 
<?php
}
else
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button >Download</button></a> 
<?php
}
?>
</div>

<hr />
<div align="center"><b>
Download report of third week &raquo; </b>
<?php
$x3=$result['3week'];
if($x3==null)
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button disabled>Download</button></a> 
<?php
}
else
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button >Download</button></a> 
<?php
}
?>
</div>
<hr />
<div align="center"><b>
Download report of fourth week &raquo; </b>
<?php
$x4=$result['4week'];
if($x4==null)
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button disabled>Download</button></a> 
<?php
}
else
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button >Download</button></a> 
<?php
}
?>
</div>
<hr />
<div align="center"><b>
Download report of fifth week &raquo; </b>
<?php
$x5=$result['5week'];
if($x5==null)
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button disabled>Download</button></a> 
<?php
}
else
{
?>
<a href="Documents/FifthWeek/<?=$x1?>" target="_blank" ><button >Download</button></a> 
<?php
}
?>
<hr />
<p><h3>Send Email to Team leader to submit their Report...</h3></p>




<?php

if($x1!=null && $x2!=null && $x3!=null && $x4!=null && $x5!=null)
{ 
?>
<input type="button" value="Send" name="Send" disabled />
<?php
}
else
{
?>
<form action="#" method="post" >
<input type="submit" value="Send" name="Send" />
</form>




<?php
if($_POST['Send']=="Send")
{
$gu=$result["guide"];
require ('class.phpmailer.php');

require ('class.smtp.php');
require 'PHPMailerAutoload.php';

$mail  = new PHPMailer();

$mail->IsSMTP();                    
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
 // debugging: 1 = errors and messages, 2 = messages only

    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'adiverma217@gmail.com';                            // SMTP username
$mail->Password = '9509701824';                           // SMTP password

$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;

$e=$result["l_email"];
$mail->From = 'adiverma217@gmail.com';
$mail->FromName = 'SPAM Support';
$mail->addAddress($e);  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Regarding Report';

$mail->Body    = 'Dear Students, <br> <br> Here by you are inform that your Weekly report has not been submitted yet.<br> so kindly submit your weekly report before last date.<br></br>From<br>'.$gu.'</br>';


$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else
{
echo "<script>alert('Mail has been send');window.location.href='guide_page3.php';</script>";
}}
?>





<?php
}
?>
</div>
<hr />

<?php
$count2++;
}
?>
<?php
}
?>

<div id="td" align="center"><h1><a href="guide_page4.php"> continue...</a></h1></div>

</div>




</div><div align="center" style="margin-top:30px;">
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>

