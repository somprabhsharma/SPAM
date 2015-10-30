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
         <tr><td>Teacher's Name:</td>
               
       <td>  <input type="text" name="Select_Box" value="" required > 
              </td>  </tr>
         <tr>
        	<td>
            Designation:
            </td>
            <td>
            <select  name="designation" style="width:300px; height:30px;" required> 
 <option value="">Designation </option>
 <option >Professor</option>
 <option> Associate Professor </option>
 <option >  Assistant Professor  </option>
 <option >Lecturer</option>
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
            
                <a href="view_home.php" style="width:100px; height:30px;">View</a>
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
					@$desig=$_GET['designation'];
					@$con=$_GET['text1'];
			



  $query="insert into spam_predefine values('','$divi','$desig','$con',now(),'0')";
					mysql_query($query);
  }
  
				?>
        
                </div>
</div>
</body>
</html>