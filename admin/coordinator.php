<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title> Admin | co-ordinator </title>
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
        <form method='get' enctype="multipart/form-data">
        <table>
        <tr><td>Division Name:</td>
        <td>       
         <select  name="Select_Box" style="width:120px; height:30px;" required > 
         <option value="">select</option>
         <option>co-ordinator name </option>
      <option>Designation </option>
<!--         <option> propert_name </option>
         <option >address</option>
         <option >Description</option>
         <option >contact</option>
         <option >price</option>
         <option >keyword</option>
-->        </select>
        
        
		</td></tr>
        <tr><td>
        	Enter your content:
            </td><td>
            <textarea name="text"  rows="15" style="width:300px;" ></textarea></td>
            </tr>
     
             <tr><td>
        	images:
            <?php
            	include "upload.php";
			?>
            </td>
            <td>
            <input name="userfile" type="file" id="userfile" /></td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" name="submit2" value="submit" style="width:100px; height:30px;">
             <a href="view_coordinator.php" style="width:100px; height:30px;"> View </a>
             </td>
            
            </tr>
            </table>
         </form>
    <?php
		$divi=$_GET['Select_Box'];
				if(isset($_GET['view2']))
				{
					
					$con=$_GET['text'];
					
					$query="select content from spam_admin_panel where category='coordinator' and typeofcontent='$divi'";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
				
				if(isset($_GET['submit2']))
				
				{
					 @$divi=$_GET['Select_Box'];
					
					@$con=$_GET['text'];
					
					$query="insert into spam_admin_panel values('','$divi','$con','coordinator','$file_name',now(),'0')";
					mysql_query($query);
				}
				?>
                </div>
</div></body></html>