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
<link rel="stylesheet" type="text/css" media="all" href="styles/style.css">

</head>

<body style="background-color:#F8F7DF;">
<?php
session_start();
			include 'include/connect.php';
			@$a1=$_SESSION['email'];
	@$b="select * from stud_reg where l_email='$a1'";
	@$query=mysql_query($b);
while($result=mysql_fetch_array($query))
{
	@$c=$result['leader name'];
	
	}	
			if(!isset($_SESSION['email']))
				{

					echo "<script> alert('Login First!!');</script>";
                   echo "<script> window.location='index.php'</script>";
				
					
					

				}
				else 
				{
					
			 
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

      <li class="last"><a href="change_pass.php">Change Password</a></li>
            <li class="last"><a href="logout.php">Logout</a></li>


    </ul>
  </div>
</div>

<div id="c" style="height:350px;">
<table align="center" border="1" style="width:auto; border-width:3px; border-color:#8080FF; height:auto;">
<tr>

<th  height="20px" align="center"> Student's names</th>
<th  height="20px" align="center">College ID</th>
<th  height="20px" align="center">Contact No.</th>
<th  height="20px" align="center">Email Id</th>
<th  height="20px" align="center">Branch(Batch)</th>
</tr>
<?php
$f= $_SESSION['email'];
$q= "select * from stud_reg where l_email='$f' ";
$sql=mysql_query($q);
$count=1;

while($result=mysql_fetch_array($sql))
{
	@$c=$result['leader name'];
	
	


	?>
	



<tr>
    <td style="padding-left:15px;" >
    <?php
	echo $c;
	
	
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


?>
</td>
</tr>


  <tr>

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


?>
</td>
</tr>
<tr>

</td>
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
</td>
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

</td>
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

}}
?>
</td>
</tr>
<?php
}
?>
<?php
}
?>
</table>

<!--<form method="post" action="weeklyreport.php">
<div align="center">
<b style="color:#F00; font-size:14px;"><u>NOTE:</u></b>Only upload pdf files,any other file format will not be accepted.<hr color="#F8F7DF"/>
<b style="color:#306; font-size:14px;">Upload Synopsis&raquo;</b>
<input type="file" name="file" accept="application/pdf" value="synophsis" />
<input type="submit" name="submit" value="submit" />

</div>
</form>-->
<form action="#" method="post">
<input type="text" name="text1" id="text1" />
<input type="text" name="text2" id="text2" />
<input type="text" name="text3" id="text3" />
<input type="text" name="text4" id="text4" />
<input type="submit">
</form>
<span id="countdown"></span>
<script>
// set the date we're counting down to
var target_date = new Date("June 04, 2014 02:05:30").getTime();
// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById("countdown");

// update the tag with id "countdown" every 1 second
setInterval(function () {
 
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     var s1=days;
	 var s2=hours;
	 var s3=minutes;
	 var s4=seconds;
document.getElementById("text1").value=s1;
document.getElementById("text2").value=s2;
document.getElementById("text3").value=s3;
document.getElementById("text4").value=s4;
    // format countdown string + set tag value
	if(hours>0 || minutes>0 || seconds>0)
	{


    countdown.innerHTML = days + "d, " + hours + "h, "
    + minutes + "m, " + seconds + "s" + "<input type='button' value='Click Here to Proceed' disabled></button>";  
	
}
if(hours<=0 && minutes<=0 && seconds<=0)
{

countdown.innerHTML = "0d, 0h, 0m, 0s <a href='stud_page2.php'><input type='button' value='Click Here to Proceed' ></button></a>"; 
	
}
}, 1000);
 
</script>


<?php

$a1=$_POST['text1'];
$a2=$_POST['text2'];
$a3=$_POST['text3'];
$a4=$_POST['text4'];

if($a4<0)
{

?>
<form action='#' method='POST' enctype='multipart/form-data'>
<input type='file' name='uploadedfile'><br>
<input type='submit' value='upload' disabled >
</form>
<?php
}
if($a1>0 || $a2>0 || $a3>0 || $a4>0)
{
?>
<form action='#' method='POST' enctype='multipart/form-data'>
<input type='file' name='uploadedfile'><br>
<input type='submit' value='upload'  >
</form>
<?php
}

?>


<?php
include 'include/connect.php';
$temp = explode(".", $_FILES['uploadedfile']['name']);
$extension = end($temp);
if($extension=='pdf')
{
$target_path = "Documents/synopsis/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "<script> alert('The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded') </script>";
} else{
    echo "<script> alert('There was an error uploading the file, please try again!')</script>";
}
}
$xyz=$_FILES['uploadedfile']['name'];
$x1="update stud_reg set synopsis='$xyz' where l_email='$f'";
$x2=mysql_query($x1);


?>

<body style="background-color:#EDEDED" >
</div>

<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>

</body>
</html>
