<?php
	session_start();
include 'include/bsr_connectivity.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | ContactUs</title>
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
               
         <select  name="Select Box" style="width:120px; height:30px;" required> 
         <option value="">Select  </option>
         <option>Buy </option>
         <option> Sell </option>
         <option > Rent </option>
         <option >Our Client</option>
         </select>
       
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
                