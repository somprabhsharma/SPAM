<?php

include 'include/connect.php';//select the table 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/edit_action.css" media="all"/>
<title>Admin | Edit Buy Details</title>
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
	$query = "select * from spam_admin_panel where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit Property Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table style="margin-left:20px;">                      
                  
                                    
                                    <tr><td > <font size="+2" color="#000">Type</font></td></tr>
                                    <tr><td><input type="text" name="update_type"  value="<?php echo $data[1]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Property Type</font></td></tr>
                                    <tr><td><input type="text" name="update_ptype"  value="<?php echo $data[2]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">City</font></td></tr>
                                    <tr><td><input type="text" name="update_city" value="<?php echo $data[3]; ?>"style="width:180px; height:35px;" /></td></tr>
                                    
                              
                                     <tr><td> <font size="+2" color="#000">Property Name</font></td></tr>
                                    <tr><td><input type="text" name="update_pname" value="<?php echo $data[4]; ?>" style="width:180px; height:35px;" /></td></tr>
                 
                                   <tr><td> <font size="+2" color="#000">Address</font></td></tr>
                                    <tr><td><input type="text" name="update_add" value="<?php echo $data[5]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Description</font></td></tr>
                                    <tr><td><input type="text" name="update_des" value="<?php echo $data[6]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Contact</font></td></tr>
                                    <tr><td><input type="text" name="update_contact" value="<?php echo $data[7]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Price</font></td></tr>
                                    <tr><td><input type="text" name="update_price" value="<?php echo $data[8]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Keyword</font></td></tr>
                                    <tr><td><input type="text" name="update_key" value="<?php echo $data[9]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Image</font></td></tr>
                                    <tr><td><input type="text" name="update_image" value="<?php echo $data[10]; ?>" style="width:180px; height:35px;" /></td></tr>
                                    
                                   <tr>
            					   <td align="right">
                					<input type="submit" name="update1" value="Edit Details" style="width:120px;  height:35px; margin-bottom:5px; margin-top:5px;"  onClick="return onupdate();" />
                                    
                            
                					<input type="hidden" name="edit_hide1" value="<?php echo $data[0]; ?>" />
             					   </td>
       							   </tr>
    				</table>
        
    
   
    </form>
 
    </div>
</body>
</html>
	
	
	
	
<?php
		}
	@$id2 =$_GET['edit_hide1'];

	@$update_type=trim($_GET['update_type']);
	@$update_ptype=trim($_GET['update_ptype']);
	@$update_city=trim($_GET['update_city']);
	@$update_pname=trim($_GET['update_pname']);
	@$update_add=trim($_GET['update_add']);
	@$update_des=trim($_GET['update_des']);
	@$update_cont=trim($_GET['update_contact']);
	@$update_price=trim($_GET['update_price']);
	@$update_key=trim($_GET['update_key']);
	@$update_image=trim($_GET['update_image']);
	
	
	if(isset($_GET['update1']))
	{
		$query1="update spam_admin_panel set type='$update_type',propertytype='$update_ptype',city='$update_city',propertyname='$update_pname',address='$update_add',description='$update_des',contact='$update_cont',price='$update_price',keyword='$update_key',image='$update_image' where id='$id2'";
		$sql1=mysql_query($query1);
		
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_buy.php'</script>";
			}
		else
			{
			echo '<script> alert("Not Updated!!")</script>';
			}
	}

?>

