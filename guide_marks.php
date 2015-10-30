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
<div id="big" style="height:1200px;">
    <div id="tbl" style="float:left; height:auto; width:900px;">

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
{$count=1;

	@$c=$result['leader name'];
	
	


	?>
<div id="1" style="height:400px; width:900px; float:left;">
	<table align="center" border="1" style="width:auto; border-width:3px; border-color:#8080FF; height:auto;">
   <div id="t" style="text-align:center;"> <tr align="center"> <h1><b>Project Name : <?php echo $result['project_name'];?></b></h1></tr></div>

<tr>
<th  height="20px" align="center">S. No.</th>
<th  height="20px" align="center"> Student's names</th>
<th  height="20px" align="center">College ID</th>
<th  height="20px" align="center">sessional(Out of 80)</th>
<th  height="20px" align="center">Practical(Out of 120)</th>
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
<form method="post" >
 <td style="padding-left:15px;" >
<input type="text" name="smarks1" pattern="80|[0-7]{1}[0-9]{1}" title="please enter marks out of 80" value="" required />
</td>
 <td style="padding-left:15px;" >
  <input type="text" name="pmarks1" pattern="120|[0-9]{1}[0-9]{1}|[0-1]{1}[0-1]{1}[0-9]{1}" title="please enter marks out of 120" value="" required />

</td>
    <?php

$count++;
?>

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
  <input type="text" name="smarks2" pattern="80|[0-7]{1}[0-9]{1}" title="please enter marks out of 80" value="" required />

</td>
 <td style="padding-left:15px;" >
   <input type="text" name="pmarks2" pattern="120|[0-9]{1}[0-9]{1}|[0-1]{1}[0-1]{1}[0-9]{1}" title="please enter marks out of 120" value="" required />

</td>
 
    <?php
$count++;

?>
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
  <input type="text" name="smarks3" pattern="80|[0-7]{1}[0-9]{1}" title="please enter marks out of 80"value="" required />

</td>
 <td style="padding-left:15px;" >
 <input type="text" name="pmarks3" pattern="120|[0-9]{1}[0-9]{1}|[0-1]{1}[0-1]{1}[0-9]{1}" title="please enter marks out of 120" value="" required />

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
<input type="text" name="smarks4" pattern="80|[0-7]{1}[0-9]{1}" title="please enter marks out of 80" value="" required />

</td>
 <td style="padding-left:15px;" >
   <input type="text" name="pmarks4"pattern="120|[0-9]{1}[0-9]{1}|[0-1]{1}[0-1]{1}[0-9]{1}" title="please enter marks out of 120" value="" required />

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
  <input type="text" name="smarks5" pattern="80|[0-7]{1}[0-9]{1}" title="please enter marks out of 80"value="" required />

</td>
 <td style="padding-left:15px;" >
   <input type="text" name="pmarks5" pattern="120|[0-9]{1}[0-9]{1}|[0-1]{1}[0-1]{1}[0-9]{1}" title="please enter marks out of 120"value="" required />

</td>
 
    <?php
$count++;
}}
?>

</tr>
</table>
<div align="center">
<input type="submit" value="submit" name="submit" />
<input type="hidden" name="hide" value= "<?php echo $result['id']; ?>" />
</div>
</div>

</form>
<?php
$count2++;
}
?>
</div>

    <div id="tbl2" style="float:left; height:auto; width:auto;">

<?php
error_reporting(0);
		if(isset($_POST['submit']))
		{
								
	$hide=$_POST['hide'];
	$sm1=$_POST['smarks1'];
$sm2=$_POST['smarks2'];
$sm3=$_POST['smarks3'];
$sm4=$_POST['smarks4'];
$sm5=$_POST['smarks5'];
$pm1=$_POST['pmarks1'];
$pm2=$_POST['pmarks2'];
$pm3=$_POST['pmarks3'];
$pm4=$_POST['pmarks4'];
$pm5=$_POST['pmarks5'];
$tm1=$sm1+$pm1;
$tm2=$sm2+$pm2;
$tm3=$sm3+$pm3;
$tm4=$sm4+$pm4;
$tm5=$sm5+$pm5;
	
@$del="update stud_reg set l_marks='$tm1', l_smarks='$sm1', l_pmarks='$pm1', mem2_marks='$tm2', mem2_smarks='$sm2', mem2_pmarks='$pm2', mem3_marks='$tm3', mem3_smarks='$sm3', mem3_pmarks='$pm3', mem4_marks='$tm4', mem4_smarks='$sm4', mem4_pmarks='$pm4', mem5_marks='$tm5', mem5_smarks='$sm5', mem5_pmarks='$pm5' where id='$hide' ";



$result=mysql_query($del);
if($result)
{
	echo "<script>alert('you are successfully registered')</script>";
}
else
{
	echo "<script>alert('Marks has not been successfully submitted.')</script>";
}
		}
		
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
{$count=1;

	@$c=$result['leader name'];
	
	


	?>
    <h2>Mark Sheet</h2>
<div id="2" style="height:300px; width:200px; margin-top:60px; ">
	<table align="center" border="1" style="width:auto; border-width:3px; border-color:#8080FF; height:auto;">

<tr>
<th  height="20px" align="center">Sessional</th>
<th  height="20px" align="center">Practical</th>
<th  height="20px" align="center">Total</th>

</tr>



<tr>
 <td style="padding-left:15px;" >
 <?php
 echo $result['l_smarks'];
 ?>
 </td>
  <td style="padding-left:15px;" >
   <?php
 echo $result['l_pmarks'];
 ?>

 </td>
  <td style="padding-left:15px;" >
 
    <?php
	

 echo $result['l_marks'];


$count++;
?>
</td>
</tr>


  <tr>
 <td style="padding-left:15px;" >
  <?php
 echo $result['mem2_smarks'];
 ?>
 </td>
  <td style="padding-left:15px;" >
   <?php
 echo $result['mem2_pmarks'];
 ?>

 </td>
  <td style="padding-left:15px;" >
 
    <?php
	

 echo $result['mem2_marks'];

    
$count++;

?>
</td>
</tr>
<tr>
 <td style="padding-left:15px;" >
    <?php
 echo $result['mem3_smarks'];
 ?>
 </td>
  <td style="padding-left:15px;" >
   <?php
 echo $result['mem3_pmarks'];
 ?>

 </td>
  <td style="padding-left:15px;" >
 
    <?php
	

 echo $result['mem3_marks'];


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
 <td style="padding-left:15px;" >
     <?php
 echo $result['mem4_smarks'];
 ?>
 </td>
  <td style="padding-left:15px;" >
   <?php
 echo $result['mem4_pmarks'];
 ?>

 </td>
  <td style="padding-left:15px;" >
 
    <?php
	

 echo $result['mem4_marks'];


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

 <td style="padding-left:15px;" >
    <?php
 echo $result['mem5_smarks'];
 ?>
 </td>
  <td style="padding-left:15px;" >
   <?php
 echo $result['mem5_pmarks'];
 ?>

 </td>
  <td style="padding-left:15px;" >
 
    <?php
	

 echo $result['mem5_marks'];

$count++;
}}
?>
</td>
</tr>
</table>

</div>
<?php
$count2++;
}
?>

<?php
				}
?>
</div>
</div>
</div>
<div id="td" align="center"><h1><a href="guide_marks_table.php" target="_blank"> continue...</a></h1></div>


<div align="center" style="margin-top:30px;">
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>
</div>
</body>
</html>
