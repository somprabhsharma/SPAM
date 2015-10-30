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
<script>
$(document).ready(function(){
 
  $("input[name$='Team_mem']").click(function(){
 
  var radio_value = $(this).val();
 
  if(radio_value=='3') {
	  $("#1_box").show("slow");
	  $("#2_box").show("slow");
    $("#3_box").show("slow");
     $("#4_box").hide();
	  $("#5_box").hide();
  }
  else if(radio_value=='4') {
   $("#1_box").show("slow");
   $("#2_box").show("slow");
   $("#3_box").show("slow");
   $("#4_box").show("slow");
	 $("#5_box").hide();
   }
    else if(radio_value=='5') {
   $("#1_box").show("slow");
   $("#2_box").show("slow");
   $("#3_box").show("slow");
   $("#4_box").show("slow");
   $("#5_box").show("slow");
  
   }
  });
 $("#2_box").hide();
 $("#1_box").hide();
  $("#5_box").hide();
  $("#3_box").hide();
  $("#4_box").hide();
 
});
</script>
</head>

<body style="background-color:#F8F7DF;">
<?php
	
	include 'include/connect.php';
	include 'include/header.php';
?>
<div id='c' style="height:auto; width:850px;" align="center">
<h1> Student Registration</h1>
<form method="post" action="student_team.php">
<table style="height:250px;">	
    	<tr>
        	<td>
             Project Name:
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
            <select  name="branch" style="width:300px; height:30px;" required> 
 <option value="">Branch</option>
 <option value="CS">CS</option>
 <option value="IT"> IT </option>
 <option value="EE">EE</option>
 <option value="ME">ME</option>
 <option value="EIC"> EIC </option>
  <option value="ECE"> ECE </option> 
   
 </select>
 
            </td>
        </tr>
       <tr>
        	<td>
            Team members:
            </td>
            
            <td align="left">
<input type='radio' name='Team_mem' value='3' />3
<input type='radio' name ='Team_mem' value='4' />4
<input type='radio' name ='Team_mem' value='5' />5
  
  
<div id="1_box">
 
<table>
 <th><?php
 
		   echo "Team leader's information";
			?>
          </th></tr> 
 <tr>
 <td>
 name:      
 </td><td>
 <input type="text" name="s_name15" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
Category:      
 </td><td>
 <select  name="s_category15" style="width:203px; height:20px;" required> 
 <option value=""></option>
 <option >Team Leader</option>

 </select> </td>
 </tr>
 <tr>
 <td>
 College Id
 </td><td>
 <input type="text" name="s_cid15" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
 Contact No.
 </td><td>
 <input type="text" name="s_cn15" value="" style="width:200px;" maxlength="10"/>
 </td>
 </tr>
 <tr>
 <td>
 Email-Id
 </td><td>
 <input type="email" name="s_e_id15" value="" style="width:200px;"/>
 </td>
 </tr>
</table>
</div>


 <div id="2_box">
 <table>
                <tr>
			<th style="padding-top:40px;"><?php
		   echo "Member no. 2 information";
			?>
          </th></tr> 
 <tr>
 <td>
 name:      
 </td><td>
 <input type="text" name="s_name25" value="" style="width:200px;" />
 </td>
 </tr>
 
 <tr>
 <td>
 College Id
 </td><td>
 <input type="text" name="s_cid25" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
 Contact No.
 </td><td>
 <input type="text" name="s_cn25" value="" style="width:200px;" maxlength="10" />
 </td>
 </tr>
 <tr>
 <td>
 Email-Id
 </td><td>
 <input type="email" name="s_e_id25" value="" style="width:200px;"/>
 </td>
 </tr>
 </table>
  </div>
 <div id="3_box">
 <table>
                <tr>
			<th style="padding-top:40px;"><?php
		   echo "Member no. 3 information";
			?>
          </th></tr> 
 <tr>
 <td>
 name:      
 </td><td>
 <input type="text" name="s_name35" value="" style="width:200px;" />
 </td>
 </tr>

 <tr>
 <td>
 College Id
 </td><td>
 <input type="text" name="s_cid35" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
 Contact No.
 </td><td>
 <input type="text" name="s_cn35" value="" style="width:200px;" maxlength="10" />
 </td>
 </tr>
 <tr>
 <td>
 Email-Id
 </td><td>
 <input type="email" name="s_e_id35" value="" style="width:200px;"/>
 </td>
 </tr>
 </table>
  </div>
  <div id="4_box">
  <table>
                 <tr>
			<th style="padding-top:40px;"><?php
		   echo "Member no. 4 information";
			?>
          </th></tr> 
 <tr>
 <td>
 name:      
 </td><td>
 <input type="text" name="s_name45" value="" style="width:200px;" />
 </td>
 </tr>
 
 <tr>
 <td>
 College Id
 </td><td>
 <input type="text" name="s_cid45" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
 Contact No.
 </td><td>
 <input type="text" name="s_cn45" value="" style="width:200px;" maxlength="10" />
 </td>
 </tr>
 <tr>
 <td>
 Email-Id
 </td><td>
 <input type="email" name="s_e_id45" value="" style="width:200px;"/>
 </td>
 </tr>
 </table>
  </div>
  <div id="5_box">
  <table>
       <tr>
			<th style="padding-top:40px;"><?php
		   echo "Member no. 5 information";
			?>
          </th></tr> 
 <tr>
 <td>
 name:      
 </td><td>
 <input type="text" name="s_name55" value="" style="width:200px;" />
 </td>
 </tr>

 <td>
 College Id
 </td><td>
 <input type="text" name="s_cid55" value="" style="width:200px;" />
 </td>
 </tr>
 <tr>
 <td>
 Contact No.
 </td><td>
 <input type="text" name="s_cn55" value="" style="width:200px;" maxlength="10" />
 </td>
 </tr>
 <tr>
 <td>
 Email-Id
 </td><td>
 <input type="email" name="s_e_id55" value="" style="width:200px;" />
 </td>
 </tr>
  
 </table>
 
</div>
</td>
 
</tr>
   <tr>
        	<td>
            Technology Used:
            </td>
            
            <td align="left">
<input type='radio' name ='Tech' value='.NET' />.NET
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

 </table>
 
   <tr>     
        
        
            <td>
                       <input type="submit" name="submit" value="submit" style="background-color:#63C; width:80px; height:30px; color:#FFF"/>

            <input type="reset" name="reset" value="reset" style="background-color:#63C; width:80px; height:30px; color:#FFF"/>
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