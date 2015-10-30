<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cs projects</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<style type="text/css">
<!--
A.ssmItems:link		{color:black;text-decoration:none;}
A.ssmItems:hover	{color:black;text-decoration:none;}
A.ssmItems:active	{color:black;text-decoration:none;}
A.ssmItems:visited	{color:black;text-decoration:none;}
//-->
</style>

</head>


<body>
<?php
include 'include/connect.php';
?>

<div id="c">

<?php
	$q="select * from spam_projects where category='cs' ";
		$sql=mysql_query($q);
 $count=1;
	echo "<table border='2'> <tr><th>S.No.</th><th>project</th></tr>";
        
	while($result=mysql_fetch_array($sql))
	{
		
		echo "<tr><td style='width:30px;'>".$count."</td><td>";
		
		echo $result[1]."</td></tr>";
		$count++;
	}
	echo "</table>";
	?>
 
 </div>

</body>
</html>