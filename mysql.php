<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
/*Actual filename = 'attachment.zip' (Unknown to the viewers). 
When downloaded to be saved as 'mydownload.zip'. 
*/ 
$filename='mysql.sql'; 
header("Content-type: application/sql"); 
header("Content-Disposition: attachment; filename=$filename"); 
echo file_get_contents('sqlpro.sql'); 
?>
</body>
</html>