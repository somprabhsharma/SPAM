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

<form method="get">
 <br><br><br><table style="padding-left:60px;">
 <tr><td>Content</td>
 <td><textarea name="content" style="width:200px;"></textarea></td></tr>
 
 <tr><td></td><td></td></tr> <tr><td></td><td></td></tr>
  <tr><td>Instructions</td>
 <td><textarea name="instruction" style="width:200px;"></textarea></td></tr>
 
  <tr><td></td><td></td></tr> <tr><td></td><td></td></tr>
  <tr><td>Note</td>
 <td><textarea name="note" style="width:200px;"></textarea></td></tr>
 
<tr><td></td><td></td></tr>
 <tr><td></td><td><input type="submit" name="submit" value="submit" style="width:80px; height:30px;"/>
 <a href="view_synopsis.php">View</a></td></tr>
 </table>
 
	</form>
    
  <?php
  	@$a=$_GET['content'];
		@$b=$_GET['instruction'];
		@$c=$_GET['note'];
    if(isset($_GET['submit']))
	{
	$query= "insert into synopsis values('','$a','$b','$c')";
	mysql_query($query);
	}
	?>
    
   </div>
</div>
</body>
</html>