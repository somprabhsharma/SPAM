<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | Home</title>

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
<div id="containr">
<img src="images/cooltext1106061409.png" style="width:600px; height:100px;"/>
<div id="inner">
  <br><br> <a href="announcement.php"> announcement</a>
   <br> <br>  <a href="synopsis_submission.php">synopsis submission</a>
    <br> <br><a href="Guide_allocation.php"> Guide allocation</a>
   
    <br>  <br><a href="deadline.php">deadlines</a>
    <br> <br><a href="information_updates.php"> Other information</a>
 
   <br> <br><a href="faq.php"> Faq</a>
				
                </div>
</div></body></html>