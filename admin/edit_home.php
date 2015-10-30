
<?php
include 'include/connect.php';//select the table 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/edit_action.css" media="all"/>
<title>Admin | Edit Valid Lists Details</title>
 <script>
				function onupdate()
					{
						if(confirm('Are You Sure You Want To Update This Content  ?')==true)
							{
								return true;	
							}
						else
							{
								return false;	
							}
					}
			</script>
</head>

<body>
<p><?php
	@$id = $_GET['edit_hide'];
	$query = "select * from spam_predefine where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit Valid Lists Details</var> </h1></font>
                        <br>
        		<a href="view_home.php"> BACK </a>
                    <!--first table created-->
                    <table style="margin-left:20px;">                      
                  
                                    
                                    
                                    <tr><td> <font size="+2" color="#000">Name:</font></td></tr>
                                    <tr><td><input type="text" name="update_name"  value="<?php echo $data[1]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">Designation:</font></td></tr>
<!--                                    <tr><td><input type="text" name="update_desig" value="<?php/* echo $data[2];*/ ?>"style="width:180px; height:35px;" /></td></tr>-->
                                        <tr>
            <td>
            <select  name="update_desig" style="width:180px; height:35px;" /> 
 <option value=""> <?php echo $data[2]; ?></option>
 <option >Professor</option>
 <option> Associate Professor </option>
 <option >  Assistant Professor  </option>
 <option >Lecturer</option>
 <option >  </option>
 </select>
 </td>
 </tr>
                                      <tr><td><font size="+2" color="#000">Email:</font></td></tr>
                                    <tr><td><input type="text" name="update_email" value="<?php echo $data[3]; ?>"style="width:180px; height:35px;" /></td></tr>
                                    
                              
                                    
                 
                                   
                                   <tr>
            					   <td align="right">
                					<input type="submit" name="update1" value="Edit Details" style="width:120px;  height:35px; margin-bottom:5px; margin-top:5px;"  onClick="return onupdate();" />
                                    
                            
                					<input type="hidden" name="edit_hide1" value="<?php echo $data[0]; ?>" />
             					   </td>
       							   </tr>
    				</table>
        
    
   
    </form>
 
    
	
	
	
	
<?php
		}
	@$id2 =$_GET['edit_hide1'];

	@$update_name=trim($_GET['update_name']);
	@$update_desig=trim($_GET['update_desig']);
    @$update_email=trim($_GET['update_email']);
	
	if(isset($_GET['update1']))
	{
		if($update_desig=="")
		{
		
		$query1="update spam_predefine set name='$update_name',email='$update_email' where id='$id2'";
		$sql1=mysql_query($query1);
		$data1=mysql_fetch_array($sql1);
		}
		else
		{
				$query1="update spam_predefine set name='$update_name',designation='$update_desig',email='$update_email' where id='$id2'";
		$sql1=mysql_query($query1);
		$data1=mysql_fetch_array($sql1);
		}
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_home.php'</script>";
			}
		else
			{
			echo '<script> alert("Not Updated!!")</script>';
			echo "<script>window.location='view_home.php'</script>";
			}
	}

?>

</div>
</body>
</html>
