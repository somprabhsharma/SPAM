<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$filename = "report.doc"; 

header("Content-Length: " . filesize($filename)); 
header('Content-Type: application/octet-stream'); 
header('Content-Disposition: attachment; filename=report.doc'); 

readfile($filename); 
?>
</body>
</html>