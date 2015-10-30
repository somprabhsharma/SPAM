<html>
<head>
<title>Admin | View_Project</title>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
</head>
<body style="background-color:#E7E7E7">
<?php
include 'include/connect.php';//select the table 

	
		$sql="SELECT * FROM updates";
	
	$result = mysql_query($sql);

?>
<div id="wrapper">
<span><big> <h1><font color="#000">Update Details</font></h1></big> </span> <br /><br>


<a href="deadline.php"> <font size="+1">BACK</font> </a>
<br /><br>
<table border="1" bordercolor="#8D4747" align="center" style=" width:100%">

    <tr>
    <th><font size="+2" color="#8F4747">sr</font></th>
    <th><font size="+2" color="#8F4747">project</font></th>
    <th><font size="+2" color="#8F4747">synopsis</font></th>
    <th><font size="+2" color="#8F4747">reg_date</font></th>
    	<th><font size="+2" color="#8F4747">ppt_date</font></th>
           <th><font size="+2" color="#8F4747">report_date</font></th>
    	
        
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
	
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_student_updates.php"> 
                 <input type="hidden" name="edit_hide" value="<?php echo @$row[0]; ?>" />				
                    <input type="submit" name="edit" class="pass_delete" value="Edit"/>
                     
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
	
$del="Delete from updates where id='$hide'";


$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='view_student_updates.php'</script>";
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