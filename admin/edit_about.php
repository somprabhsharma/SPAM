<?php
include 'include/bsr_connectivity.php';//select the table 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/edit_action.css" media="all"/>
<title>Admin | Edit AboutUs Details</title>
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
	$query = "select * from bsr_aboutus where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit User Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table style="margin-left:20px;">                      
                  
                                    
                                    <tr><td > <font size="+2" color="#000">Category</font></td></tr>
                                    <tr><td><input type="text" name="update_cat"  value="<?php echo $data[1]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Text</font></td></tr>
                                    <tr><td><input type="text" name="update_text"  value="<?php echo $data[2]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">Image</font></td></tr>
                                    <tr><td><input type="text" name="update_image" value="<?php echo $data[3]; ?>"style="width:180px; height:35px;" /></td></tr>
                                    
                              
                                     <tr><td> <font size="+2" color="#000">Name</font></td></tr>
                                    <tr><td><input type="text" name="update_name" value="<?php echo $data[4]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">E-mail Id</font></td></tr>
                                    <tr><td><input type="text" name="update_id" value="<?php echo $data[5]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Contact</font></td></tr>
                                    <tr><td><input type="text" name="update_con" value="<?php echo $data[6]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    
                 
                                   
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

	@$update_cat=trim($_GET['update_cat']);
	@$update_text=trim($_GET['update_text']);
	@$update_image=trim($_GET['update_image']);
	@$update_name=trim($_GET['update_name']);
	@$update_id=trim($_GET['update_id']);
	@$update_con=trim($_GET['update_con']);
	
	if(isset($_GET['update1']))
	{
		$query1="update bsr_aboutus set category='$update_cat',text='$update_text',image='$update_image',name='$update_name',emailid='$update_id',contact='$update_con' where id='$id2'";
		$sql1=mysql_query($query1);
		
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_aboutus.php'</script>";
			}
		else
			{
			echo '<script> alert("Not Updated!!")</script>';
			}
	}

?>

</div>
</body>
</html>