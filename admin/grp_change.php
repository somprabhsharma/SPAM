<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | Students</title>
</head>
<body>
<?php
 error_reporting(0);

	include("include/header.php");?>
    	<div id="headr" align="right">
    		<?php
			echo "<a href='logout.php' style='color:black; text-decoration:none;'>Logout </a> $nbsp" ;
			echo " $nbsp | $nbsp";
			    				echo " $nbsp<a href='change_password.php' style='color:black; text-decoration:none;'>Change password</a>";
								echo " $nbsp|$nbsp";
			    				echo " $nbsp<a href='signup.php' style='color:black; text-decoration:none;'>Register?</a>";
							?>
					
       </div>
       </body>
</html>