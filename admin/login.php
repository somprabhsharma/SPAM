<?php
session_start();
include 'include/bsr_connectivity.php';//select the table 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/login.css" media="all"/>
<title>Admin | Login Box</title>
</head>

<body> 
<div id="wrapper" align="center">
	
    <div id="inner" align="center">
    	
		<form method="get">
        <table border="4px" bordercolor="#EDEDED";>
        	<tr>
            <td>
			<input type="email"  name="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'email':this.value;" value="email"  style="width:330px; height:45px;"/><br/>
            </td>
            </tr>
            <tr><td>
			<input type="password" name="password" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Password':this.value;" value="Password"  style="width:330px; height:45px;"><br /></td></tr>
            </table>
            <table>
			<tr>
            <td><input type="submit" name="login" value="Log In" style="width:150px; height:35px;"/></td>
            <td><input type="checkbox" id="remember" value="Remember" /></td>
			<td><div class="hover-opacity"><label for="remember">Remember me</label></div></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
			<tr align="center"><td></td><td></td><td><a href="forgotpassword.php">Forgot Password ?</a>
            </td>
            </tr>
            </table>
            
		</form>
        	<!--<div id="botoom_inner"><a href="#">Forgot Password..?</a></div>-->
    </div>
</div>
</body>
</html>
<?php

echo @$a=$_GET['email'];
echo @$b=$_GET['password'];
if(isset($_GET['login']))
{  
	 echo @$query="select email and password from bsr_signup_admin where  password ='$b' and email ='$a'";
	 echo @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
	if($data)
	{
		echo $_SESSION['email']=$a;
		echo "<script> window.location='dashbord.php'</script>";
	}
}
?>