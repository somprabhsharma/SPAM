<html>
<head>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | View_Rent</title>
</head>
<body>
<?php
include 'include/connect.php';//select the table 

	
		$sql="SELECT * FROM spam_list where type='student'";
	
	$result = mysql_query($sql);
	

?>
<div id="wrapper" style="background-color:#E7E7E7">
<span><big> <h1><font color="#000">List of Student</font></h1></big> </span> 


<a href="rent.php"> BACK </a>

<br />
<table border="1" bordercolor="#8D4747" align="center" style="background-color:#E7E7E7"; width:"100%;">

    <tr>
    <th><font size="+2" color="#8F4747">S.No.</font></th>
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Student Name</font></th>
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
	  echo "<td>" . $row[5] . "</td>";
	  echo "<td>" . $row[6] . "</td>";
	  echo "<td>" . $row[7] . "</td>";
	  echo "<td>" . $row[8] . "</td>";
	  echo "<td>" . $row[9] . "</td>";
	    echo "<td>" . $row[10] . "</td>";
	  echo "<td>" . $row[11] . "</td>";
	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_rent.php"> 				
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
    
</table>
</div>

</body>
</html>