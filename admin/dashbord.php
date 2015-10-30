<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>

<title>Admin | dashboard</title>
</head>

<body>
<?php
error_reporting(0);
	
	
	if(!isset($_SESSION['email']))
	{
		echo "<script>window.location='index.php'</script>";
	}
	

	?>
    <?php
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
	<div id="inner" style="padding-bottom:60px;">

		
            <img src="images/admin.png" style="width:530px; height:330px;"/>
           
          
        
    <?php
		
				if(isset($_GET['view1']))
				{
					$con=$_GET['text1'];
					
					$query="select content from bsr_admin_panel where category='home'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
				
				if(isset($_GET['submit1']))
				{
					$con=$_GET['text1'];
					
					$query="insert into bsr_admin_panel values('','$con','home','home.jpg',now(),'0')";
					mysql_query($query);
				}
				?>
          <?php  
		@$id=$_GET['id'];
	if($id=='aboutus')
		{
		?>
		<form method='get'>
        <table>
        <tr><td>
        	Enter your content:
            </td><td>
            <textarea name="text2" rows="15" style="width:300px;" ></textarea></td>
            </tr><br>
            <tr>
            <td></td>
            <td>
            <input type="submit" name="submit2" value="submit" style="width:100px; height:30px;">
             <input type="submit" name="view2" value="view" style="width:100px; height:30px;">
             </td>
            
            </tr>
            </table>
         </form>
    <?php
		}
		?>
        <?php
		if(isset($_GET['view2']))
				{
					$con=$_GET['text2'];
					
					$query="select content from bsr_admin_panel where category='aboutus'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
				if(isset($_GET['submit2']))
				{
					$con=$_GET['text2'];
					
					$query="insert into bsr_admin_panel values('','$con','aboutus','aboutus.jpg',now(),'0')";
					$sql= mysql_query($query);
					
				}
				?>
		<?php
        @$id=$_GET['id'];
		if($id=='contactus')
		{
		?>
		<form method='get'>
        <table><tr>
        <td>
        	Enter your content:
            </td><td><textarea name="text3" rows="12" style="width:300px;"></textarea>
            </td></tr><br>
            <tr>
            <td></td>
            <td>
            <input type="submit" name="submit3" value="submit" style="width:100px; height:30px;">
             <input type="submit" name="view3" value="view" style="width:100px; height:30px;">
				</td>
            </tr>
            </table>
         </form>
    <?php
		}
		?>
       <?php
	   if(isset($_GET['view3']))
				{
					$con=$_GET['text3'];
					
					$query="select content from bsr_admin_panel where category='contactus'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
	    
     if(isset($_GET['submit3']))
				{
					$con=$_GET['text3'];
					
					$query="insert into bsr_admin_panel values('','$con','contactus','contactus.jpg',now(),'0')";
					mysql_query($query);
				}
				?>
               
            </div> 
            </div>  
           
			

</body>
</html>
