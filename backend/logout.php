<?php 
	include 'database.php';
	$update = mysqli_query($conn, "UPDATE tbl_users WHERE position = 'admin'");
	session_start();
	session_destroy();
	header("location:../index.php");
 ?>