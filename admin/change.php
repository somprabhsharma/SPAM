<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | Students</title>
</head>
<body>
<?php
 error_reporting(0);

	include("include/header.php");?>
    	<div id="headr" align="right">
    		<?php
			echo "<a href='logout.php' style='color:black; text-decoration:none;'>Logout </a> $nbsp" ;
			echo " $nbsp | $nbsp";
			    				echo " $nbsp<a href='change_password.php' style='color:black; text-decoration:none;'>Change password</a>";
								echo " $nbsp|$nbsp";
			    				echo " $nbsp<a href='signup.php' style='color:black; text-decoration:none;'>Register?</a>";
							?>
					
       </div>
       <?php
       $sql="SELECT * FROM stud_reg ";
	
	$result = mysql_query($sql);

?>

    


<div id="wrappers">

<span><big> <h1><font color="#000">Students Groups List</font></h1></big> </span> 


<!--<a href="preguide.php"> BACK </a>-->

<br />

<table border="1" bordercolor="#8D4747" style=" width:100%;">

    <tr>
    <th><font size="+2" color="#8F4747">sr</font></th>
    <th><font size="+2" color="#8F4747">id</font></th>
    <th><font size="+2" color="#8F4747">Projects Names</font></th>
     <th><font size="+2" color="#8F4747">Branch</font></th>
    <th><font size="+2" color="#8F4747">Leader Name</font></th>
     <th><font size="+2" color="#8F4747">Leader's Email</font></th>
      <th><font size="+2" color="#8F4747">Guide's Name</font></th>
    	<th><font size="+2" color="#8F4747">Technology</font></th>
        <th colspan="2"><font size="+2" color="#8F4747">Updations</font></th>
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
	  echo "<td>" . $row[7] . "</td>";
	  echo "<td>" . $row[41] . "</td>";
	  echo "<td>" . $row[42] . "</td>";
	
	 
	  
	  @$sr++;
?>
  							<!--change password and delete buttons-->	
           <td>
           		 <form method="get" action="changetech.php"> 				
                    <input type="submit" name="edit" class="pass_delete" value="Edit" style="width:100px;"/>
                    <input type="hidden" name="edit_hide" value="<?php echo @$row[0]; ?>" /> 
            </form>
            </td>
         
            </tr>
  <?php
	  }
	  ?>
  
	
			 
			
			

    
</table>
</div>
</div>

       </body>