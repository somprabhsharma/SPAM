<?php
include 'include/connect.php';//select the table 
?><html>
<head>
<title>Admin | change password</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>

</head>

<body>


<?php
include("include/header.php");?>
    	<div id="headr" align="right">
    		<?php
			echo "<a href='logout.php' style='color:black; text-decoration:none;'>Logout </a>" ;	
			
							?>
                            </div>
 
 
 <div id="containr">
 <img src="images/cooltext1106061409.png" style="width:600px; height:100px;" />

<div id="inner">
<form method="post">
<table>
<tr><td>
	Old Password: 
    </td>
    
    <td>
    	<input type="password" name="oldpassword" style="width:300px; height:40px;" required><br>
        </td>
        </tr>
        <br /><tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr>
        <td>
    New Password: 
    </td>
    <td>   
        <input type="password" name="newpassword" style="width:300px; height:40px;" required><br>
        </td></tr>
        <br /><tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr>
        <td>
    Confirm Password:
    </td><td>
        <input type="password" name="confirmpassword" style="width:300px; height:40px;" required><br></td></tr>
        <br /><br />
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
       
        <tr>
        <td></td>
        <td>
		<center><input type="submit" name="change_password" value="change password" style="width:150px; height:30px;"></center>
        </td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        </table>
	</form>
<?php
	error_reporting(0);
	session_start();
	if(isset($_POST['change_password']))
	{
		$cur_password=$_POST['oldpassword'];
$password1=$_POST['newpassword'];
$password2=$_POST['confirmpassword'];
	$email=$_SESSION['email'];
	
$query="select * from spam_signup_admin where email='$email'";
		
		$res=mysql_query($query);
		
		$data=mysql_fetch_array($res);

    $oldpass=$data['password'];


if (empty ($_POST['oldpassword'])){
echo "Fill out all fields.";
}
else if ($cur_password != $oldpass) {
echo "There was a problem. Wrong Password.";
} else if ($password1 != $password2) {
echo "Passords don't match.";
} else {
$sql = "UPDATE spam_signup_admin SET password = '$password1' WHERE email='$email' LIMIT 1";
mysql_query($sql);
	 header('Location: dashbord.php?msg=Success! Password has been changed.');				

}


	}
	
	
		
	
?>


	</div>	
</div>
	

</body>
</html>