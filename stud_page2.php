<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report Submit</title>
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






<?php error_reporting(E_ERROR | E_PARSE);
?>
<table align="center" border="1" style="width:auto; border-width:3px; border-color:#8080FF; background-color:#FEFDFF; margin-top:100px; height:auto;">
<caption style="margin-bottom:10px;"><b style="color:#F00;"><u>NOTE</u>:</b>Report must be PDF format only. <br />
<?php
session_start();
$f= $_SESSION['email'];

$server_time="2014-05-30 22:08:25";
$target = strtotime($server_time);   // 1 - note: $server_time should be your
                                    //     string, whereever you get that from
$timestamp = time();                       // 2
$diff = $target - $timestamp; 

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; 
$temp=$diff/86400;//$diff holds seconds less than 3600 (1 hour);
$days=floor($temp); 
$temp=24*($temp-$days);
$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>
<?php echo "Time Left";?>
<div id="strclock">Clock Here!</div>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>;

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
</caption>
<tr>
<th  height="25px" align="center" style="color:#639;">S. No.</th>
<th  height="25px" align="center" style="color:#639;">Weeks</th>
<th  height="25px" align="center" style="color:#639;"> Weekly Report Submit</th>
</tr>
<tr>
<td>1</td>
<td><b>first week</b></td>
<td>
<form enctype="multipart/form-data"  method="POST">

 <input name="uploaded1" type="file" />

<input type="submit" value="Upload" />
 <?php
include 'include/connect.php';
$temp = explode(".", $_FILES['uploaded1']['name']);
$extension = end($temp);
if($extension=='pdf')
{
$target_path = "Documents/FirstWeek/";

$target_path = $target_path . basename( $_FILES['uploaded1']['name']); 

if(move_uploaded_file($_FILES['uploaded1']['tmp_name'], $target_path)) {
    echo "<script> alert('The file ".  basename( $_FILES['uploaded1']['name']). 
    " has been uploaded') </script>";
} else{
    echo "<script> alert('There was an error uploading the file, please try again!')</script>";
}
}
$xyz1=$_FILES['uploaded1']['name'];
$a1="update stud_reg set 1week='$xyz1' where l_email='$f'";
$a2=mysql_query($a1);


?>
</form>
</td>
</tr>
<tr>
<td>2</td>
<td><b>Second week</b></td>
<td><input type="file" name="rep1" accept="application/msword"  disabled="disabled"/></td>
</tr>
<tr>
<td>3</td>
<td><b>Third week</b></td>
<td><input type="file" name="rep1" accept="application/msword"  disabled="disabled" /></td>
</tr>
<tr>
<td>4</td>
<td><b>fourth week</b></td>
<td><input type="file" name="rep1" accept="application/msword" disabled="disabled" /></td>
</tr>
<tr>
<td>5</td>
<td><b>fifth week</b></td>
<td><input type="file" name="rep1" accept="application/msword" disabled="disabled" /></td>
</tr>
<!--<tr>
<td>2</td>
<td><b>second week</b></td>
<td><input type="file" name="rep2" accept="application/msword" /></td>
</tr>
<tr>
<td>3</td>
<td><b>third week</b></td>
<td><input type="file" name="rep3" accept="application/msword" /></td>
</tr>
<tr>
<td>4</td>
<td><b>forth week</b></td>
<td><input type="file" name="rep4" accept="application/msword" /></td>
</tr>
<tr>
<td>5</td>
<td><b>fifth week</b></td>
<td><input type="file" name="rep5" accept="application/msword" /></td>
</tr>
<tr>
<td>6</td>
<td><b>sixth week</b></td>
<td><input type="file" name="rep6" accept="application/msword" /></td>
</tr>
<tr>
<td>7</td>
<td><b>seventh week</b></td>
<td><input type="file" name="rep7" accept="application/msword" /></td>
</tr>
<tr>
<td>8</td>
<td><b>eightth week</b></td>
<td><input type="file" name="rep8" accept="application/msword" /></td>
</tr>-->
</table>
<div align="center">
<b style="color:#F00;"><u>NOTE</u>:</b>only after comlpetion of project.<br/><br />
<b style="color:#F00;"><u>NOTE</u>:</b>Project must be in rar format.<br /><br />
<form enctype="multipart/form-data"  method="POST">
<b style="color:#306; font-size:14px;">
 Upload report&raquo;</b> <input name="uploadedfile" type="file" /><br />
 <input type="submit" value="Upload" />
 <?php
include 'include/connect.php';
$temp = explode(".", $_FILES['uploadedfile']['name']);
$extension = end($temp);
if($extension=='pdf')
{
$target_path = "Documents/Report/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "<script> alert('The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded') </script>";
} else{
    echo "<script> alert('There was an error uploading the file, please try again!')</script>";
}
}
$xyz=$_FILES['uploadedfile']['name'];
$x1="update stud_reg set report='$xyz' where l_email='$f'";
$x2=mysql_query($x1);


?>

 </form>
 </div>
 <div align="center">
 <br /><b style="color:#F00;"><u>NOTE</u>:</b>Database must be in sql format.<br />
<form enctype="multipart/form-data" method="POST">
<br /><b style="color:#306; font-size:14px;">
 Upload sql&raquo;</b> 
 <input name="uploaded" type="file" /><br /><br />
 <input type="submit" value="Upload" />
  <?php

$temp = explode(".", $_FILES['uploaded']['name']);
$extension = end($temp);
if($extension=='sql')
{
$target_path = "Documents/Database/";

$target_path = $target_path . basename( $_FILES['uploaded']['name']); 

if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
    echo "<script> alert('The file ".  basename( $_FILES['uploaded']['name']). 
    " has been uploaded') </script>";
} else{
    echo "<script> alert('There was an error uploading the file, please try again!')</script>";
}
}
$xy=$_FILES['uploaded']['name'];
$x3="update stud_reg set database='$xy' where l_email='$f'";
$x4=mysql_query($x3);


?>
 
 </form>
 </div>
 <div align="center">
 <br /><b style="color:#F00;"><u>NOTE</u>:</b>Project must be in rar format.<br />
<form enctype="multipart/form-data" method="POST">
<br /><b style="color:#306; font-size:14px;">
 Upload Project&raquo;</b> 
 <input name="upload" type="file" /><br /><br />
 <input type="submit" value="Upload" />
   <?php

$temp = explode(".", $_FILES['upload']['name']);
$extension = end($temp);
if($extension=='rar')
{
$target_path = "Documents/Project/";

$target_path = $target_path . basename( $_FILES['upload']['name']); 

if(move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)) {
    echo "<script> alert('The file ".  basename( $_FILES['upload']['name']). 
    " has been uploaded') </script>";
} else{
    echo "<script> alert('There was an error uploading the file, please try again!')</script>";
}
}
$x=$_FILES['upload']['name'];
$x5="update stud_reg set project='$x' where l_email='$f'";
$x6=mysql_query($x5);


?>
 <?php
}

?>
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center" style="padding-left:350px;">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>

</body>
</html>
