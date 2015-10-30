<?php
include 'include/bsr_connectivity.php';//select the table 
?>
<!--<form method="post" enctype="multipart/form-data">
 		<input name="userfile" type="file" id="userfile">  
    	<input type="submit" name="submit"  value="submit" />
</form>-->


<?php
if(isset($_POST['submit']))
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
		move_uploaded_file(@$_FILES["userfile"]["tmp_name"],	"admin/propertyimages/" . $_FILES["userfile"]["name"]);
		//resume stored in upload_database folder
		 "Stored in: " . "admin/propertyimages/" . $_FILES["userfile"]["name"];
		// file name,size,type,content stored in database
		
		 "<br>File"; ?> <?php echo  $file_name ?> <?php "uploaded<br>"; 
	}

?>

<?php 

	$q = "insert into bsr_bsr values('', '$file_name', now())";
	$s = mysql_query($q);
	if ($s)
	{
		echo 'values inserted';
	}
	else 
	{
		echo 'values not inserted';
	}
}

$q1 = "select * from images";
$s1 = mysql_query ($q1);
while($d = mysql_fetch_array($s1))
{
	?>
    	<img src="data/<?php echo $d['name'];?>" />
    <?php
}