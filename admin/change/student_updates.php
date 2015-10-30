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
<a href="deadline.php"> <font size="+1">BACK</font> </a>
  <form method='get'>
      
        <table style="padding-left:90px; padding-top:30px;">
         <tr>  <td> project</td><td> <input type="date" name="project" min="2014-1-01" max="2022-10-20"/></td> </tr>
           <tr>  <td> synopsis</td><td> <input type="date" name="synopsis" min="2014-1-01" max="2022-10-20" /></td> </tr>
             <tr>  <td> registration date</td><td> <input type="date" name="reg_date" min="2014-1-01" max="2022-10-20" /></td> </tr>
               <tr>  <td> report date</td><td> <input type="date" name="rep_date" min="2014-1-01" max="2022-10-20"/></td> </tr>
                 <tr>  <td> presentation date</td><td> <input type="date" name="ppt_date" min="2014-1-01" max="2022-10-20"/></td> </tr>
                 
                   
                   <tr><td></td><td></td></tr> <tr><td></td><td></td></tr> <tr><td></td><td></td></tr> <tr><td></td><td></td></tr>
         <tr> <td> <input type="submit" name="submit1" value="submit" style="width:100px; height:30px;">
            
                <a href="view_student_updates.php" style="width:100px; height:30px;">View</a>
            </td></tr>
           
            </table>
            
         </form>
    <?php
		$divi=$_GET['submit1'];
				if(isset($_GET['view1']))
				{
					echo "<script>window.location='view_home.php'</script>";
				
				}
			
				if(isset($_GET['submit1']))
				
				{
					@$a=$_GET['project'];
					@$b=$_GET['synopsis'];
					@$c=$_GET['reg_date'];
					@$d=$_GET['ppt_date'];
					@$e=$_GET['repot_date'];
					@$f=$_GET['guide_all'];
					
					$query="insert into updates values('','$a','$b','$c','$d','$e','$f')";
					mysql_query($query);
				}
				?>
                </div>
</div></body></html>