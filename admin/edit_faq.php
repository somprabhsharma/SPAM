<?php
include 'include/bsr_connectivity.php';//select the table 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/edit_action.css" media="all"/>
<title>Admin | Edit FAQ Page Details</title>
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
	$query = "select * from bsr_admin_panel where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit FAQ Page Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table style="margin-left:20px; width:700px;">                      
                  
                                    
                                    <tr><td > <font size="+2" color="#000">Type Of Content</font></td></tr>
                                    <tr><td><input type="text" name="update_name"  value="<?php echo $data[1]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td> <font size="+2" color="#000">Content</font></td></tr>
                                    <tr><td><input type="text" name="update_contact"  value="<?php echo $data[2]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                   
                              
                                    
                 
                                   
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
	@$update_contact=trim($_GET['update_contact']);

	
	if(isset($_GET['update1']))
	{
		$query1="update bsr_admin_panel set typeofcontent='$update_name',content='$update_contact' where id='$id2'";
		$sql1=mysql_query($query1);
		
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_faq.php'</script>";
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