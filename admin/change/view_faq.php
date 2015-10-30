<html>
<head>
<link rel="stylesheet" type="text/css" href="css/view_details.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | View_faq</title>
</head>
<body style="background-color:#E7E7E7">
<?php
include 'include/connect.php';//select the table 

	
		$sql="SELECT * FROM faq";
	
	$result = mysql_query($sql);
	
?>
<div id="wrapper">
<span><big> <h1><font color="#000">FAQ Detail</font></h1></big> </span> <br /><br>
<a href="faq.php"> <font size="+1">BACK</font> </a>
<br /><br>
<table border="1" bordercolor="#8D4747" >

    <tr>
 
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Category</font></th>
    <th><font size="+2" color="#8F4747">Content</font></th>
    	<th><font size="+2" color="#8F4747">Submitted on</font></th></tr><tr>
<?php
	@$sr=1;
	while(@$row = mysql_fetch_array($result))
	  {
	
	  echo "<td>" . $row[0] . "</td>";
	  echo "<td>" . $row[1] . "</td>";
	  echo "<td>" . $row[2] . "</td>";
	  echo "<td>" . $row[3] . "</td>";

	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="edit_faq.php"> 				
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
	
$del="Delete from faq where id='$hide'";



$result=mysql_query($del);
if($result)
{
	echo "<script>window.location='view_faq.php'</script>";
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