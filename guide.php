<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SPAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
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
session_start();
			include 'include/connect.php';
			if(!isset($_SESSION['email']))
				{

					echo "<script> alert('Login First!!');</script>";
                   echo "<script> window.location='index.php'</script>";
				
					
					

				}
				else 
				{
					
			 	@$a1=$_SESSION['email'];
	@$b="select * from spam_sign_in where email='$a1'";
	@$query=mysql_query($b);
while($result=mysql_fetch_array($query))
{
	@$c=$result['dept'];
	
	}	
				?>
					

<div id="himani">
	
	<table align="center" border="1" style="width:600px; border-width:3px; border-color:#8080FF; height:auto; margin-top:100px;">
    <caption> <h2><b>GUIDE LIST</b></h2> </caption>
    <font size="+1">
    <tr>
    	<th align="center"> ID </th> 
    	<th align="center"> Name </th> 
    	<th align="center"> Email-ID </th> 

    </tr>
    <?php
	$q= "select * from spam_guide_predefine where branch='$c' and registered='registered'" ;
	$result=mysql_query($q);
	$count=1;
	while ($data = mysql_fetch_array($result))
	{
		echo "<tr> <td>".$count."</td>";
		echo "<td>".$data['name']."</td>";
		echo "<td>".$data['email']."</td>";

		$count++;
	}
	?>
    </font>
    </table>
    </div>
<script type="text/javascript">
        function CallPrint() {
            var prtContent = document.getElementById('himani');
            var WinPrint = window.open('', '', 'letf=0,top=0,width=400,height=400,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
     </script>


<div id="him" align="center"><h2><a href="#" onclick="CallPrint()">Print</a></h2></div>

</body>
</html>
<?php
				}
?>