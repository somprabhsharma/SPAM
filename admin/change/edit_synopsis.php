<?php
include 'include/connect.php';//select the table 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/edit_action.css" media="all"/>
<title>Admin | Edit Project Details</title>
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
	$query = "select * from synopsis where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper" style="padding-left:300px;"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit Synopsis Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table style="margin-left:20px;">                      
                  
                                    
                                    
                                     <tr><td> <font size="+2" color="#000">Content</font></td></tr>
                                    <tr><td><input type="text" name="content"  value="<?php echo $data[1]; ?>" style="width:480px; height:80px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">instruction</font></td></tr>
                                    <tr><td><input type="text" name="instruction" value="<?php echo $data[2]; ?>" style="width:480px; height:80px;"/></td></tr>
                                    
                               <tr><td> <font size="+2" color="#000">note</font></td></tr>
                                    <tr><td><input type="text" name="note"  value="<?php echo $data[3]; ?>" style="width:480px; height:80px;"/></td></tr>
                                    
                                   
                                   
                                   <tr>
            					   <td align="left">
                					<input type="submit" name="update1" value="Edit Details" style="width:120px;  height:35px; margin-bottom:5px; margin-top:5px;"  onClick="return onupdate();" />
                                    
                            
                					<input type="hidden" name="edit_hide1" value="<?php echo $data[0]; ?>" />
             					   </td>
       							   </tr>
    				</table>

    </form>
 
	
<?php
		}
	@$id2 =$_GET['edit_hide1'];

	@$contentt=trim($_GET['content']);
	@$instruction=trim($_GET['instruction']);
	@$note=trim($_GET['note']);


	
	if(isset($_GET['update1']))
	{
		$query1="update synopsis set content='$content',instruction='$instruction',note='$note' where id='$id2'";
		$sql1=mysql_query($query1);
		
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_synopsis.php'</script>";
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