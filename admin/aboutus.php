<?php
	session_start();
include 'include/connect.php';//select the table 
	
	
?><head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<title>Admin | AboutUs</title>
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
        <form method='post' enctype="multipart/form-data">
            <table>
        <tr><td>
        	Category:
            </td>  <td>  
         <select  name="Select_Box" style="width:120px; height:30px;" required> 
         <option value="">Select  </option>
         <option>About_Training </option>
         <option>About_Company </option>
         <option >Himani </option>
         <option >Priyanka</option>
          <option >Jatin</option>
           <option >Neelansh</option>
            <option >Tanmay</option>
             <option >Shivani</option>
         </select>
        		</td></tr>
  
       
        <tr><td>
        	Enter your content:
            </td><td>
            <textarea name="text1" rows="2" style="width:300px;" ></textarea></td>
            </tr>
            <tr><td>
        	Image:


            </td>
            <td>
            <input name="userfile" type="file" id="userfile" /></td>
            </tr>
			<tr><td>
        	Enter your Name:
            </td><td>
            <textarea name="text3" style="width:300px;" ></textarea></td>
            </tr>
			<tr><td>
        	Enter your Email:
            </td><td>
            <textarea name="text4" style="width:300px;" ></textarea></td>
            </tr><br>
			<tr><td>
        	Enter your description:
            </td><td>
            <textarea name="text5" style="width:300px;" ></textarea></td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" name="submit2" value="submit" style="width:100px; height:30px;">
             <a href="view_aboutus.php" style="width:100px; height:30px;"> View</a>
             </td>
            
            </tr>
            <tr><td><td></td></td></tr>
            <tr><td><td></td></td></tr>
            </table>
         </form>
   <?php
if(isset($_POST['submit2']))
{
	
		@$resume=trim($_FILES['userfile']['name']);
if(@$_FILES['userfile']['size'] > 0) 
	{ 
		$file_name = $_FILES['userfile']['name']; 
		$tmpName  = $_FILES['userfile']['tmp_name']; 
		$fileSize = $_FILES['userfile']['size']; 
		$fileType = $_FILES['userfile']['type']; 
		$fp      = fopen($tmpName, 'rb'); 
		$content = fread($fp, filesize($tmpName)); 
		$content = addslashes($content); 
		
		if(!get_magic_quotes_gpc()) 
		{ 
			$fileName = addslashes($file_name); 
		}
		//resume move in upload_database folder 
		move_uploaded_file(@$_FILES["userfile"]["tmp_name"],	"propertyimages/" . $_FILES["userfile"]["name"]);
		//resume stored in upload_database folder
		 "Stored in: " . "propertyimages/" . $_FILES["userfile"]["name"];
		// file name,size,type,content stored in database
		
		 "<br>File"; ?> <?php echo  $file_name ?> <?php "uploaded<br>"; 
	}

					$divi=$_POST['Select_Box'];
					$con1=$_POST['text1'];
					
					$con3=$_POST['text3'];
					$con4=$_POST['text4'];
					$con5=$_POST['text5'];
					
					$query="insert into bsr_aboutus values('','$divi','$con1','$file_name','$con3','$con4','$con5',now(),'0')";
					$sql= mysql_query($query);
					if($sql)
					{
						?><script> alert("value inserted")</script>;
                        <?php
					}
					
				}
				?>
				</div>
                </div>
                </body>
                </html>