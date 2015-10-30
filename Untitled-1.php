<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Project Teams</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
</head>
<body>
<?php
	
	include 'include/connect.php';
	include 'include/header.php';
?>
<div id='g' style="height:600px; width:900px;" align="center">
<h1> Student Registration</h1>
<form method="post" action="student_team.php" >
<table style="height:250px;">	
    	<tr>
        	<td>
            Name:
            </td>
            <td>
            <input type="text" name="projectname" style="width:300px;"/>
            </td>
        </tr>
        <tr>
        	<td>
            Branch:
            </td>
            <td>
            <select  name="Branch" style="width:300px; height:30px;" required> 
 <option value="">Branch</option>
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
            Team members:
            </td>
            
            <td align="left">
<input type='radio' name='Team_mem' value='3' />3
<input type='radio' name ='Team_mem' value='4'/>4
<input type='radio' name ='Team_mem' value='5'/>5
</td>
</tr>
   <tr>
        	<td>
            Technology Used:
            </td>
            
            <td align="left">
<input type='radio' name='Tech' value='.NET' />.NET
<input type='radio' name ='Tech' value='java'/>Java
<input type='radio' name ='Tech' value='PHP'/>PHP
<input type='radio' name ='Tech' value='MySQL'/>MySQL
<input type='radio' name ='Tech' value='Networking'/>Networking
<input type='radio' name ='Tech' value='Linux'/>Linux
<input type='radio' name ='Tech' value='matlab'/>matlab
<input type='radio' name ='Tech' value='mobile'/>Mobile Technology
</td>
            
        </tr>
 </select>
 <tr>
 <td>Password</td>
 <td><input type="password" name="pass"  style="width:300px;"/>
 </td>
 </tr>
 <tr>
 <td>Confirm password</td>
 <td><input type="password" name="cpass"  style="width:300px;"/>
 </td>
 </tr>
 
 </table>
 
   <tr>     
        
        
            <td>
                       <input type="submit" name="Submit" value="submit" style="background-color:#63C; width:80px; height:30px; color:#FFF"/>

            <input type="reset" name="Reset" value="reset" style="background-color:#63C; width:80px; height:30px; color:#FFF"/>
            </td>
        </tr>
       
    </form>
    </div>

<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
  </div>
</body>
</html>