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

<SCRIPT SRC="js/ssm.js" language="JavaScript1.2">

//Dynamic-FX slide in menu v6.5 (By maXimus, http://maximus.ravecore.com/)
//Updated July 8th, 03' for doctype bug
//For full source, and 100's more DHTML scripts, visit http://www.dynamicdrive.com

</SCRIPT>

<SCRIPT SRC="js/ssmItems.js" language="JavaScript1.2"></SCRIPT>

</head>
<body>
<?php
include 'include/header.php';
?>
<!--<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox"> 
      <h2>Co-ordinators Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="coname">Username:
              <input type="text" name="coname" id="coname" value="" />
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
        </form>
      </div>
      <div class="topbox">
        <h2>Guides Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>guide Login Form</legend>
            <label for="gname">Username:
              <input type="text" name="gname" id="gname" value="" />
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
        </form>
      </div>
      <div class="topbox last">
        <h2>Students Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>student Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="sname" id="sname" value="" />
            </label>
            <label for="spass">Password:
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
<!-- ####################################################################################################### -
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
<!-- ####################################################################################################### --
<div class="wrapper col2" style="padding-left:175px;">
  <div id="cssmenu">
    <ul>
      <li class="active"><a href="index.html">Home</a>
       <!--<ul>
          <li><a href="#">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
         <!-- <li class="last"><a href="#">Suspendisse</a></li>--
        
      </li>
      <li class="has-sub"><a href="index.html">Co-ordinator Panel</a>
        <ul>
          <li><a href="#">Registration Form</a></li>
          <li><a href="#">List of Co-ordinators</a></li>
      <!--    <li class="last"><a href="#">Praesent et eros</a></li>--
        </ul>
      </li>
      <li class="has-sub"><a href="#">Guide Panel</a>
        <ul>
          <li><a href="#">Registration Form</a></li>
          <li><a href="#">List of All Guides</a></li>
          <li class="last"><a href="#">Common Queries</a></li>
        </ul>
      </li>
      
      <li class="has-sub"><a href="#">Student Panel</a>
       <ul>
          <li><a href="#">Registration Form</a></li>
          <li><a href="#">List of All students</a></li>
          </ul></li>
           <li class="has-sub"><a href="#">Project Ideas</a>
        <ul>
          <li><a href="#">Computer Science</a></li>
          <li><a href="#">Electrical</a></li>
          <li><a href="#">Electronics & Communication</a></li>
            <li><a href="#">EIC</a></li>
              <li><a href="#">Information Technology</a></li>
                <li><a href="#">Mechanical</a></li>
                  <li><a href="#">Civil</a></li>
        </ul>
      </li>
      <li class="last"><a href="#">About Us</a></li>
    </ul>
  </div>
</div>-->
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="featured_slide">
    <div id="featured_wrap">
      <ul id="featured_tabs">
        <li><a href="#fc1">Students in college<br />
          <span>Group making.</span></a></li>
        <li><a href="#fc2">Project Assigned<br />
          <span>Based on different languages.</span></a></li>
        <li><a href="#fc3">Guide with students<br />
          <span>guidance provided to students.</span></a></li>
        <li class="last"><a href="#fc4">project making and submission<br />
          <span>deep study of Project.</span></a></li>
      </ul>
      <div id="featured_content">
      <div id="featured_tab">
        <div class="featured_box" id="fc1"><img src="images/demo/1376294562_485065949_1-CBSE-ICSE-JAVE-C-Ready-Made-Project-Work-for-students-Gurgaon-Sector-10.jpg" width="620" height="290"alt="" />
          <div class="floater"><a href="#">Continue Reading &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc2"><img src="images/demo/ReferenceBooks.jpg" width="620" height="290" alt="" />
          <div class="floater"><a href="#">Continue Reading &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc3"><img src="images/demo/Parkes-students.jpg" width="620" height="290" alt="" />
          <div class="floater"><a href="#">Continue Reading &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc4"><img src="images/demo/DreamProject.jpg" width="620" height="290" alt="" />
          <div class="floater"><a href="#">Continue Reading &raquo;</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="hpage">
      <ul>
        <li>
          <h2>Who are the Co-ordinators?</h2>
          <div class="imgholder"><a href="#"><img src="images/demo/download (1).jpg"  width="200" height="140"alt="" /></a></div>
          <p>"Coordinator" can refer to a position within an organization or business with significant responsibilities for acting as a liaison between guides and students in the begining of a projectand information sources, which requires by students or guides.</p>
        </li>
        <li>
          <h2>Who can be a Guide for projects?</h2>
          <div class="imgholder"><a href="#"><img src="images/demo/images (4).jpg" width="200" height="140" alt="" /></a></div>
          <p>"Guide" is a person who leads others to more abstract goals such as knowledge or wisdom.Guide should be a proffessor or Asst. proffessor of this college,and must be a registered guide in our website.</p>
        </li>
        <li>
          <h2>Who can apply as a student?</h2>
          <div class="imgholder"><a href="#"><img src="images/demo/download (2).jpg" width="200" height="140" alt="" /></a></div>
          <p>Students who wants to develop a project,can register here and get the guides, suggestions about their projects and can ask their queries. For asking any query student must be registered here.</p>
        </li>
        <li class="last">
          <h2>Steps for projects making.....</h2>
          <div class="imgholder"><a href="#"><img src="images/demo/download (3).jpg" width="200" height="140" alt="" /></a></div>
          <p>Before making any project students can learn a few steps which might be helpful for developing their projects.Here we are providing some guidelines for students to follow while developing the project.<br /> <a href="steps.php" style="color:#009" ><b>Click here for guidelines &raquo;</b></a> </p>
         
        </li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<!--<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>-->
<!-- ####################################################################################################### -->
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