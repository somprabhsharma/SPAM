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
         <br><br>
<a href="updates.php"> <font size="+1">BACK</font> </a>
  <form method='get'>
      
        <table style="padding-left:90px; padding-top:30px;">
             <tr>  <td> About the website</td><td> <textarea name="website"></textarea></td> </tr>
        <tr><td></td><td></td></tr>
                 <tr>  <td>About the project</td><td><textarea name="project"></textarea></td> </tr>
                   <tr><td></td><td></td></tr>
                     <tr>  <td> Technology</td><td> <textarea name="technology"></textarea></td> </tr>
                   
                   <tr><td></td><td></td></tr> <tr><td></td><td></td></tr> <tr><td></td><td></td></tr> <tr><td></td><td></td></tr>
         <tr> <td> <input type="submit" name="submit1" value="submit" style="width:100px; height:30px;">
            
                <a href="view_information.php" style="width:100px; height:30px;">View</a>
            </td></tr>
           
            </table>
    
            
         </form>
           
          <?php
		$divi=$_GET['submit1'];
				if(isset($_GET['view1']))
				{
					echo "<script>window.location='view_information.php'</script>";
				
				}
			
				if(isset($_GET['submit1']))
				
				{
					@$a=$_GET['website'];
					@$b=$_GET['project'];
					@$c=$_GET['technology'];
					
					$query="insert into information values('','$a','$b','$c','')";
					mysql_query($query);
				}
				?>

                </div>
</div></body></html>