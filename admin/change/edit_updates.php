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
	$query = "select * from updates where id='$id'";
	$sql=mysql_query($query);
	while($data=mysql_fetch_array($sql))
		{
?>
</p>

       <div id="wrapper" style="padding-left:500px;"> 	
	
        		<form method="get">
                        <font color="#000"><h1><var> Edit Project Details</var> </h1></font>
                        <br>
        		
                    <!--first table created-->
                    <table style="margin-left:20px;">                      
                  
                                    
                                    
                                     <tr><td> <font size="+2" color="#000">project</font></td></tr>
                                    <tr><td><input type="text" name="project"  value="<?php echo $data[1]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">synopsis</font></td></tr>
                                    <tr><td><input type="text" name="synopsis" value="<?php echo $data[2]; ?>"style="width:180px; height:35px;" /></td></tr>
                                    
                               <tr><td> <font size="+2" color="#000">reg_date</font></td></tr>
                                    <tr><td><input type="text" name="reg_date"  value="<?php echo $data[3]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">ppt_date</font></td></tr>
                                    <tr><td><input type="text" name="ppt_date" value="<?php echo $data[4]; ?>"style="width:180px; height:35px;" /></td></tr>
                                     <tr><td> <font size="+2" color="#000">report_date</font></td></tr>
                                    <tr><td><input type="text" name="report_date"  value="<?php echo $data[5]; ?>" style="width:180px; height:35px;"/></td></tr>
                                    
                                    <tr><td><font size="+2" color="#000">guide_all</font></td></tr>
                                    <tr><td><input type="text" name="guide_all" value="<?php echo $data[6]; ?>"style="width:180px; height:35px;" /></td></tr>
                                    
                              
                                    
                 
                                   
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

	@$project=trim($_GET['project']);
	@$reg_date=trim($_GET['reg_date']);
	@$synopsis=trim($_GET['synopsis']);
	@$report_date=trim($_GET['report_date']);
	@$ppt_date=trim($_GET['ppt_date']);
	@$guide_all=trim($_GET['guide_all']);

	
	if(isset($_GET['update1']))
	{
		$query1="update updates set project='$project',synopsis='$synopsis',reg_date='$reg_date',ppt_date='$ppt_date',report_date='$report_date',guide_all='$guide_all' where id='$id2'";
		$sql1=mysql_query($query1);
		
		if($sql1)
			{
				echo '<script> alert("You Have Successfully Updated Your Details!!")</script>';								
				echo "<script>window.location='view_updates.php'</script>";
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