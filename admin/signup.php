<?php 
include 'include/connect.php';//select the table 
		  ?>
		  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Endearing Green 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130425

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Admin | SignUp </title>
 <link rel="stylesheet" href="css/signup.css" type="text/css" media="screen">
 <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
</head>
<body>
 <?php include('include/header.php');?>

			<div id="headr" align="right">
    		<?php
			echo @"<a href='logout.php' style='color:black; text-decoration:none;'>Logout </a> $nbsp" ;
			echo @" $nbsp | $nbsp";
			    				echo @" $nbsp<a href='change_password.php' style='color:black; text-decoration:none;'>Change password</a>";
								
							?></div>		
       
        <div id="outercontainer" >
        
<div id="left_out_container" >
 <img src="images/build-bg.gif" />

  


</div>
<div id="Right_out_container"><div id="inner1">
<h1>Enter Your Details below.</h1>
</div>
<div id="innr">
<div id="left_inner" align="left" style="font-family:Georgia, 'Times New Roman', Times, serif;">

 </form>
 <div class="blocks"><b>First Name:</b></div>
 <div class="blocks"><b>Last Name: </b></div>
 <div class="blocks"><b>Password:</b></div>
  <div class="blocks"><b>Confirm password:</b></div>

 <div class="blocks"><b>Email-id:</b></div>
 <div class="blocks"><b>Contact:</b></div>
 <div class="blocks"><b>City:</b></div>
  
 
 
 
 
</div>
<div id="right_inner" >
<form method="get">

<div class="blocks2">
<input type="text" onclick="this.value='';" onfocus="this.select()" name="firstname" style="width:330px; height:35px; color:#000;" required/>
            <font size="+4"></font><br/>
 
  
  </div>
  <div class="blocks2">
<input type="text" onclick="this.value='';" onfocus="this.select()" name="lastname" style="width:330px; height:35px; color:#000;" required/>
            <font size="+4"></font><br/>
 
  </div>
  <div class="blocks2">
 <input type="password" onclick="this.value='';" onfocus="this.select()" name="password"   style="width:330px; height:35px; margin-left:0px;  color:#000;" required><br />
 </div>
            
            
            
		<div class="blocks2" align="left">
  
			<input type="password" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Password':this.value;" name="confirmPassword" value="Password" style="width:330px; height:35px; margin-left:0px; color:#D0D0D0;" required><br />
            </div>
 
 
 		<div class="blocks2">
<input type="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter your Email id here':this.value;" name="email" value="Enter your Email id here"  style="width:330px; height:35px; color:#000;" />
            <font size="+4"></font><br/>

  </div>
                 

 <div class="blocks2">
 <input type="phone" name = 'phone' style="width:330px; height:35px;" required/> 
 
 </div>
  <div class="blocks2">
  <select  name="city" style="width:120px; height:30px;" required> 
 <option value="">Select city </option>
 <option>Jaipur </option>
 <option> Kota </option>
 <option > Jodhpur </option>
 <option >Udaipur</option>
 <option > Ajmer </option>
 </select>
 
 </div>
 
            
            <div id="blocks">
<input type="submit" name="signup" value="Sign up.." style="width:135px; height:45px; font-size:18px;  " />
           
           
            </div>
			
            
            
   
  </form> 
  <?php
  
	  if(isset($_GET['signup']))
	  {	  
	   	 
		  @$f_name=$_GET['firstname'];
		  @$l_name=$_GET['lastname'];
		  @$pass=$_GET['password'];
		    @$confirmpass=$_GET['confirmPassword'];
			
		 If($confirmpass==$pass)
		 {
		  @$email=$_GET['email'];
			
		   @$contact=$_GET['phone'];
		  @$city=$_GET['city'];
	  	  @$sql = "insert into spam_signup_admin values ('','$f_name','$l_name','$pass','$email','$contact','$city',now(),'0')";
		  $result=mysql_query($sql);
		  if($result)
		  {
			 ?>
             <script>
			  alert('Signup process complete.');
			  </script>
              <?php
		  }
		  else
		  {
			  ?>
			  <script>alert('error!');</script>
		 <?php
          }
	  }
	  }
  ?>
</div>
</div>
</div>

</body>
</html>