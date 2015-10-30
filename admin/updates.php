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
         <tr><td>Division Name:</td>
               
       <td>  <select  name="Select_Box" style="width:120px; height:30px;" required > 
                <option value="">select </option>

         <option>co-ordinator </option>
         <option> guide</option>
         <option >student</option>
         <option >project</option>
         </select></tr></td>
        
        
		
        
        <tr><td>
        	Enter your content:
            </td>
          <td> <textarea name="text1" rows="15" style="width:300px;"></textarea></td>
          </tr>
          <br>
          <tr>
          <td></td>
          <td>
            <input type="submit" name="submit1" value="submit" style="width:100px; height:30px;">
            
                <a href="view_updates.php" style="width:100px; height:30px;">View</a>
            </td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            </table>
            
         </form>
    <?php
		$divi=$_GET['Select_Box'];
				if(isset($_GET['view1']))
				{
					echo "<script>window.location='view_home.php'</script>";
				/*?>	<!--$con=$_GET['text1'];
					
					$query="select content from admin_panel where category='home' and typeofcontent='$divi'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}--><?php */
				}
			
				if(isset($_GET['submit1']))
				
				{
					 @$divi=$_GET['Select_Box'];
					
					@$con=$_GET['text1'];
					
					$query="insert into spam_admin_panel values('','$divi','$con','home','home.jpg',now(),'0')";
					mysql_query($query);
				}
				?>
                </div>
</div></body></html>