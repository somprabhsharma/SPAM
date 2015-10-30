
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SPAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
    
     
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



<SCRIPT SRC="js/ssmItems.js" language="JavaScript1.2"></SCRIPT>
      
    </head>
    <body>
        
       

     <?php
	 	error_reporting(0);
	 	
			
include ('include/connect.php');//select the table 
	
	
include('include/header.php');
		?>
		       
    
            
        
        <div  id="c" style="font-size:14px;" >         
         <div id="box">
         <div class="box1">
          <div class="l_box1">
         <div class="inner_l_box1">
         <img src="images/himani.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
        <div class="text" style="margin-bottom:12px;" >
                                <b>Name :</b>
                                          
                                </div>
                                 <div class="field" style="margin-bottom:12px; text-align:justify" >
                                 <p>
            	<?php 
				@$a="select * from spam_aboutus where category='himani' order by id desc limit 1";
				$q=mysql_query($a);
				while($query=mysql_fetch_array($q))
				{
				echo $query['name'];
				}
				?></p>
                 <div class="text"  align="justify">
                                <b>Description :</b>
                                </div>
                                <div class="field"  align="justify">
                                                    <p>
                                   <?php 
                                    @$a="select * from spam_aboutus where category='himani'order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>  
                                
                                </div>
                   
                             
                                
                                
         </div>
           <div class="l_box1">
          <div class="inner_l_box1">
        <img src="images/nathu.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
         
         <div class="text" style="margin-bottom:12px;" align="justify">
                                <b>Name :</b>
                                
                                </div>
                                <div class="field" style="margin-bottom:12px;" align="justify">
                                 <p>
									<?php 
                                    @$a="select * from spam_aboutus where category='aditya verma' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['name'];
                                    }
                                    ?></p>
                                   <div class="text" style="align='justify';">
                                <b>Description :</b>
                                </div>
                                <div class="field"  style="align='justify';">
                                                     <p>
                                    <?php 
                                    @$a="select * from spam_aboutus where category='aditya verma'order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>
                                </div>
                                
                             
             </div>
         </div>
		<div class="box1">
         <div class="l_box1">
          <div class="inner_l_box1">
         <img src="images/som.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
         
         <div class="text" style="margin-bottom:12px;" align="justify">
                                <b>Name :</b>
                                
                                </div>
                                <div class="field" style="margin-bottom:12px;" align="justify">
                                 <p>
									<?php 
                                    @$a="select * from spam_aboutus where category='som prabh sharma' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['name'];
                                    }
                                    ?></p>
                                 <div class="text" style="align='justify';">
                                <b>Description :</b>
                                </div>
                                <div class="field"  style="align='justify';">
                                                     <p>
                                    <?php 
                                    @$a="select * from spam_aboutus where category='som prabh sharma' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>
                             
                                </div>
                                
                                
             </div>
			 <div class="l_box1">
          <div class="inner_l_box1">
         <img src="images/charan.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
         
         <div class="text" style="margin-bottom:12px;" align="justify">
                                <b>Name :</b>
                                
                                </div>
                                <div class="field" style="margin-bottom:12px;" align="justify">
                                 <p>
									<?php 
                                    @$a="select * from spam_aboutus where category='priyanka' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['name'];
                                    }
                                    ?></p>
                                 <div class="text" style="align='justify';">
                                <b>Description :</b>
                                </div>
                                <div class="field"  style="align='justify';">
                                                     <p>
                                    <?php 
                                    @$a="select * from spam_aboutus where category='priyanka' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>
                             
                                </div>
                                
                                
             </div>
         </div>  
          <div class="box1">
          <div class="l_box1">
         <div class="inner_l_box1">
       <img src="images/priyanka.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
         <div class="text" style="margin-bottom:12px;" >
                                <b>Name :</b>
                                          
                                </div>
                                 <div class="field" style="margin-bottom:12px; text-align:justify" >
                                 <p>
            	<?php 
				@$a="select * from spam_aboutus where category='priyanka saxena' order by id desc limit 1";
				$q=mysql_query($a);
				while($query=mysql_fetch_array($q))
				{
				echo $query['name'];
				}
				?></p>
                
                              <div class="text"  align="justify">
                                <b>Description :</b>
                                </div>
                                <div class="field"  align="justify">
                                                     <p>
                                    <?php 
                                    @$a="select * from spam_aboutus where category='priyanka saxena' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>    
                                
                                </div>
                   
                                
                                
         </div>
           <div class="l_box1">
          <div class="inner_l_box1">
         <img src="images/usman.jpg" style="width:180px; height:180px; padding-top:10px; padding-left:10px;"/>
         </div>
         
         <div class="text" style="margin-bottom:12px;" align="justify">
                                <b>Name :</b>
                                
                                </div>
                                <div class="field" style="margin-bottom:12px;" align="justify">
                                 <p>
									<?php 
                                    @$a="select * from spam_aboutus where category='usman ali' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['name'];
                                    }
                                    ?></p>
                                 <div class="text" style="align='justify';">
                                <b>Description :</b>
                                </div>
                                <div class="field"  style="align='justify';">
                                                     <p>
                                    <?php 
                                    @$a="select * from spam_aboutus where category='usman ali' order by id desc limit 1";
                                    $q=mysql_query($a);
                                    while($query=mysql_fetch_array($q))
                                    {
                                    echo $query['description'];
                                    }
                                    ?></p>
                                </div>
                             
                                </div>
                                
                                
             </div>
         </div>  
   </div>
</div>
   
   </div>
          </body>
        <div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left" align="center">Copyright &copy; 2013 - All Rights Reserved - <a href="#">SPAM</a></p>
    <br class="clear" />
  </div>
</div>
    </body>
</html>
    
      
  