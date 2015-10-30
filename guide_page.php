<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome To Guide Panel</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<style>

#center{
            text-align: center;
        }
</style>
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
$p="select * from spam_sign_in where category= 'guide' and email= '$c'";
$sql1=mysql_query($p);
$res=mysql_fetch_array($sql1);


	$w=$res['name'];
	$t=$res['specialization'];
	$p=$res['project_no'];

				if($p<3)
{
	


					?>
<div id="leftcol" style="background-color:#F8F7DF; width:200px; height:500px; border-right:solid; border-bottom:solid; border-bottom-width:thin; border-right-width:thin; border-top:solid; border-top-width:thin; border-color:#000; margin-top:5px;">
<marquee direction="up" height="100%" scrolldelay="200">
synophsis submission date
date:27/8/2013 to 6/9/2013
<hr />
project starting date
date: 8/9/2013
<hr />
project submission date
date:23/11/2013
<hr />
project submission last date
date:27/11/2013
<hr />
practicals date
date:3/1/2014
<hr />
marks giving date
date:3/1/2014

</marquee>


</div>
 <h1 style="color:#306; font-size:36px; font-family:'Comic Sans MS', sans-serif;" id="center">Welcome to Guide panel <?php echo $_SESSION['email'];?>...</h1>
 <p><div style="color:#008000; font-size:16px;">
<u><b style="color:#306; font-size:18px; margin-left:20px;">NOTE:</b></u>This is your account from where you can select any 3 projects form the list and after selecting projects you can click on submit <b style="color:#306; font-size:18px; margin-left:20px;"></b>and you will get students team of that projects.Thank you
</div> 
</p> 

<table align="center" border="1" style="width:600px; border-width:3px; border-color:#8080FF; margin-top:100px;">
<tr>
<th height="20px" align="center">
Projects Name</th>
<th height="20px" align="center">
Technology
</th>
<th height="20px" align="center">
Select(Maximum 3)
</th>

</tr>
<?php


$q= "select * from stud_reg where guide='' and technology='$t' ";
$sql=mysql_query($q);



while($result=mysql_fetch_array($sql))

{
	?>
 <tr>
 <td><?php
 @$pn=$result['project_name'];
 @$li=$result['l_email'];
 @$id=$result['id'];


  echo $pn ;?> </td>
  <td>
 <?php echo $t;?>
  </td>
  
  <td>
  <form method="post" >
 <input type='submit' name='select' value='select' /> </td>
 
 			<input type='hidden' name='hide' value='<?php echo $id; ?>'/>

 
 </tr> 
 </form>
<?php
}
}
else
{
	?>
    
	 <script>window.location='guide_page2.php'</script>
     <?php
}
}

error_reporting(0);
		if(isset($_POST['select']))
		{
								
	$hide=$_POST['hide'];
	
@$del="update stud_reg set guide='$w' where id='$hide' ";



$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='guide_page.php'</script>";
}
else
{
	echo "not updated";
}
		}
	
			 

$sel="Select * from stud_reg where guide='$w'";
$sel1=mysql_query($sel);
		$no=mysql_num_rows($sel1);
	
		$s1="update spam_sign_in SET project_no= '$no' where category='guide' and email='$c'";
		$s2=mysql_query($s1);
?>
</table>



</div>
<h1>
<a href="guide_page2.php"> Continue...</a>
</h1>
</body>
</html>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>