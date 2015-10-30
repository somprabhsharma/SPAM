<html>
<head>
<title> Admin | View AboutUs </title>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>

</head>
<body>
<?php
include 'include/bsr_connectivity.php';//select the table 

	
		$sql="SELECT * FROM bsr_aboutus ";
	
	$result = mysql_query($sql);

?>
<div id="wrapper" style="background-color:#E7E7E7">
<span><big> <h1><font color="#8F4747">AboutUs Detail</font></h1></big> </span> 


<a href="aboutus.php"> BACK </a>

<br />
<table border="1" bordercolor="#000" style="border:solid; "  >

    <tr>
    <th><font size="+2" color="#8F4747">sr</font></th>
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Category</font></th>
    <th><font size="+2" color="#8F4747">Text</font></th>
    <th><font size="+2" color="#8F4747">Image</font></th>
     <th><font size="+2" color="#8F4747">Name</font></th>
    <th><font size="+2" color="#8F4747">E-mail Id</font></th>
    <th><font size="+2" color="#8F4747">Contact</font></th>
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
	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_about.php"> 				
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
	
$del="Delete from bsr_aboutus where id='$hide'";



$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='view_aboutus.php'</script>";
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