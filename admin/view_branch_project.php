<html>
<head>
<title>Admin | View_Project</title>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
 <script>
				function onupdate()
					{
						if(confirm('Are You Sure You Want To Delete This Content  ?')==true)
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
<body  style=" background-color:#E7E7E7;">
<?php
include 'include/connect.php';//select the table 
session_start();

$query="select * from spam_projects where category='$br'";
					$data=mysql_query($query);
	
		/*$sql="SELECT * FROM spam_projects where catgory='$divi' ";
	
	$result = mysql_query($sql);
*/
?>
<div id="wrapper" style="background-color:#E7E7E7">
<span><big> <h1><font color="#000">Project Detail</font></h1></big> </span> 


<a href="view_project.php"> BACK </a>

<br />
<table border="1" bordercolor="#8D4747" align="center" style=" width:100%">

    <tr>
    <th><font size="+2" color="#8F4747">sr</font></th>
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Project Name</font></th>
    <th><font size="+2" color="#8F4747">Branch</font></th>
    	<th><font size="+2" color="#8F4747">Submitted on</font></th>
        	<th colspan="2"><font size="+2" color="#8F4747">Updations</font></th>
<?php
	 
	
	@$sr=1;
	while(@$row = mysql_fetch_array($data))
	  {
	  echo "<tr>";
	  echo "<td>" . $sr . "</td>";
	  echo "<td>" . $row[0] . "</td>";
	  echo "<td>" . $row[1] . "</td>";
	  echo "<td>" . $row[2] . "</td>";
	  echo "<td>" . $row[3] . "</td>";
	  
	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="post" action="edit_project.php"> 				
                    <input type="submit" name="edit" class="pass_delete" value="Edit"/>
                    <input type="hidden" name="edit_hide" value="<?php echo @$row[0]; ?>" /> 
            </form>
            </td>
             <td>
     <form method='post'>
        	<input type='submit' value='delete' name='delete' onClick="return onupdate();" />
			<input type='hidden' name='hide' value='<?php echo @$row['0']; ?>'/>
            		</form>
            </td>
            </tr>
  <?php
	  }
	  ?>
       <?php	
		error_reporting(0);
		if(isset($_post['delete']))
		{
								
	$hide=$_post['hide'];
	
$del="Delete from spam_projects where id='$hide'";



$data=mysql_query($del);
if($data)
{
	echo "<script>window.location='view_branch_project.php'</script>";
}
else
{
	echo "not deleted";
}
		}
	
	
			 
			
			
?>
</table>

</div>
</body>
</html>