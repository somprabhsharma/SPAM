<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

<?php /*?><?php
include 'include/header.php';
?><?php */?>
<form action="stud_page.php" method="post">
<?php
session_start();
	include ('include/connect.php');
	@$a1=$_SESSION['email'];
	@$b="select * from stud_reg where l_email='$a1'";
	@$query=mysql_query($b);
while($result=mysql_fetch_array($query))
{
	@$c=$result['leader name'];
	
	}	
?>

  
     </form>
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

      <li class="last"><a href="change_pass.php">Change Password</a></li>
            <li class="last"><a href="logout.php">Logout</a></li>

    </ul>
  </div>
</div>


<div id="c" style="padding-left:250px; padding-top:50px;">
<h2><big><h1>Instructions!</h1></big></h2>
<table bgcolor="#FFFFFF" style="border:hidden;"><tr><td style="width:400px;">
<h3>Project Submission date:</h3></td><td>23 november 2013</td></tr>
<tr><td><h3>Last date of project Submission:</h3></td><td>23 november 2013 </td></tr>
<tr><td><h3>Synopsis Submission date:</h3></td><td>23 november 2013 </td></tr>
<tr><td><h3>Last date of synopsis Submission:</h3></td><td> 23 november 2013</td></tr>

<tr><td><h3>Presentation date:</h3></td><td>23 november 2013 </td></tr>
<tr><td><h3>Report Submission:</h3></td><td>23 november 2013 </td></tr></table>
</br><br/>
<p><ul style="padding-left:13px;"><li>Above information should be strictly followed by students otherwise it's your own responsibility.</li>
<li>Keep in contact with your guide.</li>
<li>For more information check your email daily.</li></ul>
</p>


<p style="align:center; padding-left:300px; font-size:20px;"><a href="stud_page.php">Continue..</a></p>
</div>


<!-- ###################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 