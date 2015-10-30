<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | Predefine Guide</title>
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
<form method='post'>
        <table>
         <tr><td>Teacher's Name:</td>
               
       <td>  <input type="text" name="Select_Box" value="" required > 
              </td>  </tr>
         <tr>
        	<td>
            Designation:
            </td>
            <td>
            <select  name="designation" style="width:300px; height:30px;" required> 
 <option value="">Branch </option>
 <option >IT</option>
 <option> CS</option>
 <option >  EIC </option>
 <option >EC</option>
 <option >  </option>
 </select>
 </td>
 </tr>
        
		
        
        <tr><td>
        	Email ID:
            </td>
          <td> <input type="text" name="text1" style="width:300px;"/></td>
          </tr>
          <br>
          
          <tr>
          <td></td>
          <td>
            <input type="submit" name="submit1" value="submit" style="width:100px; height:30px;">
            
                <a href="view_preguide.php" style="width:100px; height:30px;">View</a>
            </td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            </table>
            
         </form>
    <?php
		$divi=$_post['Select_Box'];
				if(isset($_post['view1']))
				{
					echo "<script>window.location='view_preguide.php'</script>";
				/*?>	<!--$con=$_post['text1'];
					
					$query="select content from admin_panel where category='home' and typeofcontent='$divi'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}--><?php */
				}
			
				if(isset($_post['submit1']))
				
				{
					 @$divi=$_post['Select_Box'];
					@$desig=$_post['designation'];
					@$con=$_post['text1'];
			



  $query="insert into spam_guide_predefine values('','$divi','$desig','$con','',now(),'0')";
					mysql_query($query);
  }
  
				?>
        
                </div>
</div>
       </body>
</html>