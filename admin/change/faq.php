<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>
Admin | FAQ </title> 
</head>
<body>
<?php
 error_reporting(0);

	include("include/header.php");?>
    	<div id="headr" align="right">
    		<?php
			echo "<a href='logout.php' style='color:black; text-decoration:none;'>Logout </a> $nbsp" ;
			echo " $nbsp | $nbsp";
			    				echo " $nbsp<a href='change_password.php' style='color:black; text-decoration:none;'>Change password</a>";
								echo " $nbsp|$nbsp";
			    				echo " $nbsp<a href='signup.php' style='color:black; text-decoration:none;'>Register?</a>";
							?>
					
       </div>
<div id="containr">
<img src="images/cooltext1106061409.png" style="width:600px; height:100px;"/>
<div id="inner">
        <form method='get' enctype="multipart/form-data">
        <table>
        <tr><td>Category:</td>
        <td>       
         <select  name="Select_Box" style="width:120px; height:30px;" required > 
         <option value="">select</option>
         <option> better_technology</option>
         <option>project_idea</option>
         <option>best_projects</option>
         <option>list_of_projects</option>
         <option>college_project</option>
         <option>project_guidance</option>
         <option>automation</option>
       </select>
        
        
		</td></tr>
        <tr><td>
        	Enter your content:
            </td><td>
            <textarea name="text"  rows="15" style="width:300px;" ></textarea></td>
            </tr>
              <tr>
            <td></td>
            <td>
            <input type="submit" name="submit2" value="submit" style="width:100px; height:30px;">
             <a href="view_faq.php" style="width:100px; height:30px;"> View </a>
             </td>
            
            </tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td></td></tr><tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
     </table></form>
     
         <?php
		 @$a=$_GET['Select_Box'];
		 @$b=$_GET['text'];
		$divi=$_GET['Select_Box'];
				if(isset($_GET['view2']))
				{
					
					$con=$_GET['text'];
					
					$query="select * from faq ";
					$data=mysql_query($query);
					
					if($data)
					{
						echo $con=$data;
					}
				}
				
				if(isset($_GET['submit2']))
				
				{
					 @$divi=$_GET['Select_Box'];
					
					@$con=$_GET['text'];
					
					$query="insert into faq values('','$b','$a','')";
					mysql_query($query);
				}
				?>
        		</div>
                </div>
                </body>
                </html>