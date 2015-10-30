<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SPAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imaPOSToolbar" content="no" />
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
	session_start();
	
				if(!isset($_SESSION['email']))
				{

					echo "<script> alert('Login First!!');</script>";
                   echo "<script> window.location='index.php'</script>";
				
					
					

				}
				else 
				{
					$c=$_SESSION['email'];


?>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">SPAM</a></h1>
      <p>Student Project Allocation Management</p>
    </div>
    <div class="fl_right">
       <h2>Welcome <?php echo $c ;?></h2>
      <ul>
        <li class="last"><a href="#">Search</a></li>
        <li><a href="www.google.com">Online Support</a></li>
        <li><a href="www.ecajmer.ac.in">College Board</a></li>
      </ul>
      <p>Tel: +91-0145-267 1800 |</p><p> Mail: principal@ecajmer.ac.in</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2" style="padding-left:175px; width:auto;">
  <div id="cssmenu">
    <ul>
       
        
      </li>
      <li class="has-sub"><a href="#">Co-ordinator List</a>
        <ul>
          <li><a href="co-it.php">Information Technology</a></li>
                    <li><a href="co-cs.php">Computer Science</a></li>
                     <li><a href="co-ec.php">Electronics & communication</a></li>
                            <li><a href="co-eic.php">EIC</a></li>
                    <li><a href="co-e.php">Electrical</a></li>
            <li><a href="co-m.php">mechanical</a></li>
 </ul>
      </li>
      <li class="has-sub"><a href="#">Guide List</a>
        <ul>
              <li><a href="gu-it.php">Information Technology</a></li>
                    <li><a href="gu-cs.php">Computer Science</a></li>
                     <li><a href="gu-ec.php">Electronics & communication</a></li>
                            <li><a href="gu-eic.php">EIC</a></li>
                    <li><a href="gu-e.php">Electrical</a></li>
            <li><a href="gu-m.php">mechanical</a></li>
        </ul>
      </li>
      
      <li class="has-sub"><a href="#">Student List</a>
       <ul>
     <li><a href="st-it.php">Information Technology</a></li>
                    <li><a href="st-cs.php">Computer Science</a></li>
                     <li><a href="st-ec.php">Electronics & communication</a></li>
                            <li><a href="st-eic.php">EIC</a></li>
                    <li><a href="st-e.php">Electrical</a></li>
            <li><a href="st-m.php">mechanical</a></li>          </ul></li>
            
            
            
           <li class="has-sub"><a href="#">Projects</a>
        <ul>
        
          <li><a href="cs.php">Computer Science</a></li>
          <li><a href="eee.php">Electrical</a></li>
          <li><a href="ec.php">Electronics & Communication</a></li>
            <li><a href="eic.php">EIC</a></li>
              <li><a href="it.php">Information Technology</a></li>
                <li><a href="mech.php">Mechanical</a></li>
                  <li><a href="civil.php">Civil</a></li>
                 
        </ul>
      </li>

            <li class="last"><a href="logout.php">Logout</a></li>


    </ul>
  </div>
</div>


 <div id="c">
 

<div id="inner">
<form method="POST">
<table>
<tr><td>
	Old Password: 
    </td>
    
    <td>
    	<input type="password" name="oldpassword"  style="width:300px; height:40px;" required><br>
        </td>
        </tr>
        <br /><tr><td></td><td></td></tr>
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
        <tr>
        <td>
    Confirm Password:
    </td><td>
        <input type="password" name="confirmpassword" style="width:300px; height:40px;" required><br></td></tr>
        <br /><br />
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
        </table>
	</form>
<?php
	error_reporting(0);

	
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
	if($_POST['change_password'])
	{
		
		$query="select password from spam_sign_in where email='$c' and category='co-ordinator'";
		
		$res=mysql_query($query);
		
		$data=mysql_fetch_array($res);
		
		$oldpass=$data['password'];
		
		if($oldpassword==$oldpass)
		  {
			   if($newpassword==$confirmpassword)
			     { 
				    $up="update spam_sign_in set password='$newpassword' where password='$oldpassword' and category='co-ordinator'";
					mysql_query($up);
					echo "<script>alert('Password has been changed');</script>";
					echo "<script>window.location='index.php'</script>";
				 }
				else
				 {
					  echo "<script>alert('does not match/incorrect')</script>";
				 }				 
		  }
		 else
		  {
			   echo "<script>alert('old password does not match')</script>";
		  }
		  
	}
				}
?>


	</div>	
</div>
	

</body>
</html>