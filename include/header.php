<?php
session_start();
	include ('connect.php');
?>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox"> 
      <h2>Co-ordinators Login Here</h2>
        <form  method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="coname">E-mail ID:
              <input type="email" name="coname" id="coname" value="" />
            </label>
            <label for="copass">Password:
              <input type="password" name="copass" id="copass" value="" />
            </label>
            <label for="coremember">
              <input class="checkbox" type="checkbox" name="coremember" id="coremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="cologin" id="cologin" value="Login" />
              &nbsp;
              <input type="reset" name="coreset" id="coreset" value="Reset" />
            </p>
          </fieldset>
       
      </div>
      <div class="topbox">
        <h2>Guides Login Here</h2>
       
          <fieldset>
            <legend>guide Login Form</legend>
            <label for="gname">E-mail ID:
              <input type="email" name="gname" id="gname" value="" />
            </label>
            <label for="gpass">Password:
              <input type="password" name="gpass" id="gpass" value="" />
            </label>
            <label for="gremember">
              <input class="checkbox" type="checkbox" name="gremember" id="gremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="glogin" id="glogin" value="Login" />
              &nbsp;
              <input type="reset" name="greset" id="greset" value="Reset" />
            </p>
          </fieldset>
       
      </div>
      <div class="topbox last">
        <h2>Students Login Here</h2>
      
          <fieldset>
            <legend>student Login Form</legend>
            <label for="pupilname">Team Leader's E-mail
              <input type="text" name="sname" id="sname" value="" />
            </label>
            <label for="spass">SID-Password:
              <input type="password" name="spass" id="spass" value="" />
            </label>
            <label for="sremember">
              <input class="checkbox" type="checkbox" name="sremember" id="sremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="slogin" id="slogin" value="Login" />
              &nbsp;
              <input type="reset" name="sreset" id="sreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">SPAM</a></h1>
      <p>Student Project Allocation Management</p>
    </div>
    <div class="fl_right">
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
      <li class="active"><a href="index.php">Home</a>
       <!--<ul>
          <li><a href="#">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
         <!-- <li class="last"><a href="#">Suspendisse</a></li>-->
        
      </li>
      <li class="has-sub"><a href="#">Co-ordinator Panel</a>
        <ul>
          <li><a href="co-rdinatorreg.php">Registration Form</a></li>
          <li><a href="list_cor.php">List of Co-ordinators</a></li>
      <!--    <li class="last"><a href="#">Praesent et eros</a></li>-->
        </ul>
      </li>
      <li class="has-sub"><a href="#">Guide Panel</a>
        <ul>
          <li><a href="guidereg.php">Registration Form</a></li>
          <li><a href="list_guide.php">List of All Guides</a></li>
        </ul>
      </li>
      
      <li class="has-sub"><a href="#">Student Panel</a>
       <ul>
          <li><a href="stureg.php">Registration Form</a></li>
          <li><a href="list_stud.php">List of All students</a></li>
          </ul></li>
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
      <li class="last"><a href="aboutus.php">About Us</a></li>
      <li class="last"><a href="admin/index.php">Admin</a></li>
            <li class="last"><a href="help.php">Help</a></li>

    </ul>
  </div>
</div>
<?php

if($_POST['cologin']=='Login')
{
	
	$a=$_POST['coname'];
	$b=$_POST['copass'];
	$q="select * from spam_sign_in where email= '$a' and password= '$b'";
	$sql=mysql_query($q);
if($result=mysql_fetch_array($sql))
{
	
	
	echo "<script>alert('login successful')</script>";
	echo "<script> window.location='co_info.php'</script>";
		$_SESSION['email']=$a;

	}
else
	{
		echo "<script>alert('login not successful')</script>";
		}
	
	}
 elseif($_POST['glogin']=='Login')
{
	
	$a1=$_POST['gname'];
	$b1=$_POST['gpass'];
	$q1="select * from spam_sign_in where email='$a1' and password= '$b1' and category='guide'";
	$sql1=mysql_query($q1);
if($result=mysql_fetch_array($sql1))
{

	echo "<script>alert('login successful')</script>";
		echo "<script> window.location='guide_page.php'</script>";
			$_SESSION['email']=$a1;

	}

	

	else
	{
		echo "<script>alert('login not successful')</script>";
		}
		
	}	
 elseif($_POST['slogin']=='Login')
{
	
	$a2=$_POST['sname'];
	$b2=$_POST['spass'];
	$q2="select * from stud_reg where l_email='$a2' and ssid= '$b2'";
	$sql2=mysql_query($q2);
if($result=mysql_fetch_array($sql2))
{
	$_SESSION['email']=$a2;
	
	echo "<script>alert('login successful')</script>";
		echo "<script> window.location='s_info.php'</script>";
	}

	

	else
	{
		echo "<script>alert('login not successful')</script>";
		}
		
	}	
?>
