<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>list_cor.php</title>

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

<SCRIPT SRC="js/ssm.js" language="JavaScript1.2">

//Dynamic-FX slide in menu v6.5 (By maXimus, http://maximus.ravecore.com/)
//Updated July 8th, 03' for doctype bug
//For full source, and 100's more DHTML scripts, visit http://www.dynamicdrive.com

</SCRIPT>
</head>

<body>
<?php
	include 'include/connect.php';
?>
<div id="c" style="padding-left:250px;
padding-right:250px;">
 <table border="2">
  <caption> <h2>Electronics & Communication Department Guides</h2></caption>

    <tr>
    <th> S.No.</th>
    
    <th><b>List of all registered EC Guides</b> </th>
    <th><b>Designation</b></th>
    </tr>
  
<?php
$q= "select * from spam_sign_in where category='guide' and dept='Electronics & Communication' and value='1' ";
$sql=mysql_query($q);
$count=1;
while($result=mysql_fetch_array($sql))

{
	?>
    
    <tr style="padding-left:15px;">
    <td style="width:30px;
    padding-left:20px;"><?php
  echo $count;
  $count++;
  
?>
</td>
    <td style="padding-left:15px;" >
    <?php
	echo $result["name"];
	
	
?>
</td>
 <td style="padding-left:15px;" >
 



    <?php
	echo $result["designation"];
	
?>
</td>
</tr>
<?php
}
?>
</table>
</div>

</body>
</html>