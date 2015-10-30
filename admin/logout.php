<?php
	error_reporting(0);
	session_start();
	unset($_SESSION['email']);
	echo "<script>window.location='index.php'</script>";
?>
