<html>
<head>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | View_coordinator</title>
</head>
<body  style="background-color:#E7E7E7">
<?php
include 'include/connect.php';//select the table 

	
		$sql="SELECT * FROM spam_sign_in where category='co-ordinator'";
	
	$result = mysql_query($sql);
	
?>
<div id="wrapper">
<span><big> <h1><font color="#000">List of Co-ordinator</font></h1></big> </span> <br /><br>
<a href="coordinator.php"><font size="+1"> BACK </font></a>

<br /><br>
<table border="1" bordercolor="#8D4747" align="center" style=" width:100px;">

    <tr>
    <th><font size="+2" color="#8F4747">S.No.</font></th>
    <th><font size="+2" color="#8F4747">Name</font></th>
       <th><font size="+2" color="#8F4747">Category</font></th>
       <th><font size="+2" color="#8F4747">Designation</font></th>
              <th><font size="+2" color="#8F4747">Qualification</font></th>
       <th><font size="+2" color="#8F4747">Skill Language</font></th>

       <th><font size="+2" color="#8F4747">Submitted on</font></th>
<?php
	@$sr=1;
	while(@$row = mysql_fetch_array($result))
	  {
	  echo "<tr>";
	  echo "<td>" . $sr . "</td>";
	  echo "<td>" . $row[1] . "</td>";
	  echo "<td>" . $row[2] . "</td>";
	  echo "<td>" . $row[3] . "</td>";
	  echo "<td>" . $row[4] . "</td>";
	  echo "<td>" . $row[5] . "</td>";
	  echo "<td>" . $row[10] . "</td>";


	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_coordinator.php"> 				
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
	
$del="Delete from spam_list where id='$hide'";



$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='view_coordinator.php'</script>";
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