<!--

/*
Configure menu styles below
NOTE: To edit the link colors, go to the STYLE tags and edit the ssm2Items colors
*/
YOffset=165; // no quotes!!
XOffset=-30;
staticYOffset=30; // no quotes!!
slideSpeed=20 // no quotes!!
waitTime=100; // no quotes!! this sets the time the menu stays out for after the mouse goes off it.
menuBGColor="#F8F7DF";
menuIsStatic="yes"; //this sets whether menu should stay static on the screen
menuWidth=200; // Must be a multiple of 10! no quotes!!
menuCols=2;
hdrFontFamily="verdana";
hdrFontSize="2.5";
hdrFontColor="white";
hdrBGColor="#600060";
hdrAlign="center";
hdrVAlign="center";
hdrHeight="15";
linkFontFamily="Verdana";
linkFontSize="2";
linkBGColor="#F8F7DF";
linkOverBGColor="#DAB5E1";

linkTarget="_top";
linkAlign="center";
barBGColor="#5B5B5B";
barFontFamily="Verdana";
barFontSize="2";
barFontColor="white";
barVAlign="center";
barWidth=20; // no quotes!!
barText="LATEST UPDATES"; // <IMG> tag supported. Put exact html for an image to show.

///////////////////////////

// ssmItems[...]=[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
ssmItems[0]=["Project updates"] //create header
ssmItems[1]=["Announcements", "announcement.php", ""]
ssmItems[2]=["Synopsis submission", "synopsis_submission.php",""]
ssmItems[3]=["Guide Allocation", "guide_allocation.php", ""]
ssmItems[4]=["Project Submission", "project_submission.php", "_new"]
ssmItems[5]=["Dead Lines", "deadline.php", ""]
ssmItems[6]=["Other Informations", "other_information.php", ""]

ssmItems[7]=["FAQ", "faq.php", "", 1, "no"] //create two column row
ssmItems[8]=["FEEDBACK", "feedback.php", "",1]
/*ssmItems[9]=["External Links", "", ""] //create header
ssmItems[10]=["JavaScript Kit", "http://www.javascriptkit.com", ""]
ssmItems[11]=["Freewarejava", "http://www.freewarejava.com", ""]
ssmItems[12]=["Coding Forums", "http://www.codingforums.com", ""]*/

buildMenu();

//-->