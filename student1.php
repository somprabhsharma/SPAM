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
	
session_start();
			include 'include/connect.php';
			 
				if(!isset($_SESSION['email']))
				{

					echo "<script> alert('Login First!!');</script>";
                   echo "<script> window.location='index.php'</script>";
				
					
					

				}
				else 
				{
					
?>
	<table align="center" border="1" style="width:600px; border-width:3px; border-color:#8080FF; height:auto; margin-top:100px;">
    <caption> <h2><b>STUDENT LIST</b></h2> </caption>

 
<tr>
<th  height="20px" align="center">S.No.</th>

<th  height="20px" align="center">Student Name</th>
<th  height="20px" align="center">College ID</th>
<th  height="20px" align="center">Technology</th>

</tr>

<?php
$pn1=$_SESSION['email'];

$q1="select * from spam_sign_in where email= '$pn1' ";

$sql1=mysql_query($q1);

while($result1=mysql_fetch_array($sql1))
{
	$e=$result1['dept'];
}

$q= "select * from stud_reg where branch='$e' ";
$sql=mysql_query($q);
$count2=1;
$count=1;
while($result=mysql_fetch_array($sql))
{

	@$c=$result['leader name'];
	
	


	?>



<tr>
 <td style="padding-left:15px;" >
 <?php echo $count; ?>
</td>
 <td style="padding-left:15px;" >
 <?php
 echo $result['leader name'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['l_cid'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['technology'];
 ?>
 </td>

 
    <?php

$count++;
?>
</tr>


  <tr>
   <td style="padding-left:15px;" >
 <?php echo $count; ?>
</td>
   <td style="padding-left:15px;" >
 <?php
 echo $result['mem2_name'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['mem2_c_id'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['technology'];
 ?>
 </td>


    <?php
	


    
$count++;

?></tr>
<tr>
 <td style="padding-left:15px;" >
 <?php echo $count; ?>
</td>
  <td style="padding-left:15px;" >
 <?php
 echo $result['mem3_name'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['mem3_c_id'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['technology'];
 ?>
 </td>

 
    <?php
	



$count++;
?>
</tr>
<?php
if($result["mem4_c_id"]==0)
{
}
else
{
?>
<tr>
 <td style="padding-left:15px;" >
 <?php echo $count; ?>
</td>
  <td style="padding-left:15px;" >
 <?php
 echo $result['mem4_name'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['mem4_c_id'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['technology'];
 ?>
 </td>


 
    <?php
	


$count++;
?>
</tr>
<?php
if($result["mem5_c_id"]==0)
{
}
else
{
?>
<tr>
 <td style="padding-left:15px;" >
 <?php echo $count; ?>
</td>
  <td style="padding-left:15px;" >
 <?php
 echo $result['mem5_name'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['mem5_c_id'];
 ?>
 </td>

 <td style="padding-left:15px;" >
 <?php
 echo $result['technology'];
 ?>
 </td>

 
 
    <?php
	


$count++;
}}
?>
</tr>

</div>
<?php
$count2++;
}
?>
</table>

<?php
				}
?>
</div>
</div>
</div>
<div id="td" align="center"><h1><A HREF="javascript:window.print()" target="_blank">Click to Print This Page</A></h1></div>


