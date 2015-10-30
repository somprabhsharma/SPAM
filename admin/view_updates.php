<html>
<head>
<title>Admin | View_Project</title>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
</head>
<body background="#E7E7E7">
<?php
include 'include/connect.php';//select the table 

	
		$sql="SELECT * FROM spam_projects";
	
	$result = mysql_query($sql);

?>
<div id="wrapper" style="background-color:#E7E7E7">
<span><big> <h1><font color="#000">Update Details</font></h1></big> </span> 


<a href="home.php"> BACK </a>

<br />
<table border="1" bordercolor="#8D4747" align="center" style=" width:100%">

    <tr>
    <th><font size="+2" color="#8F4747">sr</font></th>
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Projet Name</font></th>
    <th><font size="+2" color="#8F4747">Branch</font></th>
    	<th><font size="+2" color="#8F4747">Submitted on</font></th>
<?php
	@$sr=1;
	while(@$row = mysql_fetch_array($result))
	  {
	  echo "<tr>";
	  echo "<td>" . $sr . "</td>";
	  echo "<td>" . $row[0] . "</td>";
	  echo "<td>" . $row[1] . "</td>";
	  echo "<td>" . $row[2] . "</td>";
	  echo "<td>" . $row[3] . "</td>";
	  echo "<td>" . $row[4] . "</td>";
	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_project.php"> 				
                    <input type="submit" name="edit" class="pass_delete" value="Edit"/>
                    <input type="hidden" name="edit_hide" value="<?php echo @$row[0]; ?>" /> 
            </form>
            </td>
             <td>
                	<form method='get'>
        	<input type='submit' value='delete' name='delete' onClick="return onupdate();" />
			<input type='hidden' name='hide' value='<?php echo $row['0']; ?>'/>
            		</form>
            </td>
            </tr>
  <?php
	  }
	  ?>
       <?php	
		error_reporting(0);
		if(isset($_GET['delete']))
		{
								
	$hide=$_GET['hide'];
	
$del="Delete from spam_project where id='$hide'";



$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='view_project.php'</script>";
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