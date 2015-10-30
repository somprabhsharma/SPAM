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
        <form method='get'>
        <table>
         <tr><td><font color="#666666">Branch:</font></td>
               
       <td>  <select  name="Select_Box" style="width:120px; height:30px;" required > 
                <option value="">select branch </option>

         <option>CS</option>
         <option>IT</option>
         <option>EIC</option>
         <option>EEE</option>
         <option>ECE</option>
         <option>MECHANICAL</option>
         <option>CIVIL</option>
         
         
         </select></tr></td>
        
        
		
        
        <tr><td><font color="#666666">
        	Enter Project Name:
           </font> </td>
          <td> <textarea name="text1" rows="15" style="width:300px;"></textarea></td>
          </tr>
          <br>
          <tr>
          <td></td>
          <td>
            <input type="submit" name="submit1" value="submit" style="width:100px; height:30px;">
            
                <a href="view_project.php" style="width:100px; height:30px;">View</a>
            </td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            </table>
            
         </form>
    <?php
		$divi=$_GET['Select_Box'];
				if(isset($_GET['view1']))
				{
					echo "<script>window.location='view_project.php'</script>";
				$con=$_GET['text1'];
					
					$query="select content from spam_projects where category='$divi'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
			
				if(isset($_GET['submit1']))
				
				{
					 @$divi=$_GET['Select_Box'];
					
					@$con=$_GET['text1'];
					
					$query="insert into spam_projects values('','$con','$divi',now(),'0')";
					mysql_query($query);
				}
				?>
                </div>
</div></body></html>