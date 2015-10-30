<?php
include 'include/connect.php';//select the table 
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
	$query = "select * from faq where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper" align="center"> 	
	
        		<form method="get">
                        <font color="#000"><h1 style="padding-top:50px;"><var> Edit FAQ Page Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table align="center" style="padding-top:50px;">                      
                  
                    <tr><td> <font size="+2" color="#000">Content</font></td></tr>
                                 <tr><td><textarea name="update_content"  value="<?php echo $data[1]; ?>" ></textarea></td></tr>
                                    
                              <tr><td><font size="+2" color="#000">Category</font></td></tr>
                                 <tr><td><input type="text" name="update_category" value="<?php echo $data[2]; ?>" /></td><tr>
            					   <td>
                		<input type="submit" name="update1" value="Edit Details" style="width:120px;  height:35px; margin-bottom:5px; margin-top:5px;"  onClick="return onupdate();" />
                                    
                            
                					<input type="hidden" name="edit_hide1" value="<?php echo $data[0]; ?>" />
             					   </td>
       							   </tr>
    				</table>
        
    
   
    </form>
 
    
	
	
	
	
<?php
		}
	@$id2 =$_GET['edit_hide1'];

	@$update_category=trim($_GET['update_category']);
	@$update_content=trim($_GET['update_content']);

	
	if(isset($_GET['update1']))
	{
		$query1="update faq set category='$update_category',content='$update_content' where id='$id2'";
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