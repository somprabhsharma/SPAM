<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guide Registration</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
</head>

<body>
<?php
	include 'include/header.php';
	include 'include/connect.php';
?>
<div class="wrapper col3" style="padding-top:50px;  ">
<div id="leftcol">
<img src="images/demo/27-Training-text_left.png" height="400px"/></div>
<div id="righttcol">

<form method="post">
	<table style=" height:400px;">	
    	<tr>
        	<td>
            Name:
            </td>
            <td>
            <input type="text" name="guidename" value="" style="width:300px;"/>
            </td>
        </tr>
        <tr>
        	<td>
            Designation:
            </td>
            <td>
            <select  name="designation" style="width:300px; height:30px;" required> 
 <option value="">Designation </option>
 <option >Professor</option>
 <option> Associate Professor </option>
 <option >  Assistant Professor  </option>
 <option >Lecturer</option>
 <option >  </option>
 </select>
 
            </td>
        </tr>
        <tr>
        	<td>
            Qualification:
            </td>
            <td>
            <select  name="qualification" style="width:300px; height:30px;" required> 
 <option value="">Qualification</option>
 <option >B.Tech</option>
 <option>M.Tech </option>
 <option >BBA</option>
 <option >MBA</option>
 <option > BCA</option>
  <option > MCA</option> 
    <option >Phd</option>  
 </select>
            </td>
        </tr>
        <tr>
        	<td>
            Department:
            </td>
            <td>
                  <select  name="department" style="width:300px; height:30px;" required> 
 <option value="">Department</option>
 <option >CS</option>
 <option> IT </option>
 <option >Electrical</option>
 <option >Mechanical</option>
 <option > EIC </option>
  <option > Electronics & Communication </option> 
   
 </select>
            </td>
        </tr>
        <tr>
        	<td>
            Specilization:
            
            <td align="left">
<input type='Checkbox' name ='subject[]' value='.NET'/>.NET
<input type='Checkbox' name ='subject[]' value='java'/>Java
<input type='Checkbox' name ='subject[]' value='PHP'/>PHP
<input type='Checkbox' name ='subject[]' value='MySQL'/>MySQL
<input type='Checkbox' name ='subject[]' value='Networking'/>Networking
<input type='Checkbox' name ='subject[]' value='Linux'/>Linux
<input type='Checkbox' name ='subject[]' value='matlab'/>matlab
<input type='Checkbox' name ='subject[]' value='mobile'/>Mobile Technology
</td>
            </td>
        </tr>
         <tr>
        	<td>
            Email ID:
            </td>
            <td>
            <input type="email" name="email" value="" style="width:300px;" />
            </td>
        </tr>
         <tr>
        	<td>
            Contact No.:
            </td>
            <td>
<input type="text" name="contact" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" value="" style="width:300px;">            </td>
        </tr>
         <tr>
        	<td>
            Password:
            </td>
            <td>
            <input type="password" name="pass" value="" style="width:300px;"/>
            </td>
        </tr>
          <tr>
        	<td>
            Confirm Password:
            </td>
            <td>
            <input type="password" name="c_pass" value="" style="width:300px;"/>
            </td>
        </tr>
         <tr>
        	<td>
            </td>
            <td>
              <input type="submit" name="Submit" value="submit"/>

            <input type="reset" name="Reset" value="reset"/>
            </td>
        </tr>
    </table>
    </form>
    <?php
	if($_POST['Submit']=='submit')
	{
		$v=1;
	foreach($_POST['subject'] as $value)
	{
		$h=$value;
	$a=$_POST['guidename'];
	$b=$_POST['designation'];
	$c=$_POST['qualification'];
	$d=$_POST['department'];
	$e=$_POST['email'];
	$f=$_POST['pass'];
	$g=$_POST['c_pass'];
	$i-$_POST['contact'];
	$check="select * from spam_guide_predefine ";
	$check1=mysql_query($check);
	if($g==$f)
	{
		while(	$arry=mysql_fetch_array($check1))
		
				
	{
	$r= $arry['registered'];
		
		$n=$arry['name'];
		$x=$arry['email'];
       if($a==$n && $e==$x )
	 
	   {
	   
	    if ($r=="")
		{
	$sql="insert  into spam_sign_in values('','$a','','guide','$b','$c','$h','$e','$f','$i','$d','$v')";
		$result=mysql_query($sql);
		if($result)
		{
	echo "<script>alert('you are successfully registered')</script>";
	$q= "update spam_guide_predefine set registered='registered' where name='$a' and email='$e'";
	$res=mysql_query($q);
	               if($res){  echo "<script>alert('done')</script>"; }
	               else{ echo "<script>alert('not done')</script>"; }
		}else
		{
	                echo "<script>alert('Check your details')</script>";
		}
	  }
	 else 
	{
	echo "<script>alert('you are already registered')</script>";
	}

	$v++;
	break;
	}
	else
	{
			echo "<script>alert('you are not valid user')</script>";

		}
	}
	}
		else
	{
	echo "<script>alert('re-enter your password')</script>";
	}}}
	?>
</div>
</div>
</body>
</html>